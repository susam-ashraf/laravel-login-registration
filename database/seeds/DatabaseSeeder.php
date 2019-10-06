<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $password = bcrypt('123456');
        \App\User::create([
            'name' => 'Susam Ashraf',
            'email' => 'susam.ashraf@gmail.com',
            'password' => $password
        ]);

    }
}
