<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
                'post_id' =>'post-id thu' .$i,
                'category_id' =>'category-id thu' .$i,
                
            ]
                
            );
        }
    }
}
