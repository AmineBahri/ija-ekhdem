<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;

class AdminController extends Controller
{
    public function loginAdmin()
    {
    	return view('admin-login');
    }

    public function signInAdmin(Request $request)
    {
      $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required|alphaNum|min:8'
    	]);
      $admin = Admin::where(['email' => $request->email])->first();
      if (!$admin || !Hash::check($request->password, $admin->password)) 
      {
        $request->session()->flash('status', 'Username or password is not matched');
        return redirect()->back();
      }
      else
      {
        $request->session()->put('admin', $admin);
        return redirect('/dashboard-admin');
      }
    }

    public function dashboardAdmin()
    {
    	$admin = Session::get('admin')['id'];
    	$utilisateur = Utilisateur::all();
    	//var_dump($utilisateur);
        return view('dashboard-admin',['utilisateur' => $utilisateur]);
    }

    public function logoutAdmin()
    {
    	Session::forget('admin');
        Session::flush();
        return redirect('/login-admin');
    }

    /*public function checklogin(Request $request)
    {
    	$this->validate($request, [
          'email' => 'required|email',
          'password' => 'required|alphaNum|min:3'
    	]);

       $data = (
            ['email' => $request->get('email'),
            'password' => $request->get('password')]
    	);

    	if (Auth::attempt($data))
    	{
    		return redirect('main/successlogin');
    	}
    	else
    	{
    		return back()->with('error', 'Wrong login details');
    	}
    }*/
}
