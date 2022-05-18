<?php

namespace App\Http\Controllers;
use App\Bookzzzapplied;
use App\Booksdetails;
use App\userview;
use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BooksdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $boo=Booksdetails::all();
    return view('admin.books.index',['boo'=>$boo]);
    }
    public function createform()
    {
    return view('admin.books.create');
    }

    public function userView()
    {

 $pend=userview::join('booksdetails','booksdetails.id','=','userviews.book_id')->
 join('registrations','registrations.id','=','userviews.reg_id')->
 select('booksdetails.id as bookid','books_no','book_name','image','firstname','lastname','address','phnumber')
 ->where('type','=','pending')->get();

    return view('admin.books.pending',['pend'=>$pend]);
    }

    public function userProfile(Request $request)
    {

     $id=$request->input('id');

       $user=userview::join('registrations','registrations.id','=','userviews.reg_id')
       ->join('booksdetails','booksdetails.id','=','userviews.book_id')
     ->select('registrations.*')->where('type','=','pending')->onwhere('id','=','reg_id')->get();
     return view('admin.books.userprofile',['user'=>$user]);
     return response()->json($user);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {

     $book=new Booksdetails();
     $book->books_no=$request->input('no');
     $book->book_name=$request->input('name');
     $book->auther_name=$request->input('auther');
     $book->publisher_name=$request->input('publisher');
     $book->location=$request->input('location');
     $book->type=$request->input('type');
     $fil = $request->image;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = str_slug($request->image).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $book->image = $name;
      }
            $book->save();
            // Session::flash('value','insert successfully');

            return redirect('indexx');
    }
    public function updateForm()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booksdetails  $booksdetails
     * @return \Illuminate\Http\Response
     */
    public function show(Booksdetails $booksdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booksdetails  $booksdetails
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $editt=Booksdetails::find($id);

        return view('admin.books.edit')->with(['editt'  => $editt ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booksdetails  $booksdetails
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $editt=Booksdetails::find($id);
        $editt->books_no=$request->input('no');
        $editt->book_name=$request->input('name');
        $editt->auther_name=$request->input('auther');
        $editt->publisher_name=$request->input('publisher');
        $editt->location=$request->input('location');
        $fil = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');

            $image->move($destinationPath, $name);
            $editt->image = $name;
            $editt->save();
          }
          return redirect('indexx');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booksdetails  $booksdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dd= Booksdetails::find( $id);
        $dd->delete();
        return back();
    }
}
