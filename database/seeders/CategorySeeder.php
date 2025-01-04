<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $category = Category::create(['name' => 'Electronics']);

        $category->products()->createMany([
            ['name' => 'Laptop'],
            ['name' => 'Smartphone'],
            ['name' => 'Tablet'],
        ]);
    }
}
