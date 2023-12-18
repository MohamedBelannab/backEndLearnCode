

@extends('layouts.master');


@section('title')


@endsection


@section('css')
@endsection

@section('title_page1')
<a href="{{ url('/') }}" class="d-block">Home</a> 
@endsection


@section('title_page2')
Page_Users
@endsection


@section('Content')


<p>{{$ViewsUsers->id}}</p>
<p>{{$ViewsUsers->name}}</p>
<p>{{$ViewsUsers->email}}</p>
<p>{{$ViewsUsers->birthDay}}</p>



<!-- /.content -->


@endsection


@section('scripts')

@endsection