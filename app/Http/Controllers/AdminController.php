<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function loginAdmin()
    {
        if (auth()->check()){
//            $user =  $this->user->containt('id', auth()->id());
            return redirect()-> to('home');
        }
        return view('login');
    }

    public function postLoginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        if(auth()->attempt([
            'email' =>$request->email,
            'password' => $request->password
        ], $remember)){
            return redirect()->to('home');
        }else{
            return redirect()->to('admin');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
