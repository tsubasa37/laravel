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
                'name' => 'test1',
                'email' => 'test1@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
            [
                'name' => 'test2',
                'email' => 'test2@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
            [
                'name' => 'test3',
                'email' => 'test3@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
            [
                'name' => 'test4',
                'email' => 'test4@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
            [
                'name' => 'test5',
                'email' => 'test5@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
            [
                'name' => 'test6',
                'email' => 'test6@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/6/19 11:11:11'
            ],
        ]);
    }
}
