<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function store(Request $request){
        $customer_name = $request->customer_name;
        $address= $request->address;
        $contact=$request->contact;
        $profile_image= $request->profile_image;
        $email_account =$request->email_account;
        $username =$request->username;
        $password =$request->password;
        $admin_id =$request->admin_id;
        $account_status =$request->account_status;
        return Inertia::render('customer/store');
    }
}
