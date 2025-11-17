<?php

namespace Database\Seeders;

use App\PermissionEnum;
use App\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = array_column(RoleEnum::cases(), 'value');

        foreach ($roles as $role) {

            $createRole = Role::create([
                'name' => $role,
                'guard_name' => 'web',
            ]);

            $createRole->syncPermissions(
                $this->getPermission($role)
            );
        }
    }

    protected function getPermission($role): Collection
    {
        return match ($role) {

            RoleEnum::Admin->value,
            RoleEnum::SuperAdmin->value =>
            Permission::all(),

            RoleEnum::User->value =>
            Permission::whereIn('name', [
                PermissionEnum::RolesIndex->value,
                PermissionEnum::ProductsIndex->value,
                PermissionEnum::ProductsShow->value,
            ])->get(),

            RoleEnum::Manager->value =>
            Permission::whereIn('name', [
                PermissionEnum::RolesIndex->value,
                PermissionEnum::ProductsIndex->value,
                PermissionEnum::ProductsShow->value,
                PermissionEnum::ProductsEdit->value,
                PermissionEnum::ProductsDelete->value,
            ])->get(),

            RoleEnum::TeamLead->value =>
            Permission::whereIn('name', [
                PermissionEnum::RolesIndex->value,
                PermissionEnum::RolesCreate->value,
                PermissionEnum::ProductsIndex->value,
                PermissionEnum::ProductsShow->value,
                PermissionEnum::ProductsEdit->value,
                PermissionEnum::ProductsDelete->value,
            ])->get(),

            default => collect(),
        };
    }
}

