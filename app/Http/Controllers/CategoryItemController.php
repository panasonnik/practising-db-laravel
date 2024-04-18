<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class CategoryItemController extends Controller
{
    public function items() {
        return view('items',['items'=>Item::all()]);
    }
    public function categories() {
        return view('categories',['categories'=>Category::all()]);
    }
    public function item($id) {
        return view('item',['item'=>Item::find($id)]);
    }
    public function category($id) {
        return view('category',['category'=>Category::find($id)]);
    }
    public function itemCategories($id) {
        $item = Item::find($id);
        $categories=$item->categories;

        return view('item-categories',['categories'=>$categories, 'item'=>$item]);
    }
    public function categoryItems($id) {
        $category = Category::find($id);
        $items=$category->items;

        return view('category-items',['category'=>$category, 'items'=>$items]);
    }
}
