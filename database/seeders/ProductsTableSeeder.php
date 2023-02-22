<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 29,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:49:02',
                'updated_at' => '2022-08-05 06:49:02',
            ),
            1 => 
            array (
                'id' => 30,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:49:33',
                'updated_at' => '2022-08-05 06:49:33',
            ),
            2 => 
            array (
                'id' => 31,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:49:34',
                'updated_at' => '2022-08-05 06:49:34',
            ),
            3 => 
            array (
                'id' => 32,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:49:42',
                'updated_at' => '2022-08-05 06:49:42',
            ),
            4 => 
            array (
                'id' => 33,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:53:17',
                'updated_at' => '2022-08-05 06:53:17',
            ),
            5 => 
            array (
                'id' => 34,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:53:17',
                'updated_at' => '2022-08-05 06:53:17',
            ),
            6 => 
            array (
                'id' => 35,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:53:19',
                'updated_at' => '2022-08-05 06:53:19',
            ),
            7 => 
            array (
                'id' => 36,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:53:21',
                'updated_at' => '2022-08-05 06:53:21',
            ),
            8 => 
            array (
                'id' => 37,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:53:22',
                'updated_at' => '2022-08-05 06:53:22',
            ),
            9 => 
            array (
                'id' => 38,
                'name' => 'data 2',
                'flag_active' => 1,
                'created_at' => '2022-08-05 06:53:22',
                'updated_at' => '2022-08-05 06:53:22',
            ),
        ));
        
        
    }
}