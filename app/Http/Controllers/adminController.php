<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin_login(){
        return view('admin.admin_login');
    }

     public function admin_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('admin')->where('Email', session('email'))->first();



            $password= $user->Password;
            if($password==session('password')){
                     //return view('volunteer.volunteer_landing');
                     echo "log";
                 }
            else{
                 echo "Erro!";
             }


     }
}
