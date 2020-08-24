<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name'          =>  'Root',
            'category_desc'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
        ]);

        factory('App\Models\Categories', 10)->create();
    }
}
