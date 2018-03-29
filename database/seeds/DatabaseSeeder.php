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
        DB::table('categorys')->insert([
            'name' => str_random(10)
        ]);
        
        DB::table('courses')->insert([
            'name' => str_random(10),
            'capacity' => 5,
            'location' => str_random(10),
        ]);
    }
}
