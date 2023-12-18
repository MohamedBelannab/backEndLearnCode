@extends('layouts.master');


@section('title')


@endsection


@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a> 
@endsection


@section('title_page2')
Page_anserwers
@endsection

@section('Content')
<!-- Button to trigger the modal -->
<!-- Button to trigger the modal with modified margin -->
<h1  style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;" >Liste De Anserwers</h1>

<hr>
<button type="button"   class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
  Add Anserwers
</button>


<!-- Modal structure with a form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Anserwers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to capture id, idLangage, description, and titre -->
        <form action="/admin/anserwers/store" method="post">
    @csrf
    <div class="form-group">
        <label for="idQuestion">idQuestion:</label>
        <input   name="idQuestion" type="text" class="form-control" id="titre" placeholder="Enter idQuestion">
        @error('idQuestion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Body:</label>
        <input name="body" type="text" class="form-control" id="body" placeholder="Enter Body">
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="correct">correct:</label>
        <input name="correct" value="1" {{ old('correct') == '1' ? 'checked' : '' }} type="checkbox" class="form-control" id="body" placeholder="Enter correct">
        @error('correct')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>


      </div>

    </div>
  </div>
</div>


<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable Anserwers</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">

            <thead>
            <tr>
                            <th>idQuestion</th>
                            <th>body</th>
                            <th>correct</th>
                            <th>Action</th>
                          </tr>
            </thead>
            <tbody>
            @foreach($anserwers as $index =>$a)
                          <tr>
                            <td>{{$a->idQuestion}}</td>
                            <td>{{$a->body}}</td>
                            <td>{{$a->correct ? 'Yes' : 'No'}}</td>
                <td>
                <a href="{{url('editanserwers/'.$a->id)}}" class="btn btn-success" style="margin-right: 10px; margin-bottom: 10px;">Modifier</a>
                <a onclick="return confirm('vouler-vous vrament suprimer cette anserwers')" href="/admin/anserwers/{{$a->id}}/delete" class="btn btn-danger" style="margin-right: 10px; margin-bottom: 10px;">Supprimer</a>

                </td>
                          </tr>
                          @endforeach
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->



@endsection


@section('scripts')

@endsection