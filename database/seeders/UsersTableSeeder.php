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
            ['nama' => 'Budi Santoso', 'username' => 'budisan', 'password' => bcrypt('hash123'), 'email' => 'budi@email.com'],
            ['nama' => 'Ani Wijaya', 'username' => 'aniw', 'password' => bcrypt('hash124'), 'email' => 'ani@email.com'],
            ['nama' => 'Citra Dewi', 'username' => 'citradw', 'password' => bcrypt('hash125'), 'email' => 'citra@email.com'],
            ['nama' => 'Dedi Kurniawan', 'username' => 'dedik', 'password' => bcrypt('hash126'), 'email' => 'dedi@email.com'],
            ['nama' => 'Eka Putri', 'username' => 'ekaptr', 'password' => bcrypt('hash127'), 'email' => 'eka@email.com'],
            ['nama' => 'Fajar Ramadhan', 'username' => 'fajarr', 'password' => bcrypt('hash128'), 'email' => 'fajar@email.com'],
            ['nama' => 'Gita Sari', 'username' => 'gitasr', 'password' => bcrypt('hash129'), 'email' => 'gita@email.com'],
            ['nama' => 'Hadi Prasetyo', 'username' => 'hadip', 'password' => bcrypt('hash130'), 'email' => 'hadi@email.com'],
            ['nama' => 'Indah Permata', 'username' => 'indahp', 'password' => bcrypt('hash131'), 'email' => 'indah@email.com'],
            ['nama' => 'Joko Widodo', 'username' => 'jokow', 'password' => bcrypt('hash132'), 'email' => 'joko@email.com'],
        ]);
    }
}
