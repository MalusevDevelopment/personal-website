<?php

namespace App\Filament\Resources\UserResource;

use App\Models\User;
use Filament\AvatarProviders\UiAvatarsProvider;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

final readonly class UserUI
{
    public static function table(): array
    {
        return [
            TextColumn::make('id')
                ->label('ID')
                ->numeric()
                ->sortable(),
            ImageColumn::make('avatar_url')
                ->disk('profile-photos')
                ->default(fn (User $record, UiAvatarsProvider $avatars) => $avatars->get($record))
                ->size(40)
                ->checkFileExistence(false)
                ->circular(),
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            TextColumn::make('email')
                ->sortable()
                ->searchable(),
            TextColumn::make('roles.0.name')
                ->label('Role')
                ->formatStateUsing(fn (string $state) => Str::title($state)),
            IconColumn::make('email_verified_at')
                ->sortable()
                ->color(fn (User $record) => $record->hasVerifiedEmail() ? 'success' : 'danger')
                ->icon(fn (User $record) => $record->hasVerifiedEmail() ? 'heroicon-s-check' : 'heroicon-o-x-circle')
                ->default('heroicon-o-x-circle')
                ->toggleable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    public static function create(): array
    {
        return [
            FileUpload::make('avatar_url')
                ->disk('profile-photos')
                ->avatar()
                ->imageEditor()
                ->circleCropper()
                ->openable()
                ->image()
                ->moveFiles()
                ->imageEditorEmptyFillColor('rgba(255, 255, 255, 1)')
                ->imageEditorMode(2),
            TextInput::make('name')
                ->required()
                ->maxLength(50),
            TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(150),
            TextInput::make('password')
                ->password()
                ->required()
                ->rules([
                    Password::default()
                        ->mixedCase()
                        ->letters()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(3),
                ])
                ->maxLength(72),
            Select::make('roles')
                ->relationship(name: 'roles', titleAttribute: 'name')
                ->saveRelationshipsUsing(function (Model $record, $state) {
                    $record->roles()->syncWithPivotValues($state, [config('permission.column_names.team_foreign_key') => getPermissionsTeamId()]);
                })
                ->multiple()
                ->preload()
                ->searchable(['name'])
                ->native(false)
                ->label('Role'),
            Toggle::make('email_verified_at')
                ->inline()
                ->default(false)
                ->label('Email Verified'),
        ];
    }

    public static function edit(): array
    {
        return [
            FileUpload::make('avatar_url')
                ->disk('profile-photos')
                ->avatar()
                ->imageEditor()
                ->circleCropper()
                ->openable()
                ->image()
                ->moveFiles()
                ->imageEditorEmptyFillColor('rgba(255, 255, 255, 1)')
                ->imageEditorMode(2),
            TextInput::make('name')
                ->required()
                ->maxLength(50),
            TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(150),
            TextInput::make('password')
                ->password()
                ->rules([
                    Password::default()
                        ->mixedCase()
                        ->letters()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(3),
                ])
                ->maxLength(72),
            Select::make('roles')
                ->relationship(name: 'roles', titleAttribute: 'name')
                ->saveRelationshipsUsing(function (Model $record, $state) {
                    $record->roles()->syncWithPivotValues($state, [config('permission.column_names.team_foreign_key') => getPermissionsTeamId()]);
                })
                ->multiple()
                ->preload()
                ->searchable(['name'])
                ->native(false)
                ->label('Role'),
            Toggle::make('email_verified_at')
                ->inline()
                ->formatStateUsing(fn (User $record) => $record->hasVerifiedEmail())
                ->default(false)
                ->label('Email Verified'),
        ];
    }
}
