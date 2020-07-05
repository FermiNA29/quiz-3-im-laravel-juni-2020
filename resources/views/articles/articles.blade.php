@extends('layouts.master')

@section('heading')
    Article
@endsection

@section('content')
    <table class="table table-striped">
    <div class="mb-4">    
        <a href="/artikel/create">
            <button type="button" class="btn btn-primary">Create Article</button>
        </a>
    </div>
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php $i = 0; ?>
        @foreach ($articles as $article)
      <tr>
      <td>{{$i += 1}}</td>
        <td>{{$article->judul}}</td>
        <td>
        <a href="/artikel/{{$article->id}}">
                <button type="button" class="btn btn-info">Detail</button>
            </a>
            <a href="/artikel/{{$article->id}}/edit">
                <button type="button" class="btn btn-primary">Edit</button>
            </a>
            <form action="/artikel/{{$article->id}}" method="POST" style="display:inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection

@push('scripts')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush