<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Status;

class CustomerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = Customer::all();
        $statuses = Status::all();

        $customers->each(function ($customer) use ($statuses) {
            $status = $statuses->random();
            $customer->status()->associate($status);
            $customer->save();
        });
    }
}
