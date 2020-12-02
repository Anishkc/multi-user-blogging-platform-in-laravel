@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit</h1>
        </div>

        <div class="col-md-12">
            <form action="{{ route('blogs.update',$blog->id) }}" method="post">
            {{ method_field('patch') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value ="{{ $blog->title }}">
                </div>

                <div class="form-group">
                    <label for="title">body</label>
                    <textarea name="body" class="form-control">value ="{{$blog->title}}"</textarea>
                </div>

                <button class="btn btn-primary" type="submit">Update  Blog</button>
                {{ csrf_field() }}
            </form>
        </div>
    
    </div>

@endsection