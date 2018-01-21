<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(TeacherTableSeeder::class);
    	$this->call(StudentTableSeeder::class);
    	$this->call(SchoolTableSeeder::class);
        $this->call(SocialTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(NewTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(RateTableSeeder::class);
    }
}
