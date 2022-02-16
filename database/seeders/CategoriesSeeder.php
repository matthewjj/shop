<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Solar Panels',
            'description' => 'Solar Panels',
        ]);

        DB::table('categories')->insert([
            'name' => 'Car Batteries',
            'description' => 'Car Batteries',
        ]);
    }
}
