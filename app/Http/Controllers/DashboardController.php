<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\LoanRequest;
use App\Customer;
use App\Tape;
use App\Post;
use App\User;
use Auth;
use DB;


class DashboardController extends Controller
{
    public function dashboard(){
     // $posts = Tape::all();
     $posts = Tape::latest()->take(5)->get();

     // $users = User::all();
     $users = Customer::latest()->take(5)->get();

     $borrowed = Tape::where('status','borrowed')
     ->get();

      $available = Tape::where('status','available')
     ->get();

      $shelves = Post::all();

     return view("admin.dashboard",compact('posts', 'users', 'shelves', 'borrowed','available'));
}



public function all_items(){

  $posts = Tape::latest()->get();
  $formPosts = Post::latest()->get();
   
  return view("admin.all_items",compact('posts', 'formPosts'));
}



public function all_programs(){

   $programs = Post::all();

   
  return view("admin.all_programs",compact('programs'));
}




 public function view_single_item($id){
      $singlePost =  LoanRequest::find($id);
      $single  = Tape::find($id);
      // $posts = LoanRequest::find($id);
      return view("admin.view_single_item",compact('singlePost','single'));

    }
   


    public function create_programs(){
    
      return view("admin.create_programs");
    }


 public function AddPrograms(Request $request){
        $this->validate($request, [
            'programTitle' => 'required',
            'location' => 'required',
            'dateYear'=> 'required',
          
            ]);

        // return 'validation passed';
         $create = new Post() ;
         $create->programTitle = $request->input('programTitle');
         $create->location = $request->input('location');
         $create->dateYear = $request->input('dateYear');  
         $create->status   = 'available';       
 
         $create->save();
         return redirect(route("all_programs"))->with('response', 'Program Created Successfully')->with("type","success");
   }





  public function table(){

    return view("admin.table");
 }



 public function available_items(){

       $available = DB::table('posts')
     ->where('status','available')
     ->paginate(5);
   
         return view("admin.available_items",compact('available'));
}



     public function events($id){
      $event  = LoanRequest::find($id);
         $events  = Tape::find($id);
         return view("admin.events",compact('event', 'events'));
       }

       
     public function returnedEvent($id){
       $returnedEvent   = LoanRequest::find($id);
         return view("admin.returnedEvent",compact('returnedEvent'));
       }



       public function returnedEventBlade(Request $request, $id){

        $this->validate($request, [
             
              'id' => 'required',
              'status' => 'required'
              ]);
    
             $returnedEvent  = Tape::where('id',$request->input('id'))->first();     
             $returnedEvent->status = $request->input('status');  
             $returnedEvent->update();
               return redirect('/events/'.$id)->with('message', 'Status updated successfully');
            
      }
  
  



///////////////////////Shelf Script//////////////////////////////////////////////
  

// public function shelf1_2(){

//     $shelfs  = Tape::all();
//      $posts = Tape::orderBy('id','desc')->take(15)->get();
    
  
//         return view("admin.shelf1_2",['shelfs' => $shelfs,'posts' => $posts]);
//     }





//     public function shelf3_4(){

   
//       $shelfs  = Tape::all();
//       $posts = Tape::orderBy('id','desc')->take(15)->get();
     
         
//         return view("admin.shelf3_4",compact('posts', 'shelfs'));


// }

// public function shelfs(){
//  $shelfBlades = Tape::all();

//  return view('admin.shelfs',compact('shelfBlades'));
// }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

 

  public function logout(){
     Auth::logout();
       return redirect("/login");

    }


}



























//     public function AddItem(Request $request){
//         $this->validate($request, [
//             'shelf'  => 'required',
//             // 'item'   => 'required',
//             'row'    => 'required',
//             'author' => 'required',
//             'title' => 'required',
//             'description'=> 'required',
//             // 'file' => 'required'
          
//             ]);

//            // return 'validation passed';
//          $create = new Post() ;
//          $create->title = $request->input('title');
//          $create->shelf  = $request->input('shelf');
//         //  $create->item   = $request->input('item');
//          $create->row    = $request->input('row');
//          $create->author = $request->input('author');
//          $create->title  = $request->input('title');        
//          $create->description = $request->input('description');
//          $create->file = $request->input('file');        

//          // $image = array('jpeg', 'jpg','JPG', 'png', 'gif', 'pdf');
       
       
//         //Check if the user uploaded a file, else continue
//         if(Input::hasFile('file')){
//             $file = Input::file('file');

//             // $file_extension = $file->getClientOriginalExtension();

//             $file_name = time().".".$file->getClientOriginalExtension();

//             $file->move(public_path(). '/uploads/', $file_name);

//             $url ='/uploads/'.$file_name;
//             $create->file = $url;
       
//             // if(in_array($file_extension, $image)){

//             //   $create->file_extension = 'JPG';

//             // } else if (in_array($file_extension,$image)) {
//             //     $create->file_extension = "jpg";

//             // } else if (in_array($file_extension,$image)) {
//             //     $create->file_extension = "gif";
//             // } else if (in_array($file_extension,$image)) {
//             //     $create->file_extension = "png";
//             // } else if (in_array($file_extension,$image)) {
//             //     $create->file_extension = "jpeg";
    
//             // }else{
//             //      return redirect('/item_form')->with('response', 'Sorry the file format you uploaded is unsupported')->with("type","danger");

//             // }
//       }
//          $create->save();
//            return redirect(route("item_form"))->with('response', 'Item added successfully')->with("type","success");
// }



