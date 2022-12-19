<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->updateOrCreate([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at' => now(),
//            'status' => 1,
            'password'=>Hash::make(12345),
            'remember_token' => Str::random(10)
        ]);
    }
}
//'name' => 'Admin',
//            'email' => 'admin@gmail.com',
//            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'remember_token' => Str::random(10),
