
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h2>Tambah Mata Kuliah</h2>
    <form method="post" action="index.php?page=mata_kuliah&action=store">
        <label>Kode Mata Kuliah</label><br>
        <input type="text" name="kode" required><br><br>

        <label>Nama Mata Kuliah</label><br>
        <input type="text" name="nama" required><br><br>

        <label>SKS</label><br>
        <input type="number" name="sks" required><br><br>

        <label>Dosen Pengampu</label><br>
        <input type="text" name="dosen_pengampu" required><br><br>

        <label>Program Studi</label><br>
        <input type="text" name="prodi" required><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=mata_kuliah">Kembali</a>
    </form>
</body>
</html>
