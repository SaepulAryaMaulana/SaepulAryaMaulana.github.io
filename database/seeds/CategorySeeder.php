<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'sandal',
        ]);

        DB::table('categories')->insert([
            'name' => 'sepatu',
        ]);

        DB::table('categories')->insert([
            'name' => 'kaos kaki',
        ]);

        DB::table('categories')->insert([
            'name' => 'tali sepatu',
        ]);
    }
}
