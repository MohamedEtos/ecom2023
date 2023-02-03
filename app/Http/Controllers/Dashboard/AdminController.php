<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function login()
    {
        return view('dashboard.auth.login');
    }

    public function postlogin(AdminLoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if(auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')],$remember_me)){

            return redirect()->route('dashboard');

        }else{

            return redirect()->back()->with(['error'=>'هناك خطا في البيانات']);

        }
    }

 
}
