@extends('layouts.master');


@section('title')


@endsection


@section('css')
@endsection

@section('title_page1')
Home
 
@endsection


@section('title_page2')
Page_Langage
@endsection

@section('Content')
<!-- Button to trigger the modal -->
<!-- Button to trigger the modal with modified margin -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;">
  Add Quiz
</button>


<!-- Modal structure with a form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Quiz</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to capture id, idLangage, description, and titre -->
        <form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter Description"></textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="titre">Titre:</label>
        <input name="titre" type="text" class="form-control" id="titre" placeholder="Enter Title">
        @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
    <label for="idLangage">ID Language:</label>
    <input name="idLangage" type="text" class="form-control" id="idLangage" placeholder="Enter Language ID">
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
          <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>4</td>
                <td>X</td>
              </tr>
            
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