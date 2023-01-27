<?php

use App\Models\Category;
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
        $categories = [
            'antipasti',
            'primi',
            'secondi',
            'contorni',
            'dolci'
        ];

        foreach ($categories as $category){
            $newCategory = new Category();
            $newCategory->title = $category;
            $newCategory->save();
        }

    }
}
