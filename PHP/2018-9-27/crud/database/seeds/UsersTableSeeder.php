<?php

use Illuminate\Database\Seeder;
use App\User;//thêm dòng này
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
        $faker = Faker\Factory::create();
        $limit = 33;
        for($i=0;$i<$limit;$i++){
            //Mặt định DB::users
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->phoneNumber,
            ]);
            }	
	
    }
}
