<?php

namespace Database\Seeders;

use App\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = array_column(RoleEnum::cases(), 'value');

        foreach ($roles as $role) {
            $createRole = Role::create(['name' => $role]);

            $createRole->syncPermissions($this->getPermission($role));

            unset($role);
        }
    }

    protected function getPermission($role): Collection
    {
        return match ($role) {
            RoleEnum::Admin->value => Permission::all(),
            RoleEnum::User->value => Permission::where('name', '=', 'roles.index')
                ->orWhere('name', '=', 'products.index')
                ->orWhere('name', '=', 'products.create')
                ->get(),
            RoleEnum::Manager->value => Permission::where('name', '=', 'roles.index')
                ->orWhere('name', '=', 'products.index')
                ->orWhere('name', '=', 'products.create')
                ->orWhere('name', '=', 'products.edit')
                ->orWhere('name', '=', 'products.delete')
                ->get(),
            RoleEnum::TeamLead->value => Permission::where('name', '=', 'roles.index')
                ->orWhere('name', '=', 'roles.create')
                ->orWhere('name', '=', 'products.index')
                ->orWhere('name', '=', 'products.create')
                ->orWhere('name', '=', 'products.edit')
                ->orWhere('name', '=', 'products.delete')
                ->get(),
        };
    }
}
