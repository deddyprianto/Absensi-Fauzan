-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2021 pada 18.30
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_absensi`
--

CREATE TABLE `hasil_absensi` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(200) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `status_kehadiran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_absensi`
--

INSERT INTO `hasil_absensi` (`id`, `tanggal`, `hari`, `nip`, `nama_guru`, `mapel`, `nama_siswa`, `kelas`, `jurusan`, `status_kehadiran`) VALUES
(5, '2021-09-08', 'Rabu', '16002345', 'Munarudin', 'Matematika', 'Arif', 'X', 'IPA', 'Sakit'),
(7, '2021-09-08', 'Kamis', '16002345', 'Munaroh', 'Fisika', 'Maniak', 'XII', 'IPS', 'Izin'),
(8, ' 05-09-2021', 'Minggu', '16102001', 'Ir.Hj.Nursiah Abe', 'Fisika', 'Adam Malik', 'X', 'IPA', 'Hadir'),
(9, ' 06-09-2021', 'Senin', '16102001', 'Ir.Hj.Nursiah Abe', 'Fisika', 'ANDI MUH RIFQI RIZAL', 'X', 'IPA', 'Hadir'),
(10, ' 06-09-2021', 'Senin', '16102001', 'Ir.Hj.Nursiah Abe', 'Fisika', 'ANDI MUH RIFQI RIZAL', 'X', 'IPA', 'Hadir'),
(11, ' 06-09-2021', 'Senin', '16102004', 'Zuhri Arif,SH.,MH', 'PENDIDIKAN AGAMA ISLAM', 'FAUZAN LUBIS', 'XII', 'IPA', 'Alpha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_guru`
--

