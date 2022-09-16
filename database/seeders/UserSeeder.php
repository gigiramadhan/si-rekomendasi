<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'username' => 'admin',
            'level' => 'admin',
            'email' => 'adminsirekperum@gmail.com',
            'password' => bcrypt('adminsirekperum'),
            'remember_token' => Str::random(60),

        ]);

        User::create([
            'name' => 'Pengelola Aplikasi',
            'username' => 'pengelola',
            'level' => 'pengelola',
            'email' => 'pengelolasirekperum@gmail.com',
            'password' => bcrypt('pengelolasirekperum'),
            'remember_token' => Str::random(60),

        ]);

        User::create([
            'name' => 'Gilang Ramadhan',
            'username' => 'giiramadhan',
            'level' => 'pengunjung',
            'email' => 'gr072885@gmail.com',
            'password' => bcrypt('giiramadhan07'),
            'remember_token' => Str::random(60),

        ]);
    }
}
