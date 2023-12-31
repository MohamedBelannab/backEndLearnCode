@extends('layouts.master');


@section('title')


@endsection

 
@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a>
 
@endsection


@section('title_page2')
<a href="{{ url('/langage') }}">Page_Langages</a>
@endsection

@section('Content')
<!-- Button to trigger the modal -->
<!-- Button to trigger the modal with modified margin -->

<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;">
Modifier Langages
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Langages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to capture id, idLangage, description, and titre -->
    <form action="{{url('update-data/'.$language->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <!-- @method("PUT") -->
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea  name="description" class="form-control" id="description" rows="3" placeholder="Enter Description">{{$language->description}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="titre">WhyLearn:</label>
        <input value="{{$language->WhyLearn}}" name="WhyLearn" type="text" class="form-control" id="titre" placeholder="Enter WhyLearn">
        @error('WhyLearn')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="titre">example:</label>
        <input value="{{$language->example}}" name="example" type="text" class="form-control" id="titre" placeholder="Enter example">
        @error('example')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="titre">Applications:</label>
        <input value="{{$language->Applications}}" name="Applications" type="text" class="form-control" id="titre" placeholder="Enter Applications">
        @error('Applications')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="titre">Guide:</label>
        <input value="{{$language->Guide}}" name="Guide" type="Guide" class="form-control" id="titre" placeholder="Enter Guide">
        @error('Guide')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="slug">slug:</label>
        <input value="{{$language->slug}}" name="slug" type="text" class="form-control" id="slug" placeholder="Enter slug">
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="titre">frameworks:</label>
        <input value="{{$language->frameworks}}" name="frameworks" type="text" class="form-control" id="titre" placeholder="Enter frameworks">
        @error('frameworks')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="remarque">remarque:</label>
        <input value="{{$language->remarque}}" name="remarque" type="text" class="form-control" id="frameworks" placeholder="Enter remarque">
        @error('remarque')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="titre">Titre:</label>
        <input value="{{$language->titre}}" name="titre" type="text" class="form-control" id="titre" placeholder="Enter Title">
        @error('Titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
    <label for="img">Image:</label>
    <input value="{{$language->img}}" type="file" id="img" name="img" class="form-control">

        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
      <label for="playList">playList:</label>
      <input  value="{{$language->playList}}" name="playList" type="text" class="form-control" id="playList" placeholder="Enter playList">
      @error('playList')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">modifer </button>
    </div>
</form>
   </div>

    </div>
  </div>
</div>
@endsection


@section('scripts')

@endsection