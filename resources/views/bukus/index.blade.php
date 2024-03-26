<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <a href="{{ route('create') }}">Tambah Data</a>

    <ul>
        @foreach ($bukus as $buku)
            <li>{{ $buku->judul }} - {{ $buku->penulis }} - {{ $buku->penerbit }} - {{ $buku->tahunterbit }}</li>
            <a href="{{ route('edit', $buku->id) }}">Edit</a>
            <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        @endforeach
    </ul>
</body>
</html>