@extends('templates.main')
@section('title', 'Daftar Buku')
@section('content')
  <section>
    <div class="container py-5">
      @foreach ($books as $book)
        <div class="row justify-content-center mb-3">
          <div class="col-md-12 col-xl-10">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                      <img src="{{ $book['photo'] }}"
                        class="w-100" alt="{{ $book['name'] }}" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-6">
                    <h5>{{ $book['name'] }}</h5>
                    <div class="d-flex flex-row">
                      <span>{{ $book['author']['name'] }}</span>
                    </div>
                    <div class="mt-1 mb-0 text-muted small">{{ $book['publisher'] }}</div>
                    <p class="text-truncate mb-4 mb-md-0">
                      {{ $book['sinopsis'] }}
                    </p>
                  </div>
                  <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                    <h5 class="text-success">{{ $book['type'] }}</h5>
                    <h6 class="text-muted">{{ $book['category']['name'] }}</h6>
                    <div class="d-flex flex-column mt-4">
                      <a href="{{ route('books.detail', $book['id']) }}" class="btn btn-outline-success btn-sm mt-2">Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection