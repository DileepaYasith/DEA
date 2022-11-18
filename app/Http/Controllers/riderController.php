<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class riderController extends Controller
{
    public function rider_register(){
        return view('rider.rider_register');
    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Driverable_Vehicles= $request->input('Driverable_vehicles');
            $License= $request->input('License');
            $Password= $request->input('Password');

            $user = DB::table('rider')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
                'Driverable_vehicles'=>$Driverable_Vehicles,'License'=>$License,
                'Password'=>$Password);
                DB::table('rider')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
     }


     public function rider_login(){
        return view('rider.rider_login');
    }

     public function rider_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('rider')->where('Email', session('email'))->first();

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
