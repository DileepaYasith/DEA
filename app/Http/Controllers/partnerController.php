<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class partnerController extends Controller
{
    public function partner_register(){
        return view('partner.partner_register');
    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Quality_assurance= $request->input('Quality_assurance');
            $Password= $request->input('Password');

            $user = DB::table('partner')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
                'Quality_assurance'=>$Quality_assurance,'Password'=>$Password);
                DB::table('partner')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
     }


     public function partner_login(){
        return view('partner.partner_login');
    }

     public function partner_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('partner')->where('Email', session('email'))->first();

        $status=$user->Account_status;
        if($status=='Deactivate'){
            echo "Deactivated!";
        }
        else{

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



}
