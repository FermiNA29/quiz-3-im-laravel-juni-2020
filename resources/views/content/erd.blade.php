@extends('layouts.master');

@section('heading')
    ERD Database <br>
    <a href="/artikel">
      <button type="button" class="btn btn-primary">Articles</button>
  </a>
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-header">
      ERD Database
    </div>
    <div class="card-body">
    <img src="{{asset('/img/larawork.png')}}" alt="">
    </div>
  </div>
@endsection