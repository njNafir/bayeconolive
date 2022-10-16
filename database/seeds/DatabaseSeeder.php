<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    	// Model::unguard(); // Disable mass assignment

	    	$this->call(StudentSeeder::class);
            $this->call(TeacherSeeder::class);
	    	// $this->call(StudentClassSeeder::class);

	        // Model::reguard(); // Enable mass assignment
         
    }
}
