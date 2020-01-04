<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\LoanRequest;
use App\Tape;
use App\Post;
use App\User;
use Auth;
use DB;



class LoansController extends Controller
{


    
 public function loaned_items(){

    // $posts = Post::latest()->paginate(5);
    $posts = DB::table('tapes')
     ->where('status','borrowed')
     ->paginate(5);

      return view("admin.loaned_items",compact('posts'));
}


   public function available_items(){

    // $posts = Post::latest()->paginate(5);
    $posts = DB::table('tapes')
     ->where('status','available')
     ->paginate(5);

      return view("admin.available_items",compact('posts'));
}


    
    public function loan_request(){
        $posts = Tape::orderBy('id','desc')->get();
           return view("admin.loan_request",compact('posts'));
         }
  
  
  
    public function loanRequest(Request $request){
  
        $this->validate($request, [
  
              'firstname'   => 'required',
              'lastname'    => 'required',
              'email'       => 'required|email',
              'phone'       => 'required',
              'dept'        => 'required',
              'tapeTitle'   => 'required',
              // 'author'      => 'required',
              'duration'  => 'required',
              'borrowedDate' => 'required',
              'returningDate' => 'required'
  
  
              ]);
  
          // return 'validation passed';
           $loan = new LoanRequest( );
           $loan->id  = $request->input('id');
           $loan->firstname  = $request->input('firstname');
           $loan->lastname   = $request->input('lastname');
           $loan->email      = $request->input('email');
           $loan->phone      = $request->input('phone');
           $loan->dept       = $request->input('dept');        
           $loan->tapeTitle  = $request->input('tapeTitle');
           $loan->duration   = $request->input('duration');     
           $loan->borrowedDate = $request->input('borrowedDate');  
           $loan->returningDate = $request->input('returningDate');  
          
           
            //  Tape::where('program',)->
             
            //  update(['status' => 'borrowed']);
            //  // ->update('set status = borrowed');
            //  // ->update(array('status' =>'borrowed'));
            Tape::where('id' , '=', $loan->id)->update(['status' => 'borrowed']);
            // var_dump();
           $loan->save();
  
  
          //  Resource::where('id', '=', $post_id)->first();
  
        
  
           return redirect(route("loan_request"))->with('response', 'Data Captured Successfully. We will get back to you shortly')->with("type","success");
  
     }
  
}
