<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::create([
            'name' => 'Dummy User',
            'email' => 'your@emailaddress.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);
        \App\User::create([
            'name' => 'Mohamed Kawsara',
            'email' => 'mkwsra@gmail.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);
        \App\User::create([
            'name' => 'Jeremy Bilawa',
            'email' => 'git@mcclainconcepts.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);
    }
}
