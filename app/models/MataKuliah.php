
<?php
class MataKuliah
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, kode_mk, nama_mk, sks, dosen_pengampu, prodi
             FROM mata_kuliah ORDER BY nama_mk'
        );
        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            'SELECT id, kode_mk, nama_mk, sks, dosen_pengampu, prodi
             FROM mata_kuliah WHERE id = :id'
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO mata_kuliah
                (kode_mk, nama_mk, sks, dosen_pengampu, prodi)
                VALUES
                (:kode_mk, :nama_mk, :sks, :dosen_pengampu, :prodi)';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':kode_mk' => $data['kode'],
            ':nama_mk' => $data['nama'],
            ':sks' => $data['sks'],
            ':dosen_pengampu' => $data['dosen_pengampu'],
            ':prodi' => $data['prodi']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE mata_kuliah
                SET kode_mk = :kode_mk,
                    nama_mk = :nama_mk,
                    sks = :sks,
                    dosen_pengampu = :dosen_pengampu,
                    prodi = :prodi
                WHERE id = :id';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':kode_mk' => $data['kode'],
            ':nama_mk' => $data['nama'],
            ':sks' => $data['sks'],
            ':dosen_pengampu' => $data['dosen_pengampu'],
            ':prodi' => $data['prodi']
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            'DELETE FROM mata_kuliah WHERE id = :id'
        );

        return $stmt->execute([':id' => $id]);
    }
}
?>
