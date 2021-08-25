<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BarChartController extends Controller
{
    public function index(){
        $user_ex_10 = User::where('age','>',10)->get()->count();
    	$user_ex_20 = User::where('age','>',20)->get()->count();
    	$user_ex_30 = User::where('age','>',30)->get()->count();

    	$user_ex_40 = User::where('age','>',40)->get()->count();
    	$user_ex_50 = User::where('age','>',50)->get()->count();
    	$user_ex_60 = User::where('age','>',60)->get()->count();



    	return view('charts.barchart',compact('user_ex_10','user_ex_20','user_ex_30','user_ex_40','user_ex_50','user_ex_60'));


       }
}
