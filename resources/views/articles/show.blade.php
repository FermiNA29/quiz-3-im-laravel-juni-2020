@extends('layouts.master')

@section('heading')
    Detail <br>
    <a href="/artikel">
        <button type="button" class="btn btn-primary">Back</button>
    </a>
@endsection

@section('content')
      {{-- ini card detal article --}}
    <div class="card mb-4">
        <div class="card-body">
                <h1>{{$show->judul}}</h1>
                <p>{{$show->slug}}</p>
                <p>{{$show->isi}}</p>
                <a href="#">
                <button type="button" class="btn btn-success">{{$show->tag}}</button>
                </a>
                
        </div>
    </div>
@endsection