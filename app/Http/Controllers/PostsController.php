<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Post;
use App\LoanRequest;
use DB;
use Storage;
use Response;



class PostsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function userDashboard(){
     // $posts = Post::all();
     $posts = Post::latest()->paginate(5);

     // $users = User::all();
     $users = User::latest()->paginate(5);


      $shelves = Post::all();

     return view("users.userDashboard",compact('posts', 'users', 'shelves'));
    }


  
  
    // public function all_items(){

    //  $items = Post::all();

    //     return view("users.all_items",['items' => $items]);
    // }



    // public function event(){
    //      return view("users.event");
    //    }




     // public function searchItems(Request $request){
     //   $this->validate($request, [
     //         'tapes'  => 'required'
     // ]);

     //  $tapes = $request->input('tapes');
     //  $items = Post::where('title', 'LIKE', '%'.$tapes.'%')
     //             ->get();
                  
     //  return view('users.all_items',['items' => $items]);
     // }





     public function single_item(){

        return view("users.single_item");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }



//     public function getDocument($id)
// {
//     $document = Document::findOrFail($id);

//     $filePath = $document->file_path;

//     // file not found
//     if( ! Storage::exists($filePath) ) {
//       abort(404);
//     }

//     $pdfContent = Storage::get($filePath);

//     // for pdf, it will be 'application/pdf'
//     $type       = Storage::mimeType($filePath);
//     $fileName   = Storage::name($filePath);

//     return Response::make($pdfContent, 200, [
//       'Content-Type'        => $type,
//       'Content-Disposition' => 'inline; filename="'.$fileName.'"'
//     ]);
// }
}
