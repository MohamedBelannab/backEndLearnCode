@extends('layouts.master');


@section('title')


@endsection

 
@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a>
 
@endsection


@section('title_page2')
<a href="{{ url('/likes') }}">Page_Userresults</a>
@endsection

@section('Content')


<button type="button"   class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
Modifier Userresults
</button>

<!-- Modal structure with a form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Userresults</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to capture id, idLangage, description, and titre -->
        <form action="{{url('update-data-userresults/'.$userresults->id)}}" method="post">      
    @csrf
    @method("PUT")
    
    <div class="form-group">
        <label for="idUser">idUser:</label>
        <input value="{{$userresults->idUser}}" name="idUser" type="number" class="form-control" id="idUser" placeholder="Enter idUser">
        @error('idUser')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="idQuiz">idQuiz:</label>
        <input value="{{$userresults->idQuiz}}" name="idQuiz" type="number" class="form-control" id="idQuiz" placeholder="Enter idQuiz">
        @error('idQuiz')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="score">Score:</label>
        <input value="{{$userresults->score}}" name="score" type="number" class="form-control" id="titre" placeholder="Enter score">
        @error('score')
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