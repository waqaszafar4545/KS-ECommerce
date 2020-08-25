<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => 1, 'first_name' => 'Super', 'last_name' => 'Admin', 'email' => 'abbasnaumani+1@gmail.com', 'password' => bcrypt('12345678'), 'is_active' => 1, 'is_approved' => 1],
            ['id' => 2, 'first_name' => 'Admin', 'last_name' => 'User', 'email' => 'abbasnaumani+2@gmail.com', 'password' => bcrypt('12345678'), 'is_active' => 1, 'is_approved' => 1],
            ['id' => 3, 'first_name' => 'Organizer', 'last_name' => 'User', 'email' => 'abbasnaumani+3@gmail.com', 'password' => bcrypt('12345678'), 'is_active' => 1, 'is_approved' => 1],
            ['id' => 4, 'first_name' => 'Exhibitor', 'last_name' => 'User', 'email' => 'abbasnaumani+4@gmail.com', 'password' => bcrypt('12345678'), 'is_active' => 1, 'is_approved' => 1],
            ['id' => 5, 'first_name' => 'Visitor', 'last_name' => 'User', 'email' => 'abbasnaumani+5@gmail.com', 'password' => bcrypt('12345678'), 'is_active' => 1, 'is_approved' => 1],
            ['id' => 6, 'first_name' => 'Speaker', 'last_name' => 'User', 'email' => 'abbasnaumani+6@gmail.com', 'password' => bcrypt('12345678'), 'is_active' => 1, 'is_approved' => 1],
        ];
        DB::table('users')->insert($users);
    }
}
