<?php

use Illuminate\Database\Seeder;

class Property_TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
		        	['name' => 'Condo',] , 
		        	['name' => 'Borey',] , 
		        	['name' => 'Land',] , 
		        );
       App\Property_Type::insert($data);
    }
}
