<?php

use Illuminate\Database\Seeder;

class User_StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
		        	['name' => 'Active',] , 
		        	['name' => 'Pending',] , 
		        	['name' => 'Inactive',] , 
		        );
       App\User_status::insert($data);
    }
}
