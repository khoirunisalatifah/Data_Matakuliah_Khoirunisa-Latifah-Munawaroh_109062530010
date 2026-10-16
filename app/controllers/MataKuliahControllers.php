<?php
class MataKuliahController
{
 public function __construct(private MataKuliah $model) {}
 public function index(): void
 {
 $mahasiswa = $this->model->getAll();
 require __DIR__ . '/../views/mata_kuliah/index.php';
 }
 public function create(): void
 {
 require __DIR__ . '/../views/mata_kuliah/create.php';
 }
 public function store(): void
 {
 $data = $this->validateInput($_POST);
 $this->model->insert($data);
 header('Location: index.php?page=mata_kuliah');
 exit;
 }
 public function edit(): void
 {
 $id = (int) ($_GET['id'] ?? 0);
 $mata_kuliah = $this->model->findById($id);
 if (!$mata_kuliah) {
 http_response_code(404);
 exit('Data mata kuliah tidak ditemukan.');
 }
 require __DIR__ . '/../views/mata_kuliah/edit.php';
 }
 public function update(): void
 {
 $id = (int) ($_POST['id'] ?? 0);
 $data = $this->validateInput($_POST);
 $this->model->update($id, $data);
 header('Location: index.php?page=mata_kuliah');
 exit;
 }
 public function delete(): void
 {
 $id = (int) ($_POST['id'] ?? 0);
 $this->model->delete($id);
 header('Location: index.php?page=mahasiswa');
 exit;
 }
 private function validateInput(array $input): array
 {
 $data = [
 'kode_mk' => trim($input['kode_mk'] ?? ''),
 'nama_mk' => trim($input['nama_mk'] ?? ''),
 'sks' => trim($input['sks'] ?? ''),
 'dosen_pengampu' => trim($input['dosen_pengampu'] ?? ''),
 'prodi' => trim($input['prodi'] ?? '')
 ];
 if ($data['kode_mk'] === '' || $data['nama_mk'] === '' || $data['sks'] === '' || $data['dosen_pengampu'] === '' || $data['prodi'] === '') {
 exit('kode_mk, nama_mk, sks, dosen_pengampu dan program studi wajib diisi.');
 }
 return $data;
 }
 }
?>