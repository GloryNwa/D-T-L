<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Post;
use App\User;
use App\Customer;
use App\LoanRequest;
use Hash;
use DB;
use Storage;
use Response;



class UsersController extends Controller
{

public function index()
    {
        return view('home');
    }


 public function userDashboard(){
     // $posts = Post::all();
     $posts = Post::latest()->paginate(3);

     // $users = User::all();
     $users = User::latest()->paginate(5);


      $shelves = Post::all();

     return view("users.userDashboard",compact('posts', 'users', 'shelves'));
}




    public function users(){
        $users = Customer::latest()->paginate(10);
    	return view('admin.users',compact('users'));

    }

    public function createUsers(Request $request){
        $this->validate($request ,[
             'name' => 'required',
             'email' => 'required',
             'dept' => 'required',
             'dateYear' => 'required',
             'password' => 'required'

        ]);
          $users = new Customer;
          $users->name = $request->input('name');
          $users->email = $request->input('email');
          $users->dept = $request->input('dept');
          $users->dateYear = $request->input('dateYear');
          $users->password = Hash::make('password');
          $users->status  = 1;
          $users->save();

    	return redirect(route('users'))->with('response', 'User Created Successfully')->with("type", "success");


    }



     public function update_profile(){
    	return view('users.update_profile');


    }
















}
