@extends('templates.main')
@section('title', 'Tambah Buku')
@section('content')
  <section class="my-5 py-5">
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="name">Judul Buku : <input type="text" name="name" id="name"></label>

      <label for="id_author">Penulis : <input type="number" name="id_author" id="id_author"></label>

      <label for="id_category">Kategori : <input type="number" name="id_category" id="id_category"></label>

      <label for="book_language">Bahasa : <input type="text" name="book_language" id="book_language"></label>

      <label for="total_pages">Jumlah Halaman : <input type="number" name="total_pages" id="total_pages"></label>

      <label for="sinopsis">Sinopsis : <textarea name="sinopsis" id="sinopsis" cols="30" rows="10"></textarea></label>

      <label for="description">Deskripsi : <textarea name="description" id="description" cols="30" rows="10"></textarea></label>

      <label for="type">Jenis : <input type="text" name="type" id="type"></label>

      <label for="publisher">Penerbit : <input type="text" name="publisher" id="publisher"></label>

      <label for="published_at">Tanggal Diterbitkan : <input type="date" name="published_at" id="published_at"></label>

      <label for="isbn">ISBN : <input type="number" name="isbn" id="isbn"></label>

      <label for="photo">Gambar : <input type="file" name="photo" id="photo"></label>

      <button type="submit">Tambah</button>
    </form>
  </section>
@endsection