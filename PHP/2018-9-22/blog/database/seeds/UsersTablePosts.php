<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTablePosts extends Seeder
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
            DB::table('posts')->insert([
                'title' =>'title thu' .$i,
                'description' =>'description' .$i,
                'content' =>'content' .$i,
            ]
                
            );
        }
    }
}
