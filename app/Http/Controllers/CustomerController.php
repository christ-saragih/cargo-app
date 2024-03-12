<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();   
        return view('customers.index', compact(['customers']));
    }

    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name'=> 'required|min:5',
            'email'=> 'required|email',
            'phone'=> 'required',
            'address'=> 'required',
        ]);

        Customer::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
        ]);

        return redirect('/customers')->with('success', 'Data Customer berhasil ditambahkan!');
    }
}
