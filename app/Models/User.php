<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Queue;
use App\Helpers\Permissions;
use App\Helpers\Roles;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use Database\Factories\UserFactory;
use Exception;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Notifications\Auth\VerifyEmail;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Jeffgreco13\FilamentBreezy\Traits\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;
use Override;
use SensitiveParameter;
use Spatie\Permission\Traits\HasRoles;
use Tpetry\PostgresqlEnhanced\Eloquent\Concerns\AutomaticDateFormatWithMilliseconds;
use Tpetry\PostgresqlEnhanced\Eloquent\Concerns\RefreshDataOnSave;

/**
 * App\Models\User
 *
 * @property string $password
 * @property-read DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 *
 * @method static UserFactory factory($count = null, $state = [])
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 *
 * @mixin Model
 */
class User extends Authenticatable implements FilamentUser, HasAvatar, MustVerifyEmail
{
    use AutomaticDateFormatWithMilliseconds;
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use Notifiable;
    use RefreshDataOnSave;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'avatar_url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * @throws Exception
     */
    #[Override]
    public function canAccessPanel(Panel $panel): bool
    {
        return match ($panel->getId()) {
            'admin' => $this->hasVerifiedEmail() && $this->can(Permissions::VIEW_ADMIN_DASHBOARD),
            default => false,
        };
    }

    #[Override]
    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar_url ? Storage::drive('profile-photos')->url($this->avatar_url) : null;
    }

    public function isOwner(): bool
    {
        return $this->hasRole(Roles::OWNER);
    }

    public function sendEmailVerificationNotification(): void
    {
        $verifyEmail = (new VerifyEmail)->onQueue(Queue::Notifications)->delay(now()->addSeconds(10));

        $this->notify($verifyEmail);
    }

    public function sendPasswordResetNotification(#[SensitiveParameter] $token): void
    {
        $this->notify(
            new ResetPasswordNotification($token)->onQueue(Queue::Notifications)->delay(now()->addSeconds(10)),
        );
    }

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'immutable_datetime',
            'created_at' => 'immutable_datetime',
            'updated_at' => 'immutable_datetime',
            'password' => 'hashed',
        ];
    }
}
