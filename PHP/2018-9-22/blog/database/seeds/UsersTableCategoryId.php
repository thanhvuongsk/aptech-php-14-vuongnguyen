<?php

use Illuminate\Database\Seeder;

class UsersTableCategoryId extends Seeder
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
            DB::table('category-post')->insert([
                'post-id' =>'post-id thu' .$i,
                'category-id' =>'category-id thu' .$i,
                
            ]
                
            );
        }
    }
}
