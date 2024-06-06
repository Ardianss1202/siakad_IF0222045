<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat beberapa contoh data untuk tabel 'users'
        DB::table('users')->insert([
            'name' => 'Ardianss',
            'email' => 'ardianss@gmail.com',
            'email_verified_at' => now(),
            'password' => hash::make('ardianss'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'email_verified_at' => now(),
            'password' => hash::make('password456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan entri lain sesuai kebutuhan
    }
}
