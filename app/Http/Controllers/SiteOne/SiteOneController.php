<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home(){
        return view('SiteOne.index');
      }
     
      function about(){
        echo'<h1>about</h1>';
      }
      function contact(){
        echo'<h1>contact</h1>';
      }
      function msg($id){
        $dataone=[1 , 2 , 3];
        $dataone=[
          '0'=>5,
          '1'=>4
        ];
        //return view('SiteOne.msg')->with('id' , $id);
        /*return view('SiteOne.msg' , [
          'id'=>$id
        ]);*/
        return view('SiteOne.msg' , compact('id'));

      }
}

