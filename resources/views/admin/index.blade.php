@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="jumbotron">
            <h1>Admin Dashboard</h1>
    </div>
    <div class="col-md-12">
    
            <a href ="{{ route('blogs.create')}}" class="btn btn-primary btn-margin-right">Create Blog</a>
        

        
            <a href ="{{ route('blogs.trash')}}" class="btn btn-danger btn-margin-right">Trashed Blog</a>
    
    </div>
</div>

@endsection