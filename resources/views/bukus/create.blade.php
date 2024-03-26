<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Buku</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>

    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul"><br>
    
        <label for="penulis">Penulis:</label><br>
        <input type="text" id="penulis" name="penulis"><br>
    
        <label for="penerbit">Penerbit:</label><br>
        <input type="text" id="penerbit" name="penerbit"><br>
    
        <label for="tahunterbit">Tahun Terbit:</label><br>
        <input type="text" id="tahunterbit" name="tahunterbit"><br>
    
        <button type="submit">Tambah Data</button>
    </form>    
</body>
</html>
