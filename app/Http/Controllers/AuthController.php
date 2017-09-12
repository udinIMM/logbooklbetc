<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

Use Uuid;
Use Auth;
Use App\Users;

class AuthController extends Controller
{
  public function index() {
      return view('auth.login'); //return ke halaman login2
  }

  public function login(Request $request) {

    $userdata = array(

        'nrp'     => $request->nrp,
        'password'  => $request->password
    );
    dd(Auth::attempt($userdata,true));
    if (Auth::attempt($userdata,true)) //jika data yang diinputkan benar, maka akan ke redirect ke halaman /semua
    {     
        return redirect('/log');
    }
    else{ //jika data yang diinputkan salah, maka akan ke redirect ke halaman login kembali dengan keterangan error
        return redirect('/login')->with('error','Username atau password salah');
    }


  }


  public function logout() {
    //session destroy, dan ke redirect ke halaman /login
    Auth::logout();
    return redirect('/');
  }

  public function register(){
  	return view('auth.register');
  }

  public function create(Request $request){
    // dd(Uuid::generate());
    $users = new Users;
    $users->id = Uuid::generate();
    $users->nama = $request->name;
    $users->nrp = $request->nrp;
    $users->password = Hash::make($request->password);
    $users->role = "Admin";
    $users->laboratorium_id = "99466340-9508-11e7-98ab-a98643af18a1";

    if (Users::where('nrp','=', $request->nrp)->exists()) {
        return redirect('register')->with('error','Username Sudah Digunakan!');
    }

    if($users->save())
    {
        return Redirect::to($request->url());
    }
    else
    {
        return Redirect::to('/login');
    }
  }
}
