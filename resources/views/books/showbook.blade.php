@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div>
            
            <div ><img src="{{asset('uploads/'.$Book->image)}}"></div>
            <h6>Title</h6>
        <div >{{$Book->title}}</div>
        <h6>Author</h6>
        <div >{{$Book->author}}</div>
        <h6>Publisher</h6>
        <div >{{$Book->publisher}}</div>
        <h6>Publication Date</h6>
        <div >{{$Book->publication_date}}</div>
        <h6>ISBN No</h6>
        <div >{{$Book->ISBN_No}}</div>
       
        </div>
    </div>
</div>

@endsection