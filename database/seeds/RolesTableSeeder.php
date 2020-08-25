<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'name' => 'Super admin'],
            ['id' => 2, 'name' => 'Admin'],
            ['id' => 3, 'name' => 'Organizer'],
            ['id' => 4, 'name' => 'Exhibitor'],
            ['id' => 5, 'name' => 'Visitor'],
            ['id' => 6, 'name' => 'Speaker'],
        ];
        DB::table('roles')->insert($roles);
    }
}
