@extends('layouts.master');


@section('title')


@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/images/favicon.png')}}">
@endsection

@section('title_page1')

@endsection

@section('Content')
<!-- Button to trigger the modal -->
<!-- Button to trigger the modal with modified margin -->
<h1  style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;" >Liste De Langages</h1>
<hr>
<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 10px; margin-right: 10px;   margin-left: 20px;"  >
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
    <form action="/admin/langage/store" method="post" enctype="multipart/form-data">
    @csrf
    {{ csrf_field() }}
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
        <label for="WhyLearn">WhyLearn:</label>
        <input name="WhyLearn" type="text" class="form-control" id="WhyLearn" placeholder="Enter WhyLearn">
        @error('WhyLearn')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="Example">Example:</label>
        <input name="example" type="text" class="form-control" id="example" placeholder="Enter example">
        @error('example')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="Applications">Applications:</label>
        <input name="Applications" type="text" class="form-control" id="Applications" placeholder="Enter Applications">
        @error('Applications')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="Guide">Guide:</label>
        <input name="Guide" type="text" class="form-control" id="Guide" placeholder="Enter Guide">
        @error('Guide')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="slug">slug:</label>
        <input name="slug" type="text" class="form-control" id="slug" placeholder="Enter slug">
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="frameworks">frameworks:</label>
        <input name="frameworks" type="text" class="form-control" id="frameworks" placeholder="Enter frameworks">
        @error('frameworks')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="remarque">remarque:</label>
        <input name="remarque" type="text" class="form-control" id="frameworks" placeholder="Enter remarque">
        @error('remarque')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
      <label for="playList">playList:</label>
      <input name="playList" type="text" class="form-control" id="playList" placeholder="Enter playList">
      @error('playList')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
    <label for="img">Image:</label>
    <input type="file" id="img" name="img" class="form-control">
        @error('img')
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




<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> table</h4>
                    <p class="card-description"> <code>.DataTable Langages</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <!-- <th>#</th> -->
                        <!-- <th>Index</th>
                <th>ID </th> -->
                <th>Titre</th>
                <th>Description</th>
                <th>WhyLearn</th>
                <th>example</th>
                <th>Applications</th>
                <th>Guide</th>
                <th>slug</th>
                <th>Frameworks</th>
                <th>remarque</th>
                <th>playList</th>
                <th>img</th>
                <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($Langages as $index =>$La)
              <tr>
                <!--  <td>{{$index}}</td> -->
                <!-- <td>{{$La->id}}</td>  -->
                <td>{{$La->titre}}</td>
                <td>{{$La->description}}</td>
                <td>{{$La->WhyLearn}}</td>
                <td>{{$La->example}}</td>
                <td>{{$La->Applications}}</td>
                <td>{{$La->Guide}}</td>
                <td>{{$La->slug}}</td>
                <td>{{$La->frameworks}}</td>
                <td>{{$La->remarque}}</td>
                <td>{{$La->playList}}</td>
                <td> 
                <img src="{{ asset('uploads/langage/' . $La->img) }}" alt="Post Image" style="width: 70px; height: auto;">
                </td>
                <td>
                <a href="{{url('edit/'.$La->id)}}" class="btn btn-success" style="margin-right: 10px;  margin-bottom: 10px;">Modifier</a>
                <a onclick="return confirm('vouler-vous vrament suprimer cette langauge')" href="/admin/langage/{{$La->id}}/delet" class="btn btn-danger" style="margin-right: 10px; margin-bottom: 10px;">Supprimer</a>

                </td>
              </tr>
            @endforeach
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
<script type="text/javascript" src="{{URL::asset('assets/js/settings.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/todolist.js')}}"></script>
@endsection