CREATE DATABASE IF NOT EXISTS akademik
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
USE akademik;
CREATE TABLE IF NOT EXISTS mata_kuliah (
 id INT AUTO_INCREMENT PRIMARY KEY,
 kode_mk VARCHAR(20) NOT NULL UNIQUE,
 nama_mk VARCHAR(100) NOT NULL,
 sks INT(2) NOT NULL,
 dosen_pengampu VARCHAR(100) NOT NULL,
 prodi VARCHAR(100) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO mata_kuliah (kode_mk, nama_mk, sks, dosen_pengampu, prodi) VALUES
('SI101', 'Basis Data', '3', 'Andi Pratama', 'Sistem Informasi'),
('SI102', 'Pengembangan Aplikasi dan Website', '4', 'Toni Anwar', 'Sistem Informasi'),
('SI103', 'Algoritma dan Pemrograman', '3', 'Rina Amelia', 'Sistem Informasi'),
('SI104', 'Matematika', '2', 'Khoirunisa Latifah', 'Sistem Informasi');


