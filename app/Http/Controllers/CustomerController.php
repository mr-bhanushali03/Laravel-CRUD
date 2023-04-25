<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'gender' => 'required',
                'languages' => 'required',
                'email' => 'required|email',
                'mobile' => 'required',
                'password' => 'required',
                'date' => 'required',
                'caste' => 'required',
                'file' => 'required|image'
            ]
        );
        $customer = $request->all();
        $customer['languages'] = implode(',', $customer['languages']);
        $imageName = $request->file->getClientOriginalName();
        $request->file->move('upload/', $imageName);
        $customer['file'] = $imageName;
        Customer::create($customer);

        return redirect()->route('index');
    }

    public function show()
    {
        // $Customers = Customer::all();
        // return view('customer.index', compact('Customers'));
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect()->route('show');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $customer['languages'] = explode(',', $customer['languages']);
        if (is_null($customer)) {
            return redirect()->route('show');
        } else {
            return view('customer.edit', compact('customer'));
        }
    }

    public function update($id, Request $request)
    {
        $customer = $request->all();
        $customer['languages'] = implode(',', $customer['languages']);
        $imageName = $request->file->getClientOriginalName();
        $request->file->move('upload/', $imageName);
        $customer['file'] = $imageName;
        Customer::find($id)->update($customer);
        return redirect()->route('show');
    }
}
