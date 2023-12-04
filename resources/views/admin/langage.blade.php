@extends('layouts.master');


@section('title')


@endsection


@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a>
 
@endsection


@section('title_page2')
Page_Langage
@endsection

@section('Content')
<!-- Button to trigger the modal -->
<!-- Button to trigger the modal with modified margin -->
<h1>Liste De Langages</h1>
<hr>
<button type="button"   class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
  Add Langages
</button>
<!-- Modal structure with a form -->
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
    <form action="/admin/langage/store" method="post">
    @csrf
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter Description"></textarea>
        <!-- @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror -->
    </div>
    <div class="form-group">
        <label for="titre">Titre:</label>
        <input name="titre" type="text" class="form-control" id="titre" placeholder="Enter Title">
        <!-- @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror -->
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
          <h3 class="card-title">DataTable Langages</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">

            <thead>
              <tr>
                <th>Index</th>
                <th>ID Langages</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($Langages as $index =>$La)
              <tr>
                <td>{{$index}}</td>
                <td>{{$La->id}}</td>
                <td>{{$La->titre}}</td>
                <td>{{$La->description}}</td>
                <td>
                <a href="#" class="btn btn-success" style="margin-right: 10px; margin-bottom: 10px;">Modifier</a>
                <a href="#" class="btn btn-danger" style="margin-right: 10px; margin-bottom: 10px;">Supprimer</a>

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