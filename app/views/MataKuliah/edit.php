
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <h2>Edit Mata Kuliah</h2>
    <form method="post" action="index.php?page=mata_kuliah&action=update">
        <input type="hidden" name="id" value="<?= htmlspecialchars((string) $mata_kuliah['id']) ?>">

        <label>Kode Mata Kuliah</label><br>
        <input type="text" name="kode"
        value="<?= htmlspecialchars($mata_kuliah['kode']) ?>" required><br><br>

        <label>Nama Mata Kuliah</label><br>
        <input type="text" name="nama"
        value="<?= htmlspecialchars($mata_kuliah['nama']) ?>" required><br><br>

        <label>SKS</label><br>
        <input type="number" name="sks"
        value="<?= htmlspecialchars((string) $mata_kuliah['sks']) ?>" required><br><br>

        <label>Dosen Pengampu</label><br>
        <input type="text" name="dosen_pengampu"
        value="<?= htmlspecialchars($mata_kuliah['dosen_pengampu']) ?>" required><br><br>

        <label>Program Studi</label><br>
        <input type="text" name="prodi"
        value="<?= htmlspecialchars($mata_kuliah['prodi']) ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=mata_kuliah">Kembali</a>
    </form>
</body>
</html>
