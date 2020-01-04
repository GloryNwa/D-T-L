<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Tape;
use App\LoanRequest;
use App\Post;
use DB;
use Storage;
use Response;






class TapesController extends Controller{


    //

  public function tapeForm(){
     return view("admin.all_items");
   }



       public function tapeReg(Request $request){
        $this->validate($request, [
            'program'         => 'required',
            'minister'          => 'required',
            'programDescription' => 'required',
            'producer'    => 'required',
            'shelfNo'      => 'required',
            'rowNo'=> 'required',
            'tapeNumbering' => 'required',
            'dateYear'  => 'required',
          
            ]);

        // return 'validation passed';
         $tape = new Tape() ;
         $tape->program  = $request->input('program');
         $tape->minister = $request->input('minister');
         $tape->programDescription = $request->input('programDescription');
         $tape->producer = $request->input('producer');
         $tape->shelfNo  = $request->input('shelfNo');  
         $tape->rowNo    = $request->input('rowNo');        
         $tape->tapeNumbering = $request->input('tapeNumbering');  
         $tape->dateYear    = $request->input('dateYear'); 
         $tape->status   = 'available';        
         $tape->save();
         return redirect(route("all_items"))->with('response', 'Tape Registered Successfully')->with("type","success");
   }

 //    public function products(){
 //   $products = Post::all();

 //    return view("admin.all_products",['products' => $products]);
 // }


 public function searchTapes(Request $request){
       $this->validate($request, [
             'tapes'  => 'required'
     ]);

      $tapes = $request->input('tapes');
      $products = Post::where('title', 'LIKE', '%'.$tapes.'%')
                 ->get();
                  
      return view('admin.all_products',['products' => $products]);
     }

  

     

}

