@extends('layouts.master');


@section('title')


@endsection

 
@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a>
 
@endsection


@section('title_page2')
<a href="{{ url('/extrauser') }}">Page_Extrauser</a>
@endsection

@section('Content')


<button type="button"   class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
Modifier Extrauser
</button>


<!-- Modal structure with a form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Extrauser</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to capture id, idLangage, description, and titre -->
        <form action="{{url('update-data-extrauser/'.$extrauser->id)}}" method="post">        
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="idUser">idUser:</label>
        <input value="{{$extrauser->id}}" name="idUser" type="text" class="form-control" id="titre" placeholder="Enter idUser">
        @error('idUser')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="Education">Education:</label>
        <input value="{{$extrauser->Education}}" name="Education" type="text" class="form-control" id="Education" placeholder="Enter Education">
        @error('Education')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="WorkExperience">WorkExperience:</label>
        <input value="{{$extrauser->WorkExperience}}" name="WorkExperience" type="text" class="form-control" id="WorkExperience" placeholder="Enter WorkExperience">
        @error('WorkExperience')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="bio">bio:</label>
        <input value="{{$extrauser->bio}}" name="bio" type="text" class="form-control" id="bio" placeholder="Enter bio">
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="MySocials">MySocials:</label>
        <input value="{{$extrauser->MySocials}}" name="MySocials" type="text" class="form-control" id="MySocials" placeholder="Enter MySocials">
        @error('MySocials')
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