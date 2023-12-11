@extends('layouts.master');


@section('title')


@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/images/favicon.ico')}}">
    <!-- shortcut icon -->
@endsection

@section('title_page1')

 
@endsection


@section('title_page2')

@endsection

@section('Content')
<h1  style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;" >Liste De Blogs</h1>
<hr>
<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
  Add Blogs
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
    <form action="" method="post">
    @csrf

    <div class="form-group">
        <label for="content">content:</label>
        <input name="content" type="text" class="form-control" id="titre" placeholder="Enter content">
        <!-- @error('titre')
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

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Bordered table</h4> -->
                    <p class="card-description"><code>Table-Blogs</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>content</th>
                            <th>title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Messsy Adam</td>
                            <td>Messsy Adam</td>
                <td>
                <a href="#" class="btn btn-success" style="margin-right: 10px; margin-bottom: 10px;">Modifier</a>
                <a  href="#" class="btn btn-danger" style="margin-right: 10px; margin-bottom: 10px;">Supprimer</a>
                </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

@endsection


@section('scripts')
    <script type="text/javascript" src="{{URL::asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/off-canvas.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/hoverable-collapse.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/misc.js')}}"></script>

@endsection