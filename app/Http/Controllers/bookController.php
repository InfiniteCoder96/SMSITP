<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;



class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boooks = books::all()->toArray();
        return view('Admin.Library_Management.viewAllBooksTable', compact('boooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('layouts.LibraryLayouts.addNewBookModal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newAddBook =$this->validate(request(),[
            'bookname' => 'required',
            'isbn' => 'required',
            'authorname' => 'required',
            'barcode' => 'required'
        ]);

        books::create($newAddBook);

        return back() ->with('success','New book is added');
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
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = books::find($id);
        return view('layouts.LibraryLayouts.editBookModal',compact('books','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
//        $books = books::find($id);
//
//        $this->validate(request(),[
//            'bookname' => 'required',
//            'isbn' => 'required',
//            'authorname' => 'required',
//            'barcode' => 'required'
//        ]);
//        $books->bookname = $request->get('bookname');
//        $books->isbn = $request->get('isbn');
//        $books->authorname = $request->get('authorname');
//        $books->barcode = $request->get('barcode');
//        $books->save();

        $books = books::find($request->get('bookID'));
        $this->validate(request(),[
            'bookname' => 'required',
            'isbn' => 'required',
            'authorname' => 'required',
            'barcode' => 'required'
        ]);
        $books->bookname = $request->get('bookname');
        $books->isbn = $request->get('isbn');
        $books->authorname = $request->get('authorname');
        $books->barcode = $request->get('barcode');
        $books->save();
        return redirect('books')->with('success','ISBN No:'.$books->isbn.' Book has been updated');



    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = books::find($id);
        $books->delete();
        return redirect('books')->with('success','Book has been  deleted');
    }
}
