<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class ChartsController extends Controller
{

 public function index(){
     $data=DB::table('users')
     ->select(
         DB::raw('gender as gender'),
         DB::raw('count(*) as number '))->groupBy('gender')->get();
         $array[]=['Gender' ,'Number'];
         foreach($data as $key => $value)
         {
             $array[++$key]=[$value->gender ,$value->number];
         }


return view("charts.piechart")->with('gender',json_encode($array));
    }
}
