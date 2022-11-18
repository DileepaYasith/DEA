<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Global_;
use PhpParser\Node\Stmt\Static_;




class caregiverController extends Controller
{


    public function caregiver_register(){
        return view('caregiver.caregiver_register');

    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Member_Id= $request->input('Member_Id');
            $Password= $request->input('Password');

            $user = DB::table('caregiver')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
                'Member_Id'=>$Member_Id,'Password'=>$Password);
                DB::table('caregiver')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';


            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/caregiver_login">Click Here</a> to go back.';
            }
     }


     public function caregiver_login(){
        return view('caregiver.caregiver_login');
    }

     public function caregiver_log(Request $request)
     {
       // private $caregiver_id;
       // $this->$caregiver_id = 1;

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('caregiver')->where('Email', session('email'))->first();



        Static $count=0;
        //$Caregiver_Id=$user->Caregiver_Id;
        //$GLOBALS['Caregiver_Id']=$user->Caregiver_Id;





        $status=$user->Account_status;
        if($status=='Deactivate'){
            echo "Deactivated!";
            echo '<a href = "/caregiver_login">Click Here</a> to go back.';
            //echo $GLOBALS['Caregiver_Id'];


        }
        else{

            $password= $user->Password;
            if($password==session('password')){

                     echo "log";
                     echo '<a href = "/caregiver_profile">Click Here to profile</a><br>';
                     echo '<a href = "/caregiver_login">Click Here</a> to go back.';

                     echo config('global.some_key');

                     echo 1;




                 }
            else{
                echo "Erro";
                 echo '<a href = "/caregiver_login">Click Here</a> to go back.';
             }

        }


     }


     public function profile() {

        $users = DB::select('select * from caregiver where Caregiver_Id= ?',[]);
        return view('caregiver.caregiver_profile',['users'=>$users]);
        echo config('app.product_data')->protected_var;

     }
     public function show($id) {
        $users = DB::select('select * from student where id = ?',[$id]);
        return view('stud_update',['users'=>$users]);
     }

}
