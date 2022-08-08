<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginuser(Request $request)
    {
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('error','Password not matches');
            }
        }else{
            return back()->with('error','This email is not registered');
        }
    }

    public function register()
    {
        return view('auth.register');
    }
    public function reguser(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:12|confirmed'
            ]);

       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $res = $user->save();
        if($res)
        {

            return redirect()->route('login')->with('success', 'Your registration was successful');

        }else{

            return back()->with('error', 'Something went wrong');
        }

    }

    public function dashboard()
    {
        $data = array();
        if(Session::has('loginId')){
        $data = User::where('id','=',Session::get('loginId'))->first();

        }
        return view('dashboard.index', compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
       {
          Session::pull('loginId');
          return redirect('login');
       }
    }
}
