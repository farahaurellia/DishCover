<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'budisan', 'password' => bcrypt('hash123'), 'email' => 'budi@email.com'],
            ['username' => 'aniw', 'password' => bcrypt('hash124'), 'email' => 'ani@email.com'],
            ['username' => 'citradw', 'password' => bcrypt('hash125'), 'email' => 'citra@email.com'],
            ['username' => 'dedik', 'password' => bcrypt('hash126'), 'email' => 'dedi@email.com'],
            ['username' => 'ekaptr', 'password' => bcrypt('hash127'), 'email' => 'eka@email.com'],
            ['username' => 'fajarr', 'password' => bcrypt('hash128'), 'email' => 'fajar@email.com'],
            ['username' => 'gitasr', 'password' => bcrypt('hash129'), 'email' => 'gita@email.com'],
            ['username' => 'hadip', 'password' => bcrypt('hash130'), 'email' => 'hadi@email.com'],
            ['username' => 'indahp', 'password' => bcrypt('hash131'), 'email' => 'indah@email.com'],
            ['username' => 'jokow', 'password' => bcrypt('hash132'), 'email' => 'joko@email.com'],
        ]);
    }
}
