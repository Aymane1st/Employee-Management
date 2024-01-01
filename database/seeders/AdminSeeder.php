<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // User::create([
              //  'name'=>'aymane',
              //  'email'=>'aymane@gmail.com',
              //  'password'=>Hash::make('123456')
           // ]);

            User::create([
                'name'=>'reda',
                'email'=>'reda2@gmail.com',
                'password'=>Hash::make('123789')
            ]);
    }
}
