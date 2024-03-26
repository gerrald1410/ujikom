
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku</title>
</head>
<body>
    <h1>Edit Data Buku</h1>

    <form action="{{ route('bukus.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="{{ $buku->judul }}"><br>

        <label for="penulis">Penulis:</label><br>
        <input type="text" id="penulis" name="penulis" value="{{ $buku->penulis }}"><br>

        <label for="penerbit">Penerbit:</label><br>
        <input type="text" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}"><br>

        <label for="tahunterbit">Tahun Terbit:</label><br>
        <input type="text" id="tahunterbit" name="tahunterbit" value="{{ $buku->tahunterbit }}"><br>

        <button type="submit">Update Data</button>
    </form>
</body>
</html>