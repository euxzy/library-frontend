@extends('templates.main')
@section('title', $book['name'])
@section('content')
  <section class="my-5 py-5" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0 pt-3">
              <div class="col-md-4 gradient-custom text-center p-3" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="{{ $book['photo'] }}" alt="{{ $book['name'] }}" class="img-fluid my-5" />
                <h5>{{ $book['name'] }}</h5>
                <p>{{ $book['author']['name'] }}</p>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h5>Detail {{ $book['name'] }}</h5>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Kategori</h6>
                      <p class="text-muted">{{ $book['category']['name'] }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Tipe</h6>
                      <p class="text-muted">{{ $book['type'] }}</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Bahasa</h6>
                      <p class="text-muted">{{ $book['book_language'] }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Jumlah Halaman</h6>
                      <p class="text-muted">{{ $book['total_pages'] }}</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Penerbit</h6>
                      <p class="text-muted">{{ $book['publisher'] }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Tanggal Terbit</h6>
                      <p class="text-muted">{{ $book['published_at'] }}</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-12 mb-3">
                      <h6>Sinopsisi</h6>
                      <p class="text-muted">{{ $book['sinopsis'] }}</p>
                    </div>
                  </div>

                  <hr class="mt-0 mb-4">
                  <div class="d-flex">
                    <p class="text-muted">Edit</p>
                    <p class="text-muted mx-3">Hapus</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection