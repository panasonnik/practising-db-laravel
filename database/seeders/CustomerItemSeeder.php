<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Customer;

class CustomerItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = Item::all();
        $customers = Customer::all();
        foreach($customers as $customer) {
            $itemsToAttach =  $items->random(rand(1, $items->count()));
            $itemsToAttach = $itemsToAttach->unique('id');//видалити повтори
            $customer->items()->attach($itemsToAttach);
        }
    }
}
