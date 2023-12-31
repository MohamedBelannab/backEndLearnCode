@extends('layouts.master');


@section('title')


@endsection

 
@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a>
 
@endsection


@section('title_page2')
<a href="{{ url('/blogs') }}">Page_Blogs</a>
@endsection

@section('Content')


<button type="button"   class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
Modifier Blogs
</button>

<!-- Modal structure with a form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Blogs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to capture id, idLangage, description, and titre -->
        <form action="{{url('update-data-blogs/'.$blogs->id)}}" method="post" enctype="multipart/form-data">      
    @csrf
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <div class="form-group">
        <label for="content">content:</label>
        <input value="{{$blogs->content}}" name="content" type="text" class="form-control" id="titre" placeholder="Enter content">
        @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="title">title:</label>
        <input value="{{$blogs->title}}" name="title" type="text" class="form-control" id="titre" placeholder="Enter Title">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
    <label for="img">Image:</label>
    <input src="{{$blogs->img}}" type="file" id="img" name="img" class="form-control">
        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    

    <div class="form-group">
        <label for="remarque">remarque:</label>
        <input value="{{$blogs->remarque}}" name="remarque" type="text" class="form-control" id="frameworks" placeholder="Enter remarque">
        @error('remarque')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="slug">slug:</label>
        <input value="{{$blogs->slug}}" name="slug" type="text" class="form-control" id="slug" placeholder="Enter slug">
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


 
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">modifer</button>
    </div>
</form>
      </div>
    </div>
  </div>
</div>

@endsection


@section('scripts')

@endsection