
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <a href="index.php?page=mata_kuliah&action=create">Tambah Data</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Dosen Pengampu</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($mata_kuliah as $mk): ?>
        <tr>
            <td><?= htmlspecialchars($mk['kode_mk'] ?? '') ?></td>
            <td><?= htmlspecialchars($mk['nama_mk'] ?? '') ?></td>
            <td><?= htmlspecialchars((string) ($mk['sks'] ?? '')) ?></td>
            <td><?= htmlspecialchars($mk['dosen_pengampu'] ?? '') ?></td>
            <td><?= htmlspecialchars($mk['prodi'] ?? '') ?></td>
            <td>
                <a href="index.php?page=mata_kuliah&action=edit&id=<?= (int) $mk['id'] ?>">Edit</a>

                <form method="post"
                    action="index.php?page=mata_kuliah&action=delete"
                    style="display:inline"
                    onsubmit="return confirm('Hapus data mata kuliah ini?')">

                    <input type="hidden" name="id" value="<?= (int) $mk['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
