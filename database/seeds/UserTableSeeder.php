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
        $user = App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'admin'  => 1,
            'avatar' => 'uploads/avatars/avatar.png',
        ]);

         $user = App\User::create([
            'name' => 'noor',
            'email' => 'noor@gmail.com',
            'password' => bcrypt('123456'),
            'avatar' => 'uploads/avatars/avatar.png',
        ]);
    }
}
