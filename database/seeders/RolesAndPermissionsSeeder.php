<?php

namespace Database\Seeders;

use App\Helpers\Permissions;
use App\Helpers\Roles;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public const string DEFAULT_GUARD = 'web';

    public function __construct(private readonly PermissionRegistrar $registrar)
    {
    }

    public function run(): void
    {
        $this->registrar->forgetCachedPermissions();
        $owner = Role::create(['name' => Roles::OWNER, 'guard_name' => self::DEFAULT_GUARD]);
        Permission::create(['name' => Permissions::VIEW_HORIZON, 'guard_name' => self::DEFAULT_GUARD]);
        Permission::create(['name' => Permissions::VIEW_TELESCOPE, 'guard_name' => self::DEFAULT_GUARD]);
        Permission::create(['name' => Permissions::VIEW_ADMIN_DASHBOARD, 'guard_name' => self::DEFAULT_GUARD]);
        $owner->givePermissionTo(Permission::all());
    }
}
