<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Status;

class CustomerStatusController extends Controller
{
    public function customers() {
        return view('customers',['customers'=>Customer::all()]);
    }
    public function statuses() {
        return view('statuses',['statuses'=>Status::all()]);
    }
    public function customer($id) {
    $customer = Customer::with('status')->find($id);
    return view('customer', ['customer' => $customer]);
    }

    public function statusCustomers($id) {
        $status = Status::findOrFail($id);
        $customers = $status->customers()->get();
        return view('status-customers', ['status' => $status, 'customers' => $customers]);
    }




}
