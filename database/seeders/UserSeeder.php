<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@undangan.id',
            'password' => bcrypt('12345678'),
        ]);

        $superadmin->assignRole('superadmin');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@undangan.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'budi',
            'email' => 'budi@undangan.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
