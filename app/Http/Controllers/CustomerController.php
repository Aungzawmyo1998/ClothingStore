<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    //
    public function customerRegisterShow ()
    {
        return view('customers.register');
    }

    public function customerRegisterProcess (Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:customers',
        //     'phone' => 'required|string|max:20',
        //     'password' => 'required|string|min:8',
        //     ''


        // ]);

        $uuid = Str::uuid()->toString();
        $image = $uuid.'.'.$request->image->extension();
        $request->image->move(public_path('img/customers/registers'),$image);
        $customer = new Customer();
        $customer -> firstname = $request -> fname;
        $customer -> lastname = $request -> lname;
        $customer -> email = $request -> email;
        $customer -> address = $request -> address;
        $customer -> DOB = $request -> dob;
        $customer -> joining_date = Carbon::now();
        $customer -> phonenumber = $request -> phno;
        $customer -> State_region = $request -> state;
        $customer -> zipcode = $request -> zipcode;
        $customer -> password = bcrypt($request->password);
        $customer -> image = $image;
        $customer -> uuid = $uuid;
        $customer -> status = 'active';

        $customer->save();

        return redirect()->route('customer.register.show');
    }

    public function loginShow ()
    {
        return view('customers.login');
    }
}
