<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => 'Admin',
            'email'          => 'admin@gmail.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => now(),
            'created_at'     => now(),
            'updated_at'     => now()
        ]);
    }
}
