<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('owners')->insert([
            [
                'name' => 'test',
                'email' => 'test1@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
            [
                'name' => 'test',
                'email' => 'test2@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
            [
                'name' => 'test',
                'email' => 'test3@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
        ]);
    }
}
