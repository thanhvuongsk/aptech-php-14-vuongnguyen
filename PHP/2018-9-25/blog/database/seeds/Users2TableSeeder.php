<?php

use Illuminate\Database\Seeder;

class Users2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<10;$i++){
            DB::table('users2')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'pw' =>str_random('secret'),
        ]);
    }
}
}
