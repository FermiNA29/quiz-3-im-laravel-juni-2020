@extends('layouts.master')

@section('content')
<form action="/artikel" method="post">
    @csrf
    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="judul" class="form-control" name="judul" placeholder="Enter judul" id="judul">
    </div>
    <div class="form-group">
      <textarea name="isi" id="isi" placeholder="Enter Artikel" cols="30" rows="10"></textarea>
    </div>
      <div class="form-group">
        <label for="tag">Tag:</label>
        <input type="text" class="form-control"name="tag" placeholder="Enter tag" id="tag">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection