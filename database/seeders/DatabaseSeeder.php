<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Marketplace',
            'username' => 'admin',
            'kontak' => '08756789678',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'Member ',
            'username' => 'member1',
            'kontak' => '076456786756',
            'role' => 'member',
            'password' => bcrypt('member123'),
        ]);
    }
}
 