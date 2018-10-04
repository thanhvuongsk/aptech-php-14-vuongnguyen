<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // for($i=0;$i<10;$i++){
        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' =>str_random('secret')
        // ]);
        // }
        for($i=0;$i<10;$i++){
            //Mặt định DB::users
            User::create([
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' =>str_random('secret')
            ]);
            }
    }
}
