<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class CategoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = Item::all();
        $categories = Category::all();
        foreach($items as $item) {
            $categoriesToAttach =  $categories->random(rand(1, $categories->count()));
            $categoriesToAttach = $categoriesToAttach->unique('id');//видалити повтори
            $item->categories()->attach($categoriesToAttach);
        }
    }
}
