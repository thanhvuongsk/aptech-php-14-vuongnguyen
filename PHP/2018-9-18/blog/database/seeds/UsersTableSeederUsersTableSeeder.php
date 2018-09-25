<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeederUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
             DB::table('users')->insert([
           
            'votes' => str_random(10).'@gmail.com',
            
            ]);
    }
}
