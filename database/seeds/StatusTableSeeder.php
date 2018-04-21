<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
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
       App\status::insert($data);
    }
}
