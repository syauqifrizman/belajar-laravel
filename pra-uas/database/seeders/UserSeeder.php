<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Syauqi Frizman',
                'username' => 'syauqifrizman',
                'email' => 'syauqi@gmai.com',
                'password' => bcrypt('syauqi'),
            ],
            [
                'name' => 'Uqisya',
                'username' => 'uqisya',
                'email' => 'uqisya@gmai.com',
                'password' => bcrypt('uqisya'),
            ],
            [
                'name' => 'Mutia Sari Dewi',
                'username' => 'mutiasaridewi',
                'email' => 'mutia@gmai.com',
                'password' => bcrypt('mutia'),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
