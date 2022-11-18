<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function add_menu(){
        return view('add_menu');
    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Description= $request->input('Description');
            $Category= $request->input('Category');
            $Image1= $request->input('Image1');
            $Image2= $request->input('Image2');
            $Image3= $request->input('Image3');


                $data=array('Name'=>$Fullname,'Description'=>$Description,'Category'=>$Category,'Image1'=>$Image1,
                'Image2'=>$Image2,'Image3'=>$Image3,'Availability'=>'Available');
                DB::table('menu')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';

     }

 }
