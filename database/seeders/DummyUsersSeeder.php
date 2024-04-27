<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'John Doe',
                'email' => 'users@gmail.com',
                'password' => Hash::make('123456ab'),
                'role' => 'user',
            ],
            [
                'name' => 'Steve Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345abc'),
                'role' => 'admin',
            ],
            [
                'name' => 'John Smith',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('1234abcd'),
                'role' => 'staff admin',
            ]
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
