<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerPostRequest;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

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

    public function store(CustomerPostRequest $request)
    {
        $request->validated();
        $customer = $request->all();
        // $customer['languages'] = implode(',', $customer['languages']);
        $imageName = $request->file->getClientOriginalName();
        $request->file->move('upload/', $imageName);
        $customer['file'] = $imageName;
        Customer::create($customer);

        return redirect()->route('index');
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        // $customer['languages'] = explode(',', $customer['languages']);
        if (is_null($customer)) {
            return redirect()->route('index');
        } else {
            return view('customer.show', compact('customer'));
        }
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        // $customer['languages'] = explode(',', $customer['languages']);
        if (is_null($customer)) {
            return redirect()->route('index');
        } else {
            return view('customer.edit', compact('customer'));
        }
    }

    public function update($id, Request $request)
    {
        $customer = $request->all();
        if (!empty($customer['file'])) {
            $imageName = $request->file->getClientOriginalName();
            $request->file->move('upload/', $imageName);
            $customer['file'] = $imageName;
        }
        Customer::find($id)->update($customer);
        return redirect()->route('index');
    }
}
