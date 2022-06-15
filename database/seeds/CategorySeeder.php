<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

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
            [ 'label' => 'HTML', 'color' => 'danger' ],
            [ 'label' => 'Css', 'color' => 'primary' ],
            [ 'label' => 'Js', 'color' => 'info' ],
            [ 'label' => 'Laravel', 'color' => 'danger' ],
        ];

        foreach($categories as $category){
            $newCategory = new Category();
            $newCategory->label = $category['label'];
            $newCategory->color = $category['color'];
            $newCategory->save();
        }

    }
}