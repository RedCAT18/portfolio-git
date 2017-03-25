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
        $users = [
            [
                'name' => 'admin',
                'email' => 'akaineko18@gmail.com',
                'password' => bcrypt('akxls0907')
            ]
        ];

        foreach($users as $user) {
            App\User::create($user);
        }

    }
}
