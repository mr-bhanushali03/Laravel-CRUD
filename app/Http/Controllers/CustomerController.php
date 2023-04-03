<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer/create');
    }

    public function insert(Request $insert)
    {
        $insert->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]
            );

        // Insert Query

        // $customer = new Customer;
        // $customer->name = $insert['name'];
        // $customer->email = $insert['email'];
        // $customer->password = $insert['password'];
        // $customer->save();
        // dd($insert->all());
        Customer::create($insert->all());

        return redirect(route('show'));
    }

    public function view()
    {
        $all_customer = Customer::all();
        $data = compact('all_customer');
        return view('customer/select')->with($data);
    }

    public function delete($id)
    {
        $customer_delete = Customer::find($id);
        if (!is_null($customer_delete)) {
            $customer_delete->delete();
        }
        return redirect(route('show'));
    }

    public function update($id)
    {
        $customer_update = Customer::find($id);
        if (is_null($customer_update)) {
            return redirect(route('show'));
        } else {
            $data = compact('customer_update');
            return view('customer/update')->with($data);
        }   
    }

    public function updateShow($id, Request $request)
    {
        $customer_update = Customer::find($id);
        $customer_update->name = $request['name'];
        $customer_update->email = $request['email'];
        $customer_update->password = $request['password'];
        $customer_update->save();
        return redirect(route('show'));
    }
}
