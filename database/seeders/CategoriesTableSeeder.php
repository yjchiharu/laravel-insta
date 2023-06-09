<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    private $category;
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    
    public function run()
    {
        $categories = [
            [
                'name' => 'Travel',
                'created_at' => Now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Music',
                'created_at' => Now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cooking',
                'created_at' => Now(),
                'updated_at' => now(),
            ],
        ];

        $this->category->insert($categories);
    }
}
