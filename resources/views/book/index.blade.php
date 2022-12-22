<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List Buku</title>
</head>
<body>
  <table border="1" cellpadding="5" cellspacing="0">
    <thead>
      <tr>
        <th>#</th>
        <th>Sampul Buku</th>
        <th>Judul Buku</th>
        <th>Sinopsisi</th>
        <th>Penulis</th>
        <th>Jenis</th>
        <th>Kategori</th>
        <th>Total Halaman</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <td>Deskripsi</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $book)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{ $book['photo'] }}" alt="{{ $book['name'] }}" style="width: 200px;"></td>
          <td>{{ $book['name'] }}</td>
          <td>{{ $book['sinopsis'] }}</td>
          <td>{{ $book['author']['name'] }}</td>
          <td>{{ $book['type'] }}</td>
          <td>{{ $book['category']['name'] }}</td>
          <td>{{ $book['total_pages'] }}</td>
          <td>{{ $book['publisher'] }}</td>
          <td>{{ $book['published_at'] }}</td>
          <td>{{ $book['description'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>