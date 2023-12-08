<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::create([
            'role_name' => 'Admin'
        ]);

        Roles::create([
            'role_name' => 'HR'
        ]);

        Roles::create([
            'role_name' => 'Manager'
        ]);

        Roles::create([
            'role_name' => 'Employee'
        ]);
    }
}
