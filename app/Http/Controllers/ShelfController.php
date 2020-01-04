<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tape;

class ShelfController extends Controller
{
    //

    public function displayShelvesItems(){

        $data['shelves'] = Tape::select("shelfNo")->groupBy('shelfNo')->get();

        return view("admin.shelfs",$data);
    }


    function displaySingleShelf($shelfNo){

        $rowsData = array();
        $shelfRows = Tape::select("rowNo")->where("shelfNo",$shelfNo)->groupBy('rowNo')->get();
    
        $x = 0;
        foreach($shelfRows as $data){


            $dataArray = Tape::where("shelfNo",$shelfNo)->where('rowNo', $data->rowNo)->get();
            
            $rowsData[$x++] = array("row"=>$data->rowNo,"items"=>$dataArray);

          
            
           // echo $data->rowNo;
        }


        $shelfs  = Tape::all();
        $posts = Tape::orderBy('id','desc')->take(15)->get();

        
      //  return view('shelf_single',['rowsData'=>$rowsData,'shelfs' => $shelfs,'posts' => $posts]);


      return view('admin.shelf_single',['rowsData'=>$rowsData,'shelfNo' => $shelfNo]);


       
      // dd($shelfdata);
    }
}
