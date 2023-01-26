@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="card">
    <div class="card-header">
        Register Books
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
  <form method="POST" action="{{route('books.store')}}" enctype="multipart/form-data">
    @if ($errors->any())
    <div class='alert alert-danger'>
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>   
            @endforeach
        </ul>
    </div>  
@endif
    @csrf
   <label for="title">Title</label>
   <input type="text" name="title" id="title" class="form-control" >
   <label for="author">Author</label>
   <input type="text" name="author" id="author" class="form-control" >
   <label for="pubdate">Publication Date</label>
   <input type="date" name="pubdate" id="pubdate" class="form-control">
   <label for="Publisher"> Publisher</label>
   <input type="text" name="publisher" class="form-control" id="Publisher">
   <label for="isbn">ISBN No</label>
   <input type="text" name="isbn" class="form-control" id="isbn">
   <label for="image" >Image</label>
   <input type="file" name="image" class="form-control" id="image">
<button class="btn btn-primary mt-5" >Save</button>
<button class="btn btn-danger mt-5"> reset</button>
  </form>
    </div>
</div>
</div>
</div>
@endsection

