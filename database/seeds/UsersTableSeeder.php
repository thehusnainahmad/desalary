<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$rA.UbFkvBY0TnPXC5AvdEew7ITCs.PFo9eAfkH.m48GlOdhFMXvLG',
                'remember_token' => null,
                'created_at'     => '2019-09-15 06:09:29',
                'updated_at'     => '2019-09-15 06:09:29',
            ],
			   [
                'id'             => 2,
                'name'           => 'HUSNAIN AHMAD',
                'email'          => 'husnain@gmail.com',
                'password'       => '$2y$10$FW.q4Ajr04FAMX6EoB21G.mhuf/Qrd7XLBdQL/Q7GjI4WU3fuMHpm',
                'remember_token' => null,
                'created_at'     => '2021-06-25 08:24:47',
                'updated_at'     => '2021-06-25 08:24:47',
            ],
			   
			   
			   ];

        User::insert($users);
    }
}
