@extends('layouts.master');


@section('title')


@endsection

 
@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a>
 
@endsection


@section('title_page2')
<a href="{{ url('/question') }}">Page_Question</a>
@endsection

@section('Content')


<button type="button"   class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
Modifier Question
</button>

<!-- Modal structure with a form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to capture id, idLangage, description, and titre -->
        <form action="{{url('update-data-questions/'.$questions->id)}}" method="post">      
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="idQuiz">idQuiz:</label>
        <input  value="{{$questions->idQuiz}}" name="idQuiz" type="text" class="form-control" id="idQuiz" placeholder="Enter idQuiz">
        @error('idQuiz')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="idQuiz">bodyQuestion:</label>
        <input  value="{{$questions->bodyQuestion}}" name="bodyQuestion" type="text" class="form-control" id="idQuiz" placeholder="Enter bodyQuestion">
        @error('bodyQuestion')
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