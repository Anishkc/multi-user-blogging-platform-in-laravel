@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="jumbotron">
        <h2> Trashed Blogs</h2>
    </div>

</div>

  <div class="col-md-12">
      @foreach($trashedBlogs as $blog)
            <h2>{{ $blog->title}}</h2>
            {{ $blog->body}}
          <!-- {{-- restore --}} -->
          <div class="btn-group">
            <form method="get" action="{{ route('blogs.restore', $blog->id) }}">
                <button type="submit" class="btn btn-success btn-xs pull-left btn-margin-right">Restore</button> 
                {{ csrf_field() }}
            </form>
            </div>

            <!-- {{-- permanent delete--}} -->
            <div class="btn-group">
            <form method="post" action="{{ route('blogs.permanent-delete', $blog->id) }}">
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger btn-xs pull-left btn-margin-right">permanent-delete</button> 
                {{ csrf_field() }}
             </form>
</div>

   @endforeach
</div>

@endsection