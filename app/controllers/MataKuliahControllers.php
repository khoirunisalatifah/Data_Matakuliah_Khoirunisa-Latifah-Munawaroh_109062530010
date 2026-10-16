
<?php
class MataKuliahControllers
{
    public function __construct(private MataKuliah $model) {}

    public function index(): void
    {
        $mata_kuliah = $this->model->getAll();
        require __DIR__ . '/../views/MataKuliah/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/MataKuliah/create.php';
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

        require __DIR__ . '/../views/MataKuliah/edit.php';
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

        header('Location: index.php?page=mata_kuliah');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'kode' => trim($input['kode'] ?? ''),
            'nama' => trim($input['nama'] ?? ''),
            'sks' => trim($input['sks'] ?? ''),
            'dosen_pengampu' => trim($input['dosen_pengampu'] ?? ''),
            'prodi' => trim($input['prodi'] ?? '')
        ];

        if (
            $data['kode'] === '' ||
            $data['nama'] === '' ||
            $data['sks'] === '' ||
            $data['dosen_pengampu'] === '' ||
            $data['prodi'] === ''
        ) {
            exit('Kode mata kuliah, nama mata kuliah, SKS, dosen pengampu, dan program studi wajib diisi.');
        }

        return $data;
    }
}
?>
