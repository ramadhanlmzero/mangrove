<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => (string) Str::uuid(),
            'nama' => 'Debyana Nur Savitri',
            'email' => 'debysavitri83@gmail.com',
            'password' => bcrypt('deby123'),
            'created_at' => now(),
            'updated_at' => now(),
            'hak_akses' => 'Admin',
        ]);
    }
}
