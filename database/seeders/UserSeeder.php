<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
          'name'=>'Manager',
          'email'=>'jololovizzatillo35@gmail.com',
          'role_id'=>1,
          'password'=> Hash::make('password')
       ]);
    }
}
