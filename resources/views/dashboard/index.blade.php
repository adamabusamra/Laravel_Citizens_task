@extends('layouts.basic')

@section('head')
    <style>body {
        background-image: url(/images/bg.jpg);
    }</style>
@endsection

@section('title')
    Home
@endsection

@section('main')

<div class="row mt-5">
@foreach ($students as $key => $value)

    <div class="col-md-2 card m-3 " style="width: 18rem;">
        <img class="card-img-top" src="{{$students[$key]['image']}}" alt="Card image cap">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{$students[$key]['name']}}</h5>
          <a href="/single_student/{{$students[$key]['id']}}" class="mt-auto btn btn-warning btn-sm d-flex justify-content-center">View Profile</a>
        </div>
      </div>

@endforeach
</div>

{{-- This checks wether the project is completed

@if(!$students[$key]['projects'][0]['completed'])
<h1>Portfolii is TRUE</h1> --}}

@endsection
