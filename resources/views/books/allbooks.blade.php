@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Book Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Image</th>
                    <th colspan="3">Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($Books as $Book )
                
                <tr>
                    <td>{{$Book->id}}</td>
                    <td>{{$Book->title}}</td>
                    <td>{{$Book->author}}</td>
                    <td><img src="{{asset('uploads/'.$Book->image)}}" width="100" height="100"></td>
                    <td><a href="{{route('books.edit',$Book->id)}}" class="btn btn-info">Edit</a></td>
                    <td><a href="{{route('books.show',$Book->id)}}" class="btn btn-success">View</a></td>
                    <td><form method="POST" action="{{ route('books.destroy',$Book->id) }}">
                       @method('DELETE')
                       @csrf
                        <button type="submit" class="btn btn-danger">delete</button> 
                    </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection