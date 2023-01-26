<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\validator;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Books = Books::all();
        return view('books.allbooks',compact('Books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.addbooks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator::make($request->all(),[
            'title' => 'required',
            'author' => 'required',
            'pubdate' => 'required',
            'publisher' => 'required',
            'isbn' => 'required',
            'image' =>'image|mimes:png,jpg,jpeg'
        ]);
        
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $imageName = time().".".$request->image->extension();
             $request->image->move(public_path('uploads'),$imageName);
           
             Books::create([
                'title' => $request['title'],
                'author' => $request['author'],
                'publication_date' => $request['pubdate'],
                'publisher' => $request['publisher'],
                'ISBN_No' => $request['isbn'],
                'image' => $imageName,
                // 'created_by' => auth()->user()->id

             ]);
        }
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Book = Books::findOrfail($id);
        return view('books.showbook', compact('Book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Book = Books::findOrfail($id);
        return view('books.editbook', compact('Book'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Books::findOrfail($id)->update($request->all());
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Book =  Books::findOrfail($id);
        $Book->delete();
        return back();
        
    }
}
