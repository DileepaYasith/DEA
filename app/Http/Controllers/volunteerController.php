<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class volunteerController extends Controller
{
    public function volunteer_register(){
        return view('volunteer.volunteer_register');
    }



    public function insert(Request $request) {
            $Name = $request->input('Name');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $NIC= $request->input('NIC');
            $Age= $request->input('Age');
            $Email= $request->input('Email');
            $Hours= $request->input('Working_hours');
            $Password= $request->input('Password');

            $user = DB::table('volunteer')->where('Email', $Email)->first();


        if($user==""){
            $data=array('Name'=>$Name,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
            'Age'=>$Age,'NIC'=>$NIC,'Working_hours'=>$Hours,'Password'=>$Password);
            DB::table('volunteer')->insert($data);

            echo "Record inserted successfully.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';
        }
        else{
            echo "Email is Erro.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';
        }



     }



     public function volunteer_login(){
        return view('volunteer.volunteer_login');
    }

     public function volunteer_log(Request $request)
     {
        
         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('volunteer')->where('Email', session('email'))->first();

        $status=$user->Account_status;
        if($status=='Deactivate'){
            echo "Deactivated!";
        }
        else{

            $password= $user->Password;
            if($password==session('password')){
                     return view('volunteer.volunteer_landing');
                 }
            else{
                 echo "Erro!";
             }
        }









     }



}