CREATE TABLE `jadwal_guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `mapel_dibawakan` varchar(255) NOT NULL,
  `jumlah_les` int(11) NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_berakhir` varchar(10) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_guru`
--

INSERT INTO `jadwal_guru` (`id`, `nip`, `nama_guru`, `mapel_dibawakan`, `jumlah_les`, `jam_mulai`, `jam_berakhir`, `hari`, `jurusan`, `kelas`) VALUES
(1, '16102001', 'Ir.Hj.Nursiah Abe', 'FISIKA QUANTUM', 2, '22:18', '22:18', 'Selasa', 'IPA', 'X'),
(2, '16102003', 'Leli Ardiana,S.Pd.I', 'ILMU PENGETAHUAN SOSIAL', 2, '23:18', '20:18', 'Jumat', 'IPS', 'XI'),
(3, '16102005', 'Dra.Susiana Sari', 'SEJARAH', 2, '22:19', '22:19', 'Rabu', 'IPS', 'X'),
(4, '16102003', 'Leli Ardiana,S.Pd.I', 'PENDIDIKAN KEWARGANERAAN', 2, '22:51', '22:51', 'Senin', 'IPA', 'XII'),
(5, '16102004', 'Zuhri Arif,SH.,MH', 'PENDIDIKAN AGAMA ISLAM', 2, '20:53', '20:54', 'Selasa', 'IPA', 'XI'),
(7, '16102008', 'Fauziah Nur Batubara,S.Pd', 'PRAKARYA', 2, '01:30', '02:30', 'Rabu', 'IPA', 'XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(3) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `mapel`) VALUES
(9, '16102001', 'Ir.Hj.Nursiah Abe', 'Perempuan', 'CIBUBUR ', '1963-07-03', 'TASIKMALAYA', 'Islam', 'FISIKA QUANTUM'),
(10, '16102002', 'Mustika Ayu,S.Pd', 'Perempuan', 'GARUT', '1968-08-15', 'TASIKMALAYA', 'ISLAM', 'Matematika'),
(11, '16102003', 'Leli Ardiana,S.Pd.I', 'Perempuan', 'GARUT', '1967-10-15', 'TASIKMALAYA', 'ISLAM', 'Pendidikan Agama Islam'),
(12, '16102004', 'Zuhri Arif,SH.,MH', 'Laki-laki', 'BOGOR', '1958-02-07', 'TASIKMALAYA', 'ISLAM', 'Ke Al Washliyahan'),
(13, '16102005', 'Dra.Susiana Sari', 'Perempuan', 'JAKARTA', '1976-12-12', 'TASIKMALAYA', 'ISLAM', 'Bahasa Indonesia'),
(14, '16102006', 'Ismail,SH', 'Laki-laki', 'JAKARTA', '1990-11-02', 'TASIKMALAYA', 'ISLAM', 'Sosiologi'),
(15, '16102007', 'Dewi Ayu Sophia,S.Pd', 'Perempuan', 'SEMARANG', '1988-01-20', 'TASIKMALAYA', 'ISLAM', 'Matematika'),
(17, '16102008', 'Fauziah Nur Batubara,S.Pd', 'Perempuan', 'MAKASSAR', '1988-07-17', 'TASIKMALAYA', 'ISLAM', 'Kimia'),
(18, '16102009', 'Rini Humairah,SE', 'Perempuan', 'BOGOR', '1978-12-12', 'TASIKMALAYA', 'ISLAM', 'Ekonomi'),
(19, '16102010', 'Safwan,S.Pd.I.,M.Pd.I', 'Laki-laki', 'TASIKMALAYA', '1975-10-10', 'TASIKMALAYA', 'ISLAM', 'Pkn'),
(20, '16102011', 'Yulia Rahmadhani,S.Pd., M.Hum', 'Perempuan', 'GARUT', '1985-04-22', 'TASIKMALAYA', 'ISLAM', 'Bahasa Inggris'),
(21, '16102012', 'Evo Hidayat,S.Pd', 'Laki-laki', 'TASIKMALAYA', '1963-11-11', 'TASIKMALAYA', 'ISLAM', 'Bahasa Indonesia'),
(22, '16102013', 'Gunawan Edi Utama,S.Si', 'Laki-laki', 'CIBUBUR', '1988-12-20', 'TASIKMALAYA', 'ISLAM', 'Biologi'),
(23, '16102014', 'Desi Ariani Pulungan,S.Pd', 'Perempuan', 'BOGOR', '1969-07-18', 'TASIKMALAYA', 'ISLAM', 'Sejarah.P'),
(24, '16102015', 'Muhajirin Anshori,S.Pd.I.,M.Pd', 'Laki-laki', 'JAKARTA', '1989-07-15', 'TASIKMALAYA', 'ISLAM', 'Pend Agama Islam'),
(25, '16102016', 'M. Padlan Lubis,S.Si', 'Laki-laki', 'JAKARTA', '1990-12-11', 'TASIKMALAYA', 'ISLAM', 'Prakarya'),
(26, '16102017', 'Riza Hayati Lubis,S.Pd', 'Perempuan', 'TASIKMALAYA', '1990-05-06', 'TASIKMALAYA', 'ISLAM', 'Geografi'),
(27, '16102018', 'Bayu Perdana,S.Pd', 'Laki-laki', 'GARUT', '1986-08-13', 'TASIKMALAYA', 'ISLAM', 'PJOK'),
(30, '16102019', 'Munawar,S.Pd', 'Laki-Laki', 'ASD', '2021-09-08', 'ASD', 'ASD', 'Sejarah'),
(29, '16102020', 'M.Rizali,S.Pd.,M.Sn', 'Laki-Laki', 'ASD', '2021-09-13', 'ASD', 'ASD', 'Seni Budaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`, `jurusan`) VALUES
(1, 'X', 'IPA'),
(2, 'XI', 'IPA'),
(3, 'XII', 'IPA'),
(4, 'X', 'IPS'),
(5, 'XI', 'IPS'),
(6, 'XII', 'IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(3) NOT NULL,
  `kode_mapel` varchar(5) NOT NULL,
  `mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `kode_mapel`, `mapel`) VALUES
(8, '01', 'FISIKA QUANTUM REVISI KE TIGA'),
(9, '02', 'PENDIDIKAN KEWARGANERAAN'),
(10, '03', 'BAHASA INDONESIA'),
(11, '04', 'MATEMATIKA'),
(12, '05', 'ILMU PENGETAHUAN ALAM'),
(13, '06', 'ILMU PENGETAHUAN SOSIAL'),
(14, '07', 'BAHASA INGGRIS'),
(15, '08', 'SENI BUDAYA'),
(16, '09', 'PENDIDIKAN JASMANI DAN KESEHATAN (PENJASKES)'),
(17, '10', 'KETERAMPILAN'),
(18, '11', 'SEJARAH'),
(19, '12', 'TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)'),
(20, '13', 'GEOGRAFI'),
(21, '14', 'PRAKARYA'),
(22, '15', 'SEJARAH .P'),
(23, '16', 'BIOLOGI'),
(24, '17', 'PENDIDIKAN AGAMA ISLAM'),
(25, '18', 'PPKN'),
(26, '19', 'EKONOMI'),
(27, '20', 'KIMIA'),
(28, '21', 'KE AL WASHLIYAHAN'),
(31, '22', 'SOSIOLOGI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `pass`, `status`) VALUES
(4, '16102001', 'nursiah.guru', 'guru'),
(5, '16102002', 'ujang.guru', 'guru'),
(6, '16102003', 'fuad.guru', 'guru'),
(7, '16102004', 'dedi.guru', 'guru'),
(8, '16102005', 'susil.guru', 'guru'),
(9, '16102006', 'hana.guru', 'guru'),
(10, '16102007', 'susis.guru', 'guru'),
(11, '16102008', 'irpan.guru', 'guru'),
(12, '16102009', 'opik.guru', 'guru'),
(13, '16102010', 'neni.guru', 'guru'),
(14, '16102011', 'etin.guru', 'guru'),
(15, '16102012', 'erwin_djen.guru', 'guru'),
(16, '16102013', 'teni.guru', 'guru'),
(17, '16102014', 'een_nur.guru', 'guru'),
(18, '16102015', 'ega.guru', 'guru'),
(19, '16102016', 'Ghe.guru', 'guru'),
(20, '16102017', 'amel.guru', 'guru'),
(21, '16102018', 'resnu.guru', 'guru'),
(26, 'admin', 'admin', 'admin'),
(28, '16102019', 'munawar.guru', 'guru'),
(29, '16102020', 'rizalii.guru', 'guru'),
(34, 'tatausaha', 'tatausahaa', 'tatausaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(3) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kelas`, `jurusan`) VALUES
(15, '1231231231', 'FAUZAN LUBIS', 'LAKI-LAKI', 'ISLAM', 'MEDAN BARAT', '2021-09-14', 'MEDAN', 'XI', 'IPA'),
(13, '12323', 'ARMAN', 'LAKI-LAKI', 'ISLAM', 'CIBUBUR TUA', '2021-09-07', 'MEDAN', 'XI', 'IPS'),
(14, '1232312312', 'ANDI MUH RIFQI RIZAL', 'PEREMPUAN', 'ISLAM', 'CIBUBUR TUA', '2021-09-07', 'MEDAN', 'XII', 'IPA'),
(18, '34534534', 'ADAM JORDAN BATUBARA', 'LAKI-LAKI', 'ISLAM', 'MEDAN', '2021-09-14', 'MEDAN', 'X', 'IPA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_absensi`
--
ALTER TABLE `hasil_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_dibawakan` (`mapel_dibawakan`),
  ADD KEY `nama_guru` (`nama_guru`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `id_guru` (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `nama_guru` (`nama_guru`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`),
  ADD UNIQUE KEY `mapel` (`mapel`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_absensi`
--
ALTER TABLE `hasil_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
