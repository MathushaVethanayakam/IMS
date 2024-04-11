<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'fullname' => 'hod chemistry depat',
            'username' => 'admin',
            'role'=>'admin',
            'email' => 'chemistry@univ.jfn.ac.lk',
            
            'password' => Hash::make('admin123'),
        ]);

        // Create more users if needed
    }
}
