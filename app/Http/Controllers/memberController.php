<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function member_register(){
        return view('member.member_register');
    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Age= $request->input('Age');
            $Medical_details= $request->input('Medical_details');
            $Password= $request->input('Password');

            $user = DB::table('member')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,'Age'=>$Age,
                'Medical_details'=>$Medical_details,'Password'=>$Password);
                DB::table('member')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
     }


     public function member_login(){
        return view('member.member_login');
    }

     public function member_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('member')->where('Email', session('email'))->first();

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
