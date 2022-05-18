<?php

namespace App\Http\Controllers;
 use App\Booksdetails;
 use App\Bookapplied;
 use App\Registration;
 use App\Bookzzzapplied;
 use App\Appileduser;
 use App\Morebooks;
 use App\userview;
 use App\Cmtz;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Session;
 class AjaxController extends Controller
 {
   
 public function changetype(Request $request)
 { 
  $idd = $request->input('id');

               $row=Booksdetails::where('id',$idd)->first();
                             $bid=$row->id;
                             $log=Session::get('value');
                             $applied= new userview();
                             $applied->book_id=$bid;
                             $applied->reg_id=$log;
                             $applied->save();



                          $applied=Booksdetails::find($idd)->update(['type' => 'pending']);

                           return response()->json($applied);

 }
 public function acceptUser(Request $request)
 {
                   $ide=$request->input('id');
                       $accept=Booksdetails::find($ide)->update(['type' => 'accepted']);
                              return response()->json($accept);
 }

 public function rejectUser(Request $request)
 {
                  $idl=$request->input('id');
                        $reject=Booksdetails::find($idl)->update(['type'=>'rejected']);
                               return response()->json($reject);
 }
 
 //more books//

 public function comment(Request $request)
 {
                      $cid=$request->input('id');
                          $row=Booksdetails::where('id',$cid)->first();
    
 

                           $cm=new Cmtz();
                           $cm->reg_id=Session::get('value');
                           $cm->book_id=$row->id;
                           $cm->comments=$request->name;
 
                            $cm->save();

                                return response()->json($cm);
 }
 public function delecomment(Request $request)
 {
   $del=$request->input('id');
   return response()->json($del);
 }  
 
 }
    

