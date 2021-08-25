<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{


    //Get and return all user
    public function index(){
        $users = User::paginate(5);
        return view('users.index',compact('users'));
    }



    // Get all ajax request and store the record and returns the response
    public function addUser(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->save();
        return response()->json($user);
    }



    // This method gets the user by id for edit form
    public function getUserById($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }


    // This method Will update the requested ajax update
    public function updateUser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->save();

        return response()->json($user);
    }
    // This method will delete the specific record

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return response()->json(['success'=>'User has been deleted']);
    }

}
