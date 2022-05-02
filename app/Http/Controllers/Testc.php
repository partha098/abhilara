<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Student;

class Testc extends Controller
{
    public function home(){
        echo "i am laravel";
    }

     public function homeapi(){
       
       $arr=array(

        "msg"=>'I am laravel api',
        "product"=>'Oppo F11'

       );

       //echo json_encode($arr);
       return Response()->json($arr);


    }


   
   public function frm(){
    return view("frm");
   }


   public function ins(Request $r){

   $sb=implode(",", $r->sub);

   $obj=new Student();
   $obj->name=$r->name;
    $obj->gender=$r->gender;
    $obj->stream=$r->stream;
    $obj->subject=$sb;
    $obj->image="";
    $obj->save();
   }



   public function insapi(Request $r){



   $obj=new Student();
   $obj->name=$r->name;
    $obj->gender=$r->gender;
    $obj->stream=$r->stream;
    $obj->subject=$r->sub;
    $obj->image="";
    $obj->save();

    $arr=array(
        'msg'=>"record inserted"
    );
      return Response()->json($arr);

   }




   public function selapi(Request $r){

    $s=$r->search;
    if($s!=""){
$obj=Student::where("name","LIKE",$s.'%')->get();
    }else{
    $obj=Student::all();
    }

     return Response()->json($obj);

   }


      public function delapi(Request $r){

    $id=$r->id;

    $del=Student::find($id);
    $del->delete();

   
    $obj=Student::all();
  

     return Response()->json($obj);

   }

}
