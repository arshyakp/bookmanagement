<?php

namespace App\Http\Controllers;

use App\Morebooks;
use App\Cmtz;
use Illuminate\Http\Request;

class MorebooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idl=$request->input('id');
    $book=Morebooks::select('id','books_no','books_name','auther_name','publisher_name','location','image')->where('type','=',1)->get();
    return view('morebook.ANASWARATHAYILEKKU',['book'=>$book]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comnts()
    {
        $cmnt=Cmtz::join('registrations','registrations.id','=','cmtzs.reg_id')
        ->join('booksdetails','booksdetails.id','=','cmtzs.book_id')->
        select('book_name','image','comments','firstname','lastname','address','phnumber')
        ->get();
    return view('comment.cmnt',['cmnt'=>$cmnt]);
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
     * @param  \App\Morebooks  $morebooks
     * @return \Illuminate\Http\Response
     */
    public function show(Morebooks $morebooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Morebooks  $morebooks
     * @return \Illuminate\Http\Response
     */
    public function edit(Morebooks $morebooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Morebooks  $morebooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Morebooks $morebooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Morebooks  $morebooks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Morebooks $morebooks)
    {
        //
    }
}
