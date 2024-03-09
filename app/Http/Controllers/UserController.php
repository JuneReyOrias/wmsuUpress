<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    
    // public function CustomersDashboard(){
    //     return view('customer.customers_index');
    // }
    public function profiles(){
        // Retrieve admin user
        $admin = auth()->user();

        // Pass admin user to the view
        return view('admin.body.header', compact('admin'));



    }



    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
