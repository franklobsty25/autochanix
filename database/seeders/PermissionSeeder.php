<?php

namespace Database\Seeders;

use App\PermissionEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = array_column(PermissionEnum::cases(), 'value');

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);

            unset($permission);
        }
    }
}
