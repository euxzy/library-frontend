@extends('templates.main')
@section('title', 'Daftar Penulis')
@section('content')
  <div class="container my-5 py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <div class="text-center">
          <h3>Daftar Penulis</h3>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($authors as $author)
        <div class="card" style="width: 18rem;">
          <img src="{{ $author['photo'] }}" class="card-img-top" alt="{{ $author['name'] }}">
          <div class="card-body">
            <h5 class="card-title">{{ $author['name'] }}</h5>
            <p class="card-text text-truncate">{{ $author['description'] }}</p>
            <a href="#" class="btn btn-outline-success">Detail {{ $author['name'] }}</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
