<?php

namespace App\Helpers;

readonly class Permissions
{
    public const string VIEW_ANY = 'view-any';
    public const string VIEW = 'view';
    public const string CREATE = 'create';
    public const string UPDATE = 'update';
    public const string DELETE = 'delete';
    public const string RESTORE = 'restore';
    public const string FORCE_DELETE = 'force-delete';


    public const string VIEW_HORIZON = 'view horizon';
    public const string VIEW_TELESCOPE = 'view telescope';
    public const string VIEW_ADMIN_DASHBOARD = 'view admin dashboard';
    public const string VIEW_PULSE = 'view pulse';
    public static function custom(): array
    {
        return [
            self::VIEW_HORIZON,
            self::VIEW_TELESCOPE,
            self::VIEW_ADMIN_DASHBOARD,
            self::VIEW_PULSE,
        ];
    }
}
