<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{


    // all users
    public function index(Request $request){

        $users = User::paginate(12);
        if($request->has('search')){
            $users=User::where('name','LIKE',"%{$request->search}%")->orWhere('gender','LIKE',"%{$request->search}%")->paginate(5);
        }
        return view('users.index',compact('users'));
    }



    // Get all ajax request and store the record and returns the response
    public function addUser(UserStoreRequest $request){
        $request->validated();
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
        // $request->validated();

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
