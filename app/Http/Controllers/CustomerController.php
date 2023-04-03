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

    public function Create(Request $Create)
    {
        $Create->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]
            );
        Customer::create($Create->all());

        return redirect(route('show'));
    }

    public function Show()
    {
        $AllCustomer = Customer::all();
        return view('customer/select',compact('AllCustomer'));
    }

    public function delete($id)
    {
        $CustomerDelete = Customer::find($id);
        if (!is_null($CustomerDelete)) {
            $CustomerDelete->delete();
        }
        return redirect(route('show'));
    }

    public function update($id)
    {
        $CustomerUpdate = Customer::find($id);
        if (is_null($CustomerUpdate)) {
            return redirect(route('show'));
        } else {
            return view('customer/update',compact('CustomerUpdate'));
        }   
    }

    public function updateShow($id, Request $request)
    {
        $CustomerUpdate = Customer::find($id);
        // $CustomerUpdate->name = $request['name'];
        // $CustomerUpdate->email = $request['email'];
        // $CustomerUpdate->password = $request['password'];
        // $CustomerUpdate->save();
        Customer::update($CustomerUpdate->all());
        return redirect(route('show'));
    }
}
