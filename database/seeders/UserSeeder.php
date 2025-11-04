<?php

namespace Database\Seeders;

use App\Models\User;
use App\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->admin();
        $this->user();
        $this->manager();
        $this->teamLead();
    }

    protected function admin(): void
    {
        $admin = User::factory()->create([
            'name' => RoleEnum::Admin->value,
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole(RoleEnum::Admin->value);
    }

    protected function user(): void
    {
        $user = User::factory()->create([
            'name' => RoleEnum::User->value,
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole(RoleEnum::User->value);
    }

    protected function manager(): void
    {
        $manager = User::factory()->create([
            'name' => RoleEnum::Manager->value,
            'email' => 'manager@example.com',
            'password' => bcrypt('password'),
        ]);

        $manager->assignRole(RoleEnum::Manager->value);
    }

    protected function teamLead(): void
    {
        $teamLead = User::factory()->create([
            'name' => RoleEnum::TeamLead->value,
            'email' => 'team-lead@example.com',
            'password' => bcrypt('password'),
        ]);

        $teamLead->assignRole(RoleEnum::TeamLead->value);
    }
}
