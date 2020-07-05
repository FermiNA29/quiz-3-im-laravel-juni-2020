@extends('layouts.master')

@section('heading')
    Edit<br>
    <a href="/artikel">
      <button type="button" class="btn btn-primary">Back</button>
  </a>
@endsection

@section('content')
<form action="/artikel/{{$edit->id}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="judul">Judul:</label>
    <input type="judul" class="form-control" name="judul" value="{{$edit->judul}}" placeholder="Enter judul" id="judul">
    </div>
    <div class="form-group">
      <textarea name="isi" id="isi" placeholder="Enter Artikel"  cols="30" rows="10">{{$edit->judul}}</textarea>
    </div>
      <div class="form-group">
        <label for="tag">Tag:</label>
        <input type="text" class="form-control"name="tag" value="{{$edit->tag}}" placeholder="Enter tag" id="tag">
      </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection