-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2021 pada 13.20
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
(6, '2021-09-08', 'Rabu', '123123', 'asdasd', 'Sejarah', 'Dedy', 'XI', 'IPS', 'Hadir'),
(7, '2021-09-08', 'Kamis', '16002345', 'Munaroh', 'Fisika', 'Maniak', 'XII', 'IPS', 'Izin');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(3) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `kode_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `jurusan`) VALUES
(9, '16102001', 'Ir.Hj.Nursiah Abe', 'A', 'Perempuan', 'CIBUBUR ', '1963-07-03', 'TASIKMALAYA', 'HINDU', 'Fisika'),
(10, '16102002', 'Mustika Ayu,S.Pd', 'B', 'Perempuan', 'GARUT', '1968-08-15', 'TASIKMALAYA', 'ISLAM', 'Matematika'),
(11, '16102003', 'Leli Ardiana,S.Pd.I', 'C', 'Perempuan', 'GARUT', '1967-10-15', 'TASIKMALAYA', 'ISLAM', 'Pendidikan Agama Islam'),
(12, '16102004', 'Zuhri Arif,SH.,MH', 'D', 'Laki-laki', 'BOGOR', '1958-02-07', 'TASIKMALAYA', 'ISLAM', 'Ke Al Washliyahan'),
(13, '16102005', 'Dra.Susiana Sari', 'E', 'Perempuan', 'JAKARTA', '1976-12-12', 'TASIKMALAYA', 'ISLAM', 'Bahasa Indonesia'),
(14, '16102006', 'Ismail,SH', 'F', 'Laki-laki', 'JAKARTA', '1990-11-02', 'TASIKMALAYA', 'ISLAM', 'Sosiologi'),
(15, '16102007', 'Dewi Ayu Sophia,S.Pd', 'G', 'Perempuan', 'SEMARANG', '1988-01-20', 'TASIKMALAYA', 'ISLAM', 'Matematika'),
(17, '16102008', 'Fauziah Nur Batubara,S.Pd', 'H', 'Perempuan', 'MAKASSAR', '1988-07-17', 'TASIKMALAYA', 'ISLAM', 'Kimia'),
(18, '16102009', 'Rini Humairah,SE', 'I', 'Perempuan', 'BOGOR', '1978-12-12', 'TASIKMALAYA', 'ISLAM', 'Ekonomi'),
(19, '16102010', 'Safwan,S.Pd.I.,M.Pd.I', 'J', 'Laki-laki', 'TASIKMALAYA', '1975-10-10', 'TASIKMALAYA', 'ISLAM', 'Pkn'),
(20, '16102011', 'Yulia Rahmadhani,S.Pd., M.Hum', 'K', 'Perempuan', 'GARUT', '1985-04-22', 'TASIKMALAYA', 'ISLAM', 'Bahasa Inggris'),
(21, '16102012', 'Evo Hidayat,S.Pd', 'L', 'Laki-laki', 'TASIKMALAYA', '1963-11-11', 'TASIKMALAYA', 'ISLAM', 'Bahasa Indonesia'),
(22, '16102013', 'Gunawan Edi Utama,S.Si', 'M', 'Laki-laki', 'CIBUBUR', '1988-12-20', 'TASIKMALAYA', 'ISLAM', 'Biologi'),
(23, '16102014', 'Desi Ariani Pulungan,S.Pd', 'N', 'Perempuan', 'BOGOR', '1969-07-18', 'TASIKMALAYA', 'ISLAM', 'Sejarah.P'),
(24, '16102015', 'Muhajirin Anshori,S.Pd.I.,M.Pd', 'O', 'Laki-laki', 'JAKARTA', '1989-07-15', 'TASIKMALAYA', 'ISLAM', 'Pend Agama Islam'),
(25, '16102016', 'M. Padlan Lubis,S.Si', 'P', 'Laki-laki', 'JAKARTA', '1990-12-11', 'TASIKMALAYA', 'ISLAM', 'Prakarya'),
(26, '16102017', 'Riza Hayati Lubis,S.Pd', 'Q', 'Perempuan', 'TASIKMALAYA', '1990-05-06', 'TASIKMALAYA', 'ISLAM', 'Geografi'),
(27, '16102018', 'Bayu Perdana,S.Pd', 'R', 'Laki-laki', 'GARUT', '1986-08-13', 'TASIKMALAYA', 'ISLAM', 'PJOK'),
(30, '16102019', 'Munawar,S.Pd', 'Y', 'Laki-Laki', 'ASD', '2021-09-08', 'ASD', 'ASD', 'Sejarah'),
(29, '16102020', 'M.Rizali,S.Pd.,M.Sn', 'Z', 'Laki-Laki', 'ASD', '2021-09-13', 'ASD', 'ASD', 'Seni Budaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(14, 'X'),
(13, 'XI'),
(12, 'XII');

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
(8, '01', 'FISIKA QUANTUM'),
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
(27, 'tatausaha', 'tatausaha', 'tatausaha'),
(28, '16102019', 'munawar.guru', 'guru'),
(29, '16102020', 'rizalii.guru', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(3) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nama_ortu` varchar(40) NOT NULL,
  `no_ortu` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `nama_ortu`, `no_ortu`, `kelas`) VALUES
(1, '13001', 'ANDI MUH RIFQI RIZAL', 'LAKI-LAKI', 'MAKASSAR', '2021-09-23', 'TASIKMALAYA', 'ISLAM', 'MUSKAR', '08123456789', 'X'),
(3, '13002', 'DZULFAQQOR AMIN', 'LAKI-LAKI', 'JAKARTA', '2004-12-22', 'TASIKMALAYA', 'ISLAM', 'ARPEN', '08345678901', 'XII'),
(4, '13003', 'MUH. AMMAR', 'LAKI-LAKI', 'MAKASSAR', '2004-10-16', 'TASIKMALAYA', 'ISLAM', 'RUSYDAH', '+628123456789', 'XI'),
(11, '13004', 'RAVI SOFYAN', 'LAKI-LAKI', 'TASIKMALAYA', '2016-02-29', 'TASIKMALAYA', 'ISLAM', 'MR', '3653786428', 'X'),
(12, '13102001', 'ADITYA WIBOWO', 'PEREMPUAN', 'CILACAP', '2016-03-31', 'JALAN KENANGAN', 'ISLAM', 'MUCHLIS', '085434567281', 'X'),
(2, '14001', 'PRADIKA DESTARINI', 'PEREMPUAN', 'PURBALINGGA', '2004-12-11', 'TASIKMALAYA', 'ISLAM', 'RINI', '08234567890', 'X'),
(7, '14002', 'CALVIN SUTOYO', 'LAKI-LAKI', 'PADANG, SUMATERA BAR', '2005-01-05', 'TASIKMALAYA', 'ISLAM', 'SUTOYO HADININGRAT', '+6254447474', 'XI'),
(5, '15001', 'HARUN AR-RASYID', 'LAKI-LAKI', 'MANILA', '2005-10-15', 'TASIKMALAYA', 'ISLAM', 'RASYID AL-HIKMAH', '+624545657778', 'XII'),
(6, '15002', 'JUNETY', 'PEREMPUAN', 'JAKARTA', '2005-08-08', 'TASIKMALAYA', 'ISLAM', 'MOH.SAIPUDIN', '+6251514578', 'X');

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
  ADD UNIQUE KEY `kode_guru_2` (`kode_guru`),
  ADD UNIQUE KEY `nama_guru` (`nama_guru`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `kelas` (`kelas`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
