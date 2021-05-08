-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 09:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn4gowa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `bulantahun` int(11) NOT NULL,
  `izin` varchar(25) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `alfa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_siswa`, `bulantahun`, `izin`, `sakit`, `alfa`) VALUES
(16, 101, 12015, '20', '20', '20'),
(21, 101, 92020, '0', '0', '0'),
(22, 43, 92020, '0', '0', '0'),
(23, 116, 102020, '0', '0', '1'),
(24, 116, 112020, '0', '0', '0'),
(25, 137, 122020, '0', '0', '0'),
(29, 11, 112020, '0', '1', '0'),
(30, 14, 112020, '0', '0', '0'),
(31, 39, 112020, '0', '0', '0'),
(32, 157, 92020, '0', '0', '0'),
(33, 157, 102020, '1', '0', '0'),
(34, 157, 112020, '0', '0', '0'),
(35, 9, 82020, '0', '1', '1'),
(36, 11, 82020, '0', '0', '0'),
(37, 13, 82020, '0', '0', '0'),
(38, 14, 82020, '0', '1', '0'),
(39, 27, 82020, '0', '0', '0'),
(41, 11, 92020, '0', '0', '0'),
(42, 13, 92020, '0', '0', '0'),
(43, 14, 92020, '0', '1', '0'),
(44, 27, 92020, '0', '0', '0'),
(45, 9, 92020, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nip_guru` varchar(50) DEFAULT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `ttl_guru_tempat` varchar(50) DEFAULT NULL,
  `ttl_guru_tgl` date DEFAULT NULL,
  `alamat_guru` varchar(50) DEFAULT NULL,
  `no_hp_guru` int(255) DEFAULT NULL,
  `status_guru` varchar(25) DEFAULT NULL,
  `jk_guru` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `id_user`, `nip_guru`, `nama_guru`, `ttl_guru_tempat`, `ttl_guru_tgl`, `alamat_guru`, `no_hp_guru`, `status_guru`, `jk_guru`) VALUES
(25, 139, '197805142006041011', 'Fhasra Akhmad Akbar', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(27, 141, '', 'Nurkamri', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(28, 142, '197803052006042013', 'Murni', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(29, 143, '197506072006042026', 'Nurhaedah', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(30, 144, '198802122011012013', 'Nursyamsi', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(31, 145, '', 'Ichsani Taqwin Ibnu', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(32, 146, '198206182009041004', 'Muhammad Idris', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(33, 147, '197507022000122003', 'Andi Sitti Rasiah', 'BOJO', '1975-07-02', 'JL. PALLANTIKANG 83 A', 2147483647, 'Guru Tetap', 'Perempuan'),
(34, 148, '198110172006042006', 'Anita', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(35, 149, '197402161998022002', 'Fatmah Daeng Ngai', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(36, 150, '', 'Herman. R', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(37, 151, '196812201994121005', 'Abdul Rachmat', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(38, 152, '', 'Ansar Lengu', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(39, 153, '198211222006042011', 'Ariani S.', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(40, 154, '', 'Dewi Sari Ptasetya Putri Pongoh', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(41, 155, '', 'Nuraeni', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(42, 156, '197211052011012002', 'Nurdianah', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(43, 157, '198110072009012004', 'Nursanti', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(44, 158, '197008181998021012', 'Umar', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(45, 159, '', 'Syamsinar', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(46, 160, '', 'Stephani Fransiska Pongoh', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(47, 161, '', 'Nasrah Yunus', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(48, 162, '197312312007011038', 'MUHAMMAD RIFAI', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(49, 163, '', 'Nova Afriyanti', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(50, 164, '197305131998022004', 'Salmawati', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(51, 175, '', 'Guru', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(52, 177, '', 'Ihsan Indrawan Ibnu', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(53, 178, '', 'Esri Inderawati', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(54, 179, '', 'Faridawati', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(55, 180, '', 'Sulastri Sasmita', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(56, 181, '', 'Yanti Oktavia Vironika S', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(57, 182, '', 'Muhammad Kurnia Rahim', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(58, 183, '', 'Ibrahim', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(59, 184, '', 'Ahmad Gunawan', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(60, 185, '', 'Nasibah', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(61, 186, '', 'Muh. Syahrir', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(62, 187, '', 'Yuliaty', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(63, 188, '', 'Rafiuddin', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(64, 189, '', 'Rusniah', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(65, 190, '', 'Ahmad Yani', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(66, 191, '', 'Dangan', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(67, 192, '', 'Syafiuddin', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(68, 193, '', 'Rahmi', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(69, 194, '', 'Ratnawiyah', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(70, 195, '', 'Muh. Asri Armin', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(71, 196, '', 'Hairuddin', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(72, 197, '', 'DHIAZ MAHARANI SANTOSA', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(73, 198, '', 'Hizbi Fauzi', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(74, 199, '', 'Abd. Rakhman D.', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(75, 200, '', 'Agus Samsuddin', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(76, 201, '', 'NUR SYAHIDA ARSY', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(77, 202, '', 'Syamsul Kamar', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(78, 203, '', 'Abu Rizal', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(79, 204, '', 'Asmawati', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(80, 205, '', 'Mukhtar Husain', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(81, 206, '', 'Indah Herawaty', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(82, 207, '', 'Abdul Khalik', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(83, 208, '', 'Insana', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(84, 209, '', 'Iskandar Linta Tune', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki'),
(85, 210, '', 'IRPAN', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Laki-laki'),
(89, 228, '', 'Nur Rahmah', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(92, 257, '', 'Fitryani Syafar', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(93, 258, '', 'Hudayanti Kadir', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(94, 259, '', 'Yuliani', '', '0000-00-00', '', 0, 'Guru Tetap', 'Perempuan'),
(95, 260, '', 'Samriati', '', '0000-00-00', '', 0, 'Guru Tidak Tetap', 'Perempuan'),
(96, 261, '', 'Suparman', '', '0000-00-00', '', 0, 'Guru Tetap', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `kelas_jurusan` varchar(100) NOT NULL,
  `kode_jurusan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_guru`, `nama_kelas`, `kelas_jurusan`, `kode_jurusan`) VALUES
(1, 15, 'X', 'Teknik Komputer dan Jaringan', '1'),
(2, 15, 'X', 'Teknik Komputer dan Jaringan', '2'),
(3, 15, 'X', 'Teknik Komputer dan Jaringan', '3'),
(4, 10, 'X', 'Teknik Komputer dan Jaringan', '4'),
(6, 41, 'X', 'Teknik Komputer dan Jaringan', '1'),
(9, 50, 'X', 'Agribisnis Tanaman Pangan dan Hortikultura', '1'),
(10, 86, 'X', 'Agribisnis Tanaman Pangan dan Hortikultura', '2'),
(11, 42, 'X', 'Agribisnis Tanaman Pangan dan Hortikultura', '3'),
(12, 71, 'X', 'Agribisnis Tanaman Pangan dan Hortikultura', '4'),
(13, 29, 'X', 'Desain Grafika', '1'),
(14, 54, 'X', 'Desain Pemodelan dan Informasi Bangunan', '2'),
(15, 32, 'X', 'Produksi Grafika', '2'),
(16, 87, 'X', 'Teknik Audio Video', '1'),
(17, 46, 'X', 'Teknik Instalasi Tenaga Listrik', '2'),
(18, 83, 'XI', 'Agribisnis Tanaman Pangan dan Hortikultura', '1'),
(19, 77, 'XI', 'Desain Grafika', '3'),
(20, 43, 'XI', 'Desain Pemodelan dan Informasi Bangunan', '2'),
(21, 44, 'XI', 'Produksi Grafika', '2'),
(22, 88, 'XI', 'Teknik Audio Video', '2'),
(23, 61, 'XI', 'Teknik Instalasi Tenaga Listrik', '2'),
(24, 79, 'XI', 'Teknik Komputer dan Jaringan', '3'),
(25, 89, 'XII', 'Agribisnis Tanaman Pangan dan Hortikultura', '1'),
(26, 69, 'XII', 'Desain Grafika', '2'),
(27, 90, 'XII', 'Produksi Grafika', '3'),
(28, 27, 'XII', 'Teknik Audio Video', '1'),
(29, 39, 'XII', 'Desain Pemodelan dan Informasi Bangunan', '1'),
(30, 91, 'XII', 'Teknik Instalasi Tenaga Listrik', '1'),
(31, 69, 'XII', 'Teknik Komputer dan Jaringan', '1'),
(34, 31, 'X', 'Teknik Komputer dan Jaringan', '2'),
(35, 31, 'XI', 'Teknik Komputer dan Jaringan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Bahasa Indonesia'),
(21, 'Dasar Desain Grafis'),
(16, 'Fisika'),
(14, 'Kimia'),
(19, 'Komputer Jaringan Dasar'),
(4, 'Matematika'),
(20, 'Pemrograman Dasar'),
(10, 'Pendidikan Agama Islam'),
(12, 'PJOK'),
(3, 'PPKN'),
(15, 'Sejarah Indonesia'),
(13, 'Seni Budaya'),
(17, 'Simulasi Digital'),
(18, 'Sistem Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `thn_ajaran` int(11) DEFAULT NULL,
  `semester` varchar(50) NOT NULL,
  `tgs_1` int(50) DEFAULT NULL,
  `tgs_2` int(50) DEFAULT NULL,
  `tgs_3` int(50) DEFAULT NULL,
  `uts` int(10) DEFAULT NULL,
  `uas` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_mapel`, `id_siswa`, `id_user`, `kelas`, `thn_ajaran`, `semester`, `tgs_1`, `tgs_2`, `tgs_3`, `uts`, `uas`) VALUES
(8, 1, 101, 164, 'X Teknik Komputer dan Jaringan 4', 2020, 'Ganjil', 100, 90, 93, 80, 82),
(12, 15, 116, 175, 'XII Teknik Komputer dan Jaringan 2', 2017, 'Genap', 80, 80, 80, 80, 80),
(13, 15, 157, 230, 'X Teknik Instalasi Tenaga Listrik 2', 2020, 'Ganjil', 90, 90, 88, 88, 90),
(14, 19, 156, 147, 'XII Teknik Komputer dan Jaringan 1', 2020, 'Ganjil', 90, 90, 80, 87, 88),
(15, 1, 157, 164, 'X Teknik Instalasi Tenaga Listrik 2', 2020, 'Ganjil', 87, 90, 86, 85, 89),
(18, 19, 144, 147, 'XII Teknik Komputer dan Jaringan 1', 2020, 'Ganjil', 90, 89, 85, 88, 91),
(19, 15, 157, 147, 'XII Teknik Komputer dan Jaringan 1', 2020, 'Ganjil', 90, 90, 92, 84, 86);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kepada_saran` varchar(255) NOT NULL,
  `isi_saran` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama_siswa`, `kepada_saran`, `isi_saran`, `date_created`) VALUES
(2, 'ALYA ALISKA', 'Nuraeni', 'istirahat dgn baik buu', '2020-12-04 12:52:45'),
(3, 'ANDI NUR FIRDA', 'Nuraeni', 'Tetap Selalu baik dan peduli yah Bu??', '2020-12-04 18:14:33'),
(4, 'Siswa', 'Guru', 'halo', '2020-12-18 18:25:44'),
(5, 'ABDI NUGRAHA', 'Fitryani Syafar', 'Assalamualaikum ibu', '2021-01-03 16:07:15'),
(6, 'ABDI NUGRAHA', 'Andi Sitti Rasiah', 'Assalamualaikum ibu..', '2021-01-03 16:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nis_siswa` varchar(25) NOT NULL,
  `ttl_siswa_tempat` varchar(25) DEFAULT NULL,
  `ttl_siswa_tgl` date DEFAULT NULL,
  `alamat_siswa` varchar(255) DEFAULT NULL,
  `no_hp_siswa` int(25) DEFAULT NULL,
  `ayah_siswa` varchar(50) DEFAULT NULL,
  `agama_siswa` varchar(25) DEFAULT NULL,
  `jk_siswa` varchar(25) DEFAULT NULL,
  `ibu_siswa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_user`, `id_kelas`, `nama_siswa`, `nis_siswa`, `ttl_siswa_tempat`, `ttl_siswa_tgl`, `alamat_siswa`, `no_hp_siswa`, `ayah_siswa`, `agama_siswa`, `jk_siswa`, `ibu_siswa`) VALUES
(9, 38, 1, 'ALYA ALISKA', '0042143501', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(11, 40, 1, 'ANDI NUR FIRDA', '0039125203', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(13, 42, 1, 'BAHRIANI', '0037977417', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(14, 43, 1, 'FAIZ\'UR RAHMAN IMRAN', '0032348739', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(27, 56, 1, 'FITRIYANTI', '0045512839', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(31, 60, 1, 'NURAFNI', '0050554485', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(34, 63, 1, 'RISNA', '0043437430', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(39, 68, 1, 'ZULFATHUR AR', '0031169958', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(43, 72, 2, 'DHIYAA UL HAQ M.SHADIQ', '0033080326', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(46, 75, 2, 'EVANS PUTRA HENRY', '0035952060', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(54, 83, 2, 'MOH. RAIHAN ZAKY H.PUTRA', '0037800211', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(55, 84, 2, 'MUH. AL HARITSA', '0042372702', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(58, 87, 2, 'MUH. RENALDI', '0048841329', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(61, 90, 2, 'NUR FAISAL', '0041653976', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(62, 91, 2, 'NUR IKHSAN RAMADHAN', '0025663176', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(64, 93, 2, 'NURFADILAH SYAM', '0049800027', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(75, 104, 3, 'AMANDA SAKINA', '0038584927', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(85, 114, 3, 'JUAN DELON BIDANG', '0053786873', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(89, 118, 3, 'MUHAMAD NOVAL KURNIAWAN', '0039106086', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(91, 120, 3, 'MUSTAKIN', '0042499243', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(99, 128, 3, 'SITI ULWIYAH', '0047653980', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(101, 130, 3, 'TIARA', '0049214852', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(108, 166, 4, 'BASO RIZKY AMANDA', '0040691397', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(109, 167, 4, 'ARFANI', '0041534330', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(110, 168, 4, 'FERI AWAL', '0041592657', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(111, 169, 4, 'WAHYUNI', '0045216968', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(112, 170, 4, 'ULUL AMRI', '0042053203', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(113, 171, 4, 'RISKA AMELIA', '0059117364', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(114, 172, 4, 'NATASYA NUR ZAKINAH', '0032469005', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(115, 173, 4, 'ST HADIJAH', '0044162255', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(116, 174, 1, 'Siswa', '0123456789', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(118, 214, 18, 'AKBAR SALAM', '0035838165', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(119, 215, 18, 'ALIFIAH FEBRIANTI FATTA', '0031256942', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(120, 216, 19, 'AGUSTINA', '0032322896', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(121, 217, 19, 'MUHAMMAD AZHAR', '0032925674', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(122, 218, 20, 'ASTRIANI', '0023129530', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(123, 219, 20, 'ELSA DHEA ADELIAH', '0030612131', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(124, 220, 21, 'KHAERIL ANWAR', '0040071888', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(125, 221, 21, 'IRNAWATI', '0035129111', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(126, 222, 22, 'AGUNG WIJAYA', '0059527889', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(127, 223, 22, 'FAHMI ALI', '0026932975', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(128, 224, 23, 'HERIYANTO', '0025436865', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(129, 225, 23, 'ILHAM', '0025436863', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(130, 226, 24, 'HUMAIRA AINUN ADILA', '0033273261', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(131, 227, 24, 'MUH. YUSUF', '0038680778', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(132, 231, 25, 'ASRA SARI', '0022359549', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(133, 232, 25, 'HAMSAH', '0022047924', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(134, 233, 26, 'NUR CAHYA', '0020814169', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(135, 234, 26, 'NURSUCI ANGGRAENI', '0022358624', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(136, 235, 27, 'REZA UTAMA', '0022359520', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(137, 236, 27, 'RISNAWATI', '0022473166', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(138, 237, 28, 'FAIKWAN SYAPUTRA', '0021599156', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(139, 238, 28, 'FEBRI ERLANGGA', '0022358607', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(140, 239, 29, 'MUH. NUR FAJRIN SYAFRI', '0022359907', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(141, 240, 29, 'MUH. TAKWIN', '0033041950', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(142, 241, 30, 'FITRA WANSA', '0014870634', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(143, 242, 30, 'HAERUL', '0013249131', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(144, 243, 31, 'ANDI AGUNG ANANDA FEBRIAN', '0020912389', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(145, 244, 31, 'ARDIANSYAH KARIM', '0022178551', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(146, 245, 10, 'ADRIAN', '0043914245', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(147, 246, 10, 'ALRIANI', '0035255124', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(148, 247, 13, 'AHMAD MAULANA KURNIAWAN', '0045313917', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(149, 248, 13, 'AKILA SAFITRI', '0039511781', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(150, 249, 14, 'ALIYYAH WARDAH', '0042806454', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(151, 250, 14, 'ARYA SAPUTRA', '0034816512', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(152, 251, 15, 'ANWAR', '0050496166', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(153, 252, 15, 'ANITA NATALIA', '0052748555', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(154, 253, 16, 'ARJUN ARSYAD', '0033769589', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(155, 254, 16, 'AQRA MUNISA', '0033512271', '', '0000-00-00', '', 0, '', '', 'Perempuan', ''),
(156, 255, 17, 'ANDIKA PUTRA', '0044453465', '', '0000-00-00', '', 0, '', '', 'Laki-laki', ''),
(157, 256, 17, 'ABDI NUGRAHA', '0032764920', '', '0000-00-00', '', 0, '', '', 'Laki-laki', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_akses`
--

CREATE TABLE `tabel_akses` (
  `id_akses` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_akses`
--

INSERT INTO `tabel_akses` (`id_akses`, `id_profil`, `id_menu`) VALUES
(1, 1, 1),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(11, 2, 1),
(12, 3, 1),
(13, 1, 6),
(14, 1, 7),
(15, 1, 8),
(16, 1, 10),
(17, 1, 9),
(18, 1, 12),
(19, 1, 11),
(20, 1, 13),
(22, 3, 13),
(23, 2, 10),
(24, 2, 6),
(25, 2, 7),
(26, 2, 9),
(27, 2, 13),
(28, 2, 12),
(30, 3, 14),
(31, 2, 14),
(32, 3, 9),
(33, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `dropdown` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `aktif` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id_menu`, `menu`, `url`, `icon`, `dropdown`, `urutan`, `aktif`) VALUES
(1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 0, 1, 'Yes'),
(2, 'Manajemen User', '#', 'fas fa-fw fa-user', 0, 2, 'Yes'),
(3, 'Menu', 'menu', '', 2, 1, 'Yes'),
(4, 'Profil', 'profil', '', 2, 1, 'Yes'),
(5, 'User', 'user', '', 2, 2, 'Yes'),
(6, 'Mata Pelajaran', 'mapel', 'fas fa-fw fa-book', 0, 4, 'Yes'),
(7, 'Kelas', 'kelas', 'fas fa-fw fa-chalkboard-teacher', 0, 5, 'Yes'),
(9, 'Daftar hadir', 'absensi', 'fas fa-fw fa-book-reader', 0, 6, 'Yes'),
(10, 'Siswa', 'siswa', 'fas fa-fw fa-users', 0, 3, 'Yes'),
(12, 'Guru', 'guru', 'fas fa-fw fa-chalkboard-teacher', 0, 8, 'Yes'),
(13, 'Nilai', 'nilai', 'fas fa-fw fa-check-double', 0, 7, 'Yes'),
(14, 'Kotak Saran', 'saran', 'fa fa-inbox', 0, 8, 'Yes'),
(15, 'Wali Kelas', 'walikelas', 'fas fa-fw fa-award', 0, 9, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_profil`
--

CREATE TABLE `tabel_profil` (
  `id_profil` int(11) NOT NULL,
  `profil` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_profil`
--

INSERT INTO `tabel_profil` (`id_profil`, `profil`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `aktif` varchar(3) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `id_profil`, `username`, `password`, `nama_user`, `aktif`, `foto`) VALUES
(3, 1, 'admin', '$2y$10$.spE4adG8lqr9bgd3SOcMulH9IVqShJt/Z.WkcvgRkw8HhlvERf0a', 'Admin', 'Yes', '559dce7fd312bc806ccd9b47f5462b04.jpg'),
(14, 3, '1234567', '$2y$10$j7CqK17zNwnw2wQvUgkcyeZv/hIyBMgiDFtIBwJPjv01rGetmxPgK', 'ACHMAD YUSUF KHAERULLAH', 'Yes', ''),
(16, 2, '197206011998032005', '$2y$10$TCTAXAtRNrFlBVWe5uF3f.lKOirwPrxGsSsN4J9SBRvNnf7fZ38Uq', 'RAHMAWATI', 'Yes', ''),
(17, 2, '1972060119980320056', '$2y$10$/gdK9HixyB1mqLxOhx0bs.aN664TZUkTlq.N7WljJRwg0gPlqHWS.', 'RAHMAWATI', 'Yes', ''),
(19, 3, '8000123', '$2y$10$73jXDuFGvne65BlzXXxpJOTv30EQTcXSWv7AR8E6E9Fi8aOBKgqDm', '', 'Yes', ''),
(22, 2, '196103151987031012', '$2y$10$EAJmHCbTKF7tbiJ8a3MhsOQr7M4/a4GSOGxiHicaQeL14fOSuXy8W', 'RAHMAWATI', 'Yes', ''),
(26, 2, 'fajarrewa@gmail.com', '$2y$10$ZM00l53F5DqguJxsNezvfu08aPK0FYhF02WYePr0uD5IiGpEQ2/7.', 'ABDUL FAJAR', 'Yes', ''),
(30, 2, '197605152007011014', '$2y$10$B.Ns5tbwk/BDpECHQLY2YempReFubLjNTzkB6SU9TNcQm61/3CJ6q', 'syaifuddin', 'Yes', ''),
(38, 3, '0042143501', '$2y$10$F.CNfaaWY2EpR1Y13UaQXuWTP9lMhuliEVlx/fNb.g/roIDKAAt1C', 'ALYA ALISKA', 'Yes', ''),
(40, 3, '0039125203', '$2y$10$kASaD.BiL21i8Pr7AFDd7.VWskrAaO4U3HlJbQ.L66x7vid23a/ku', 'ANDI NUR FIRDA', 'Yes', ''),
(42, 3, '0037977417', '$2y$10$RD8hlTItEpYmGKEW9ifwMeuKKBd7h9O19SXvIOALWTyNWjyrboiAW', 'BAHRIANI', 'Yes', ''),
(43, 3, '0032348739', '$2y$10$Elp5/kDShphrWxuP7rr.feLNbc4E5vbenIFxv6EzeMCuOpr7fqxvu', 'FAIZ\'UR RAHMAN IMRAN', 'Yes', ''),
(56, 3, '0045512839', '$2y$10$AU7D12NV8QLXiui1r7Fle.ohLJXeyE46onnoJRDPKQ7TRrP5Iq.GW', 'FITRIYANTI', 'Yes', ''),
(60, 3, '0050554485', '$2y$10$p4q8lVoOiC1/40AZ5Pe9h.36UsJvCMVi/9CcdRyI9G8Dy0WgJacPO', 'NURAFNI', 'Yes', ''),
(63, 3, '0043437430', '$2y$10$yq38HlXSaipmMsH8pnmdmuUlyevepYyzqXghZ0eKYjgbR.Q9CCfzK', 'RISNA', 'Yes', ''),
(68, 3, '0031169958', '$2y$10$duo5tYtLquCouHAzy9wYEO6RRJg7ROYsgTZQMO9FStHGByX8XroYq', 'ZULFATHUR AR', 'Yes', ''),
(72, 3, '0033080326', '$2y$10$tIUQeruJI.522UzkXJO9eeMyxNUN07a9TOXkMzMiYt.kt9PBp/6FS', 'DHIYAA UL HAQ M.SHADIQ', 'Yes', ''),
(75, 3, '0035952060', '$2y$10$UTQbvMlsLCF2ViXH1thxNuCmkzcd.9LdLoVDlNeKYF0dRTuUTdz9G', 'EVANS PUTRA HENRY', 'Yes', ''),
(83, 3, '0037800211', '$2y$10$o91X8EkH2fbWzK0ZW/akV.AAu3m.dIOzQXXrzIfXzPEUq8Tmhc.SO', 'MOH. RAIHAN ZAKY H.PUTRA', 'Yes', ''),
(84, 3, '0042372702', '$2y$10$uhLbxVLb4CxFnJPxLl3fOO1YDHdvjcy4TFe1.ExWfkzB8HrjwEVoa', 'MUH. AL HARITSA', 'Yes', ''),
(87, 3, '0048841329', '$2y$10$7RENxIva/OowL45/OTMwYe1Dle6YcPaIjqUg.1Ox4IUudgfR2GMk.', 'MUH. RENALDI', 'Yes', ''),
(90, 3, '0041653976', '$2y$10$eWLrhlJ6jY.lcs/9kC6IqOgV6uNTU7wTwCkCblvwbqLghSUSah0UW', 'NUR FAISAL', 'Yes', ''),
(91, 3, '0025663176', '$2y$10$H/oGbrqaUKlIfh4GJF4tpOemAlrbVtPMVJjGFLBs8FmE3TyouY3lu', 'NUR IKHSAN RAMADHAN', 'Yes', ''),
(93, 3, '0049800027', '$2y$10$HZ7/j0sqjC4KIwOeOUxrFuBqC3Ik9uwdaNIcYDBoFfz9gGqMXaMs.', 'NURFADILAH SYAM', 'Yes', ''),
(104, 3, '0038584927', '$2y$10$zE1ZPp/YcqZ50NUW49mXHui1NE460n6AW5T24CN/seX9TUZWuAHne', 'AMANDA SAKINA', 'Yes', ''),
(114, 3, '0053786873', '$2y$10$2EU/C6qcv5kwSL97mN88DeQuwNUlFeZgPgeoMLcJ6nkfq7EhKnkle', 'JUAN DELON BIDANG', 'Yes', ''),
(118, 3, '0039106086', '$2y$10$m1.ef3F1Z.4ciN3y/Jy8xOv5U8VRGfZjt9jZdmSZz1JapbJ9eUk4O', 'MUHAMAD NOVAL KURNIAWAN', 'Yes', ''),
(120, 3, '0042499243', '$2y$10$TmjFe5LDMyx5MJELKyDQt.TbCn4DSBwkfukyVfpg32.U2vMH6zQ2S', 'MUSTAKIN', 'Yes', ''),
(128, 3, '0047653980', '$2y$10$NQx4A4oKpEKaIJqufPWkdO5YgI3ZZNdH4BigqzRbiK4OWoUptbCPC', 'SITI ULWIYAH', 'Yes', ''),
(130, 3, '0049214852', '$2y$10$acx9mTijjScxBpH6STI5e.0oNUkVC8YrCunUmdPtyE5u3pGeNRmPy', 'TIARA', 'Yes', ''),
(139, 2, '14051978', '$2y$10$p3ElFgtDNfSZGSwIOeeZouBDgJkzEqb4MBeykZW3LtlIiEON9nInq', 'Fhasra Akhmad Akbar', 'Yes', ''),
(141, 2, '08061983', '$2y$10$cQUroeHJQcFZvv1Px/bDY.W1oodKMDy7Gt795kP2rcwfDtWrjAs9K', 'Nurkamri', 'Yes', ''),
(142, 2, '05031978', '$2y$10$Ov0GBZdRlw2d4cyyzu8oLebpRlmAiSWcBHSsJg9/8RDe8n.K/Q1/a', 'Murni', 'Yes', ''),
(143, 2, '07061975', '$2y$10$t/usK89TBWfcsDbUV.CcWuULirEQmb8Es9ofBsOORAen6rFSMKHV.', 'Nurhaedah', 'Yes', ''),
(144, 2, '12021988', '$2y$10$H.LiHz6rrN/.EYweFHCmiuNyiu8Gg.9nLNPFBHas8CZjEef.bkwOa', 'Nursyamsi', 'Yes', ''),
(145, 2, '23021992', '$2y$10$1Xp1OD5fwA3FvqHqOAU6meYhwJjgUGyzfhsRO4WHCam7EyBhi1uim', 'Ichsani Taqwin Ibnu', 'Yes', ''),
(146, 2, '18061982', '$2y$10$EAVYWD8sWjWhujousoaYdelWelOkM1UTWgC9GxX72vTEuJ7C8dqh2', 'Muhammad Idris', 'Yes', ''),
(147, 2, '02071975', '$2y$10$lkVrQQtnPo/XzUGGe19syuKexBgSo10SslaE6MjYKIFz76665E3aq', 'Andi Sitti Rasiah', 'Yes', ''),
(148, 2, '17011981', '$2y$10$sRw.WJGS4vCeRsU62q1.4uz58RCartRzMWI3Q.ZK2z2uQkozvRnHq', 'Anita', 'Yes', ''),
(149, 2, '16021974', '$2y$10$E53wF0luNJhtkdMIJTGKvu7Te3bgSYjGIC1PH8tmMFnbKBsmISex.', 'Fatmah Daeng Ngai', 'Yes', ''),
(150, 2, '14061987', '$2y$10$EFlJzEe.ZCHlaDxatyVlduORI8CyEm/8kwU9KS05YQr278h1fkuHW', 'Herman. R', 'Yes', ''),
(151, 2, '20121968', '$2y$10$SBdvr5Y54.NHgDtg6yOag.Q6p0ewUE9XdhodC6I8jFwI/XlMJnpN2', 'Abdul Rachmat', 'Yes', ''),
(152, 2, '08031982', '$2y$10$v/nrlYb9elJpyMCGquCOMesM32f72ZKOHQA8WnY0HyfZiYFr9ZGDm', 'Ansar Lengu', 'Yes', ''),
(153, 2, '22111982', '$2y$10$xmm299SBRi3zEF.rrZfRIuXVeBVLajKnVxp1fxDOm7D1r0ckB0rhu', 'Ariani S.', 'Yes', ''),
(154, 2, '16061994', '$2y$10$7hq6m8/nEmTvL61ng4aj9.yk2iHAjTf8DLgnK8evOipXyxiVVLExO', 'Dewi Sari Ptasetya Putri Pongoh', 'Yes', ''),
(155, 2, '15101981', '$2y$10$qXveomdiZQLlWX1NKOTwXuyiNPPyv.yHAPvdWDxVJKYD0RdJ5AuTy', 'Nuraeni', 'Yes', ''),
(156, 2, '05111972', '$2y$10$euoEjle5UfV9GMjROcr.GuouSVgezbuLjHWIY156ME9ibPMtI4gk2', 'Nurdianah', 'Yes', ''),
(157, 2, '07101981', '$2y$10$KRXifovuB8mGbzRhuUq7w.s9ZIfjXMr2R4PvBKGL7Ud1pZ9vjOA9m', 'Nursanti', 'Yes', ''),
(158, 2, '18081970', '$2y$10$fX.WuBh3qWJcguymf8Xhhe8D8JBk8GS81gBKjtqlNJwcS9RK5S4Me', 'Umar', 'Yes', ''),
(159, 2, '23051994', '$2y$10$0huT7jCwD90kZo6tk9u0V.KiparaP4Zxqmk88Px2Mo1NSXz4KnHgq', 'Syamsinar', 'Yes', ''),
(160, 2, '08071986', '$2y$10$iDIkaSVvKouHBlTmx739tOyNad54xGfec7sW6OX0u2m3e08Qop8UG', 'Stephani Fransiska Pongoh', 'Yes', ''),
(161, 2, '21081981', '$2y$10$L026melwnQhtA/YUPmGIKuH5ViQXeBWFeRsm7dZF..qnfifixsnTO', 'Nasrah Yunus', 'Yes', ''),
(162, 2, '31121973', '$2y$10$XAVSB3zBCzr7YHGrtHZFuOA.oFAhaVzNGl859qUGQ7.kPSQcZpe2.', 'MUHAMMAD RIFAI', 'Yes', ''),
(163, 2, '26111994', '$2y$10$VewJGSmaB9OxtwsaP15zSuVdl.f3YpgDlp80RztTF2y3.m.N00f46', 'Nova Afriyanti', 'Yes', ''),
(164, 2, '13051973', '$2y$10$w829ttCD9/NzuXH2dxevJeJeVKZvsQku0E.snhU/i2rR1cCr0U0C.', 'Salmawati', 'Yes', ''),
(166, 3, '0040691397', '$2y$10$mw6mdGyzOO4jS64Eg5iJUOUcf5i/iq6JK8uTAeMmRUvHV1O2ZPex2', 'BASO RIZKY AMANDA', 'Yes', ''),
(167, 3, '0041534330', '$2y$10$EcTZzRMSp6RdVrvr7bqWu.NIVGeVxMaRWUkglpj//wE4yRR230UIq', 'ARFANI', 'Yes', ''),
(168, 3, '0041592657', '$2y$10$/So8ti0BhskU08WDsA83ZeAZKRqDeQ4rchrL65yBARSbp4jWRqB7O', 'FERI AWAL', 'Yes', ''),
(169, 3, '0045216968', '$2y$10$MeMCeiLiOtgwJTJWuYuggO0dQWWIpbzcxek3adVooKuUVXnvu09mm', 'WAHYUNI', 'Yes', ''),
(170, 3, '0042053203', '$2y$10$Sm5Yj4r7DnfUg.tJEwnD.ei2na0Vcadh3FUoLe5N9JoGOZvdJw35C', 'ULUL AMRI', 'Yes', ''),
(171, 3, '0059117364', '$2y$10$N8o7Lr8OBUtRmYQbMlQVtOvLn.37svxm/GxJTjmlnIjF0/iYEo7Jm', 'RISKA AMELIA', 'Yes', ''),
(172, 3, '0032469005', '$2y$10$uSrazSf7tD9LBkWX1BBEDeXwlfToq0eF1l34876v7Yui4IWagZ.0K', 'NATASYA NUR ZAKINAH', 'Yes', ''),
(173, 3, '0044162255', '$2y$10$zg4Ot1Mp30FEo2BVkQswqudLgD3LuXfupRZMvsb2xEsXo0T4hfbYG', 'ST HADIJAH', 'Yes', ''),
(174, 3, '0123456789', '$2y$10$79Yh8PCW62uTrEGktj9vauY/jirFBAkUeNlV8rFdwFKdz3UIKTuMm', 'Siswa', 'Yes', ''),
(175, 2, '1234567890', '$2y$10$/UGd3MyyvQc5DrLiSN..LOT9AOsDqXkI/iOS/JJAJvoX.VLt.4t7m', 'Guru', 'Yes', ''),
(177, 2, '01101976', '$2y$10$55xtC8oiK0hMPUuX5zDWPu5JfFWfh/VN0H3StrpzXa7HsngDc2Y86', 'Ihsan Indrawan Ibnu', 'Yes', ''),
(178, 2, '16011980', '$2y$10$foTrWoEVORGto4HmeCi3BuAEpK1dHzJyOWHceDDWeQlpWlM.YjbNi', 'Esri Inderawati', 'Yes', ''),
(179, 2, '13111982', '$2y$10$V4oSPWWGhw5Sxvmk.GzNMeTld8zCAvg7VPOXJAxR5p5vsfX749HuG', 'Faridawati', 'Yes', ''),
(180, 2, '26051985', '$2y$10$FuCS.jC.GPiiDqFDqb7MceGQxGpmfjczJ0SDbxdAll/D9zOkRLwtu', 'Sulastri Sasmita', 'Yes', ''),
(181, 2, '08081982', '$2y$10$VMq1dXgvDxEaV7M1IQO7XOcvvtby9UQaeSe/YjXV9KSbaYGKQ9X4W', 'Yanti Oktavia Vironika S', 'Yes', ''),
(182, 2, '07031968', '$2y$10$lr3.BQVV.i7aD21doAmRiu5iZlR2IQ6K0MhgsKXjHCkR5z2p/YzeO', 'Muhammad Kurnia Rahim', 'Yes', ''),
(183, 2, '01031975', '$2y$10$3v8Yott0swPaCVnb41fPTOSAGx1IFBOB2UQSxrE8XHSFEvYlQRBpe', 'Ibrahim', 'Yes', ''),
(184, 2, '07041977', '$2y$10$d.BiRGqD3lw4BfA0puW35eOA6hqxpo88ZULE4BqgGZGzkM2Cb7px2', 'Ahmad Gunawan', 'Yes', ''),
(185, 2, '06061968', '$2y$10$TijE/9brt9BWugKf3O4hwuU6dS8Cqtj5/FB/fNswZcaPENq8aUku6', 'Nasibah', 'Yes', ''),
(186, 2, '31121964', '$2y$10$wrbMWMl2Xlqf9KEAAALDROmDO3b2sRzZsYrsXwUKrHf/Y93C6G/gy', 'Muh. Syahrir', 'Yes', ''),
(187, 2, '16071977', '$2y$10$8DQNaaZYugnqg7.KgIgj1.0soTX7mfYffioUZv.nOnyRt99fmFySG', 'Yuliaty', 'Yes', ''),
(188, 2, '08061968', '$2y$10$WGsy3fs8X4QPu1x3idBixuY4DA11JtEmZ/eerBocB4DRcEcND4YB.', 'Rafiuddin', 'Yes', ''),
(189, 2, '03091972', '$2y$10$NosXPWBm2GfSXK/SmZL.zuyvFTSi0diVKi3AfYA5tnmPFp2Hw8WxK', 'Rusniah', 'Yes', ''),
(190, 2, '22071966', '$2y$10$I5nEbrjcQWcEfcxkL.VBPuWfL5snuZG.AP6nkcC0CcSxbIqXI5w9m', 'Ahmad Yani', 'Yes', ''),
(191, 2, '15061975', '$2y$10$GgbNEV3sO.77rIhQGBARwekbEgAqzLjwzhhYRrIF2jo2x3s4RkJ9G', 'Dangan', 'Yes', ''),
(192, 2, '15051976', '$2y$10$cDqontKaMsEkDLHwbxRdy.C2vUr5haiVNLK4KAmfbSprnwwTkvUm.', 'Syafiuddin', 'Yes', ''),
(193, 2, '22061967', '$2y$10$N6/hIX9faWZJhRQZxSFmW.2huC7kmezcVYRwfkwWbjinNnHs2sl22', 'Rahmi', 'Yes', ''),
(194, 2, '31071985', '$2y$10$B9YZnJWAJiYEoWsH38vDAOd9tLErX99C.rKHGkIzahAcKr6QjEpHC', 'Ratnawiyah', 'Yes', ''),
(195, 2, '02021962', '$2y$10$xGA370euKtHOP1cUJGUMnOYfYBPEQBn0V6vLBVYwWf5xtE6WUYEBu', 'Muh. Asri Armin', 'Yes', ''),
(196, 2, '19061967', '$2y$10$iTBCORrnMltZOLSlS5mSkebSPr63ZN19kF/jZM5l/3vNl88bESSqS', 'Hairuddin', 'Yes', ''),
(197, 2, '18031996', '$2y$10$EGGb11d6F9urNkyJgnT.Sua.702BY3FSXIHXH5lbGgYOoc/hnECZO', 'DHIAZ MAHARANI SANTOSA', 'Yes', ''),
(198, 2, '10081995', '$2y$10$hdyHAshyVcjyF.ghfpdpPufkYpbdgC43XV.ZhrEJmDOlJ6K3RGe0.', 'Hizbi Fauzi', 'Yes', ''),
(199, 2, '15031961', '$2y$10$A2k4I4iIxsNck6o3Fmc4I.nAcQNAA9a8EH8mLtCG5lCBuCCfyFLOC', 'Abd. Rakhman D.', 'Yes', ''),
(200, 2, '07081964', '$2y$10$yckTXfdKNyHr/58s.dN2qu6CDhhJA0efXUGcA74izh3BAEby/OnlC', 'Agus Samsuddin', 'Yes', ''),
(201, 2, '26011993', '$2y$10$34mkL8Cx794GtwQdoDXZq.e2ixf8wMwrm97MAUthXlD6/cmogCGn6', 'NUR SYAHIDA ARSY', 'Yes', ''),
(202, 2, '12111962', '$2y$10$uDJ8eOm7OBw4xRyIupuvzuUv.JqjC6xDwBFq9KS9wYOcRg.6hzRGC', 'Syamsul Kamar', 'Yes', ''),
(203, 2, '01081991', '$2y$10$7q7OSVOXxshpyLtBffvm4eusdlrjNaswCYtxMAH7c2kY//YDqjPGe', 'Abu Rizal', 'Yes', ''),
(204, 2, '30061985', '$2y$10$vtHhux5CKcBBfmHT3DL54.9.V/8w0.gkK01p9TnDF4BhPLWKL9bnG', 'Asmawati', 'Yes', ''),
(205, 2, '29091989', '$2y$10$Dw2p15nbdv6vki4rcdjwuexoAujoRIkxI5XJ0/XxehiCgTMbCKd5K', 'Mukhtar Husain', 'Yes', ''),
(206, 2, '26121982', '$2y$10$W7ZiOdCIFZ8QgDrdue40W.xS6yVAjsW7bYgMarNUk1YdRcoX0V4aq', 'Indah Herawaty', 'Yes', ''),
(207, 2, '19011974', '$2y$10$93QnPbBx9rgFkyc9Kyq9Du0eVC00jsI700Y7xTE4YK.KSuPFUOPcC', 'Abdul Khalik', 'Yes', ''),
(208, 2, '22091969', '$2y$10$kpBeHDLe7nCTe6dSHVEtVeGUZ3Z4oW5rAU1xWpbKIHqzuDlcFTXLi', 'Insana', 'Yes', ''),
(209, 2, '13081968', '$2y$10$/KcHcrTU.BjBkeWV9tXLQetQwcttSnB8pVFBqAAvvlDjkyHbphqgm', 'Iskandar Linta Tune', 'Yes', ''),
(210, 2, '04051993', '$2y$10$j9sT/EasCZTT6q00ikmQTu6p7CM6mtyhi9T.2lGW.R4YsbP35Wtsq', 'IRPAN', 'Yes', ''),
(214, 3, '0035838165', '$2y$10$xb.0tb.Fu2/Z5hlsqrjOTOitWICkSM1Fm9n0WQWX7EAJeBhgY1Siu', 'AKBAR SALAM', 'Yes', ''),
(215, 3, '0031256942', '$2y$10$KNbNGmy2.Ds/MPapIty1R.5MDziblay3uPx017qulQMZfoNawwJla', 'ALIFIAH FEBRIANTI FATTA', 'Yes', ''),
(216, 3, '0032322896', '$2y$10$2f.j.yfJVYPaTg7RHD92OuG1R2e1HGmDzJLevMeGGx8O1YploytmK', 'AGUSTINA', 'Yes', ''),
(217, 3, '0032925674', '$2y$10$jLK9M5zpnYMCMEzIGmDH3uTLXh8YehRqdRlLrJEoB2GZMLLweCNtG', 'MUHAMMAD AZHAR', 'Yes', ''),
(218, 3, '0023129530', '$2y$10$/pitQpn7lvyoGtyV0A2NkOisYopHFFRBLKSVJnKKovD.r9O6aHPtq', 'ASTRIANI', 'Yes', ''),
(219, 3, '0030612131', '$2y$10$oHGmApxJt.yuoEoar3BV9.5GSialUKckNcEQHnF5eSDfhChb/hEd.', 'ELSA DHEA ADELIAH', 'Yes', ''),
(220, 3, '0040071888', '$2y$10$ljDGdQSOnyPOMwT5uEO/getPzdTV1wF6YxrOS8s8llzcf2uc2paai', 'KHAERIL ANWAR', 'Yes', ''),
(221, 3, '0035129111', '$2y$10$iFh1GsURYRh9OUr43nMvBuQrk38OiwltPSNhiQBkmbbFCpsUUfT76', 'IRNAWATI', 'Yes', ''),
(222, 3, '0059527889', '$2y$10$EA7gfHtxk86R5w2skBxwletVkLTHxEcZYCvCDCw9B/0ottSodaiwK', 'AGUNG WIJAYA', 'Yes', ''),
(223, 3, '0026932975', '$2y$10$k26PJqAerGNBPNenYzfxluSYpHp6mzajINZPDUqnmN2k4kvOCbAN.', 'FAHMI ALI', 'Yes', ''),
(224, 3, '0025436865', '$2y$10$FBzI6iKvVylv0hB4O7ZxVu.qb0Yod5xmn87XjjFeGjMCDzWrgDFqy', 'HERIYANTO', 'Yes', ''),
(225, 3, '0025436863', '$2y$10$NztHm6LE3oOK93tmcSzOC.GiokudfNX.N9LHuNKGg/5DyvY7.I71W', 'ILHAM', 'Yes', ''),
(226, 3, '0033273261', '$2y$10$MIlC7QSM26Cj.cupSXWDTete7c.WCfgKIdaz2Zw2sbuh7TXl1V3Ea', 'HUMAIRA AINUN ADILA', 'Yes', ''),
(227, 3, '0038680778', '$2y$10$d7iQlcI.uVMK120RXSx3s.9nLyR1R7SaEhWV0tL5Lh7KLnSbpELkO', 'MUH. YUSUF', 'Yes', ''),
(228, 2, '24041993', '$2y$10$06uLMtQNlIzAwDVSu39zA.YHf8CHnWZWVcoh/JXW.KKs6cq/SbwD.', 'Nur Rahmah', 'Yes', ''),
(231, 3, '0022359549', '$2y$10$.2.S3MkSf5QGc6DHX2TYe.ipEnIn59D74oqFumNrSdP.Z2mda4one', 'ASRA SARI', 'Yes', ''),
(232, 3, '0022047924', '$2y$10$Vs7VnkRRpWnyxbOWMi4RoujrKbEWmfn7/KNgEak.O9eBH9CZUKwnm', 'HAMSAH', 'Yes', ''),
(233, 3, '0020814169', '$2y$10$zq4RvrgsAGa27kzS3zzWsuwxm7XU6qjzfxCLRFJ7panWmuqeu5y2K', 'NUR CAHYA', 'Yes', ''),
(234, 3, '0022358624', '$2y$10$gnPj2gQpQysqVdx8pscvY.Ez5hZvyl2CwK93RNq9XH.rIwMOGMtX2', 'NURSUCI ANGGRAENI', 'Yes', ''),
(235, 3, '0022359520', '$2y$10$RWMcAzVvCzZFdw0.Hnn9Mu8ILzaSYWOHqdi37G0l6fTcBvRN5oFoK', 'REZA UTAMA', 'Yes', ''),
(236, 3, '0022473166', '$2y$10$0./f/c9mlv1/Qe43oDx.LOp9ROxMQkitNEuNMw73/Bb1z.6YZBAlS', 'RISNAWATI', 'Yes', ''),
(237, 3, '0021599156', '$2y$10$mVsxCS8d5pulh2bYlasDJuKiYc42yr6.mxHv8p7pZ6nnXJNxF3ieO', 'FAIKWAN SYAPUTRA', 'Yes', ''),
(238, 3, '0022358607', '$2y$10$FT7vl/eZJo1yb7sVLGyVpOjFFm/xu7g6Sv03vnZo3BLvJ1m/nH/R2', 'FEBRI ERLANGGA', 'Yes', ''),
(239, 3, '0022359907', '$2y$10$72AxZSoY3Bwbu1igF.Tg4OGWgDIfole6pK9BGhHzfTYU9p1PJq9.m', 'MUH. NUR FAJRIN SYAFRI', 'Yes', ''),
(240, 3, '0033041950', '$2y$10$tFAZikdQcUJjO1meZsigt.GtXBVPD8Htj5a4VBROpfEpF8ujCDxJq', 'MUH. TAKWIN', 'Yes', ''),
(241, 3, '0014870634', '$2y$10$nIw8RPpN8sEN34tTVOUHDezpSxPuRIpBfwefgz7kPmlvsSg.jKTGy', 'FITRA WANSA', 'Yes', ''),
(242, 3, '0013249131', '$2y$10$MLIR1bVC/D6x/8x1Loktgu4befxba6zdvShzibI6SLMW7M.S07SeO', 'HAERUL', 'Yes', ''),
(243, 3, '0020912389', '$2y$10$tI8a3q2iyb6uv6epKa3eR.fuzQLJBw4nThQQ7EnPAZ2expylRoIaC', 'ANDI AGUNG ANANDA FEBRIAN', 'Yes', ''),
(244, 3, '0022178551', '$2y$10$UWBsmG6B30.DOJVNYPgw5eIpbU3q720/zIyJhY.4nPczj3f3G0dHu', 'ARDIANSYAH KARIM', 'Yes', ''),
(245, 3, '0043914245', '$2y$10$S2110HEimZljZMg8HeOh5OSsEOKvZMItR/Orw7uJqZzqVvWSK8k3i', 'ADRIAN', 'Yes', ''),
(246, 3, '0035255124', '$2y$10$FDPav6ACK1mm17.GwJrfaO8CSuuwpZmqt26srm3shQo5aubU9J13a', 'ALRIANI', 'Yes', ''),
(247, 3, '0045313917', '$2y$10$ryoDpHWFjb3hrM.76CbNgeihCB8x7raJFDt7clNYJeH27YVBsgRr6', 'AHMAD MAULANA KURNIAWAN', 'Yes', ''),
(248, 3, '0039511781', '$2y$10$T2bc0rNGK7HjIFitC0vOt.rleCP4.7VIojVBI3LRfYJOskGabHH.e', 'AKILA SAFITRI', 'Yes', ''),
(249, 3, '0042806454', '$2y$10$kOFtyX3hCKK71yAIBJ0xdOBtlknq/fzPkXUq6LmwxcBIVC1jw8.Re', 'ALIYYAH WARDAH', 'Yes', ''),
(250, 3, '0034816512', '$2y$10$EWbRzohdiGGz4u4zdZH.T.y4KDbkZrTHxcugDcanFf/gwN3xFs8EO', 'ARYA SAPUTRA', 'Yes', ''),
(251, 3, '0050496166', '$2y$10$2PhC7G2vVU6ubmIxKLltQe7g4SULt0v3IPV.1Q7IJw3VntG0U0niu', 'ANWAR', 'Yes', ''),
(252, 3, '0052748555', '$2y$10$mi3qN2VXiZKkjrUteR1m6elrF8VB0TOpm.xnLV1.DlMavalVloiLu', 'ANITA NATALIA', 'Yes', ''),
(253, 3, '0033769589', '$2y$10$qy23RjFAXVF5tY2ynNeRuOAThel4nx9DrVz1YYKozIQdTumo8h5va', 'ARJUN ARSYAD', 'Yes', ''),
(254, 3, '0033512271', '$2y$10$2ZvhTi5nmb4OPKRXh9IjcuWYoGsLf0VJOnXcqcj3xhiMY9YFPrWeS', 'AQRA MUNISA', 'Yes', ''),
(255, 3, '0044453465', '$2y$10$HNMIUyqjy/K0m82KCiOYc.bNiaW.vlbeJ/V7efe2YSzeTfpxX5/y6', 'ANDIKA PUTRA', 'Yes', ''),
(256, 3, '0032764920', '$2y$10$Yt6.cpmdc3E7.YkuZezQe.nTaS930jiNAFb5d/IajADpKnThU27Hm', 'ABDI NUGRAHA', 'Yes', ''),
(257, 2, '7744762663300082', '$2y$10$MXRT8JUSq.Bsi5I9TRCWWuQEIN4VbJ3tERrFRXPccBcHROGyeYxC.', 'Fitryani Syafar', 'Yes', ''),
(258, 2, '6835762663300072', '$2y$10$xSmdg.OMZLlVeNw2fASzIuX26HjbDJ6oBeVmMw7GDkwqTUZDiRZ4S', 'Hudayanti Kadir', 'Yes', ''),
(259, 2, '1842753654300002', '$2y$10$zDLuKCswedZebgSHCbKqd.X12njVSdPNOJ7OUNcieK4eT07q5egy2', 'Yuliani', 'Yes', ''),
(260, 2, '6948748650130132', '$2y$10$Rz.LtKZy0gus5DmxvJT6e.ZyOgnSMTJWCY53vEP15PSZs0wgB9se2', 'Samriati', 'Yes', ''),
(261, 2, '4563748650200413', '$2y$10$Pewa67jp98qv/O6nkI/sUuO4Za8fybQud5sS116B9Hbrc8DXD9wMW', 'Suparman', 'Yes', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD UNIQUE KEY `nama_mapel` (`nama_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `nis_siswa` (`nis_siswa`);

--
-- Indexes for table `tabel_akses`
--
ALTER TABLE `tabel_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tabel_profil`
--
ALTER TABLE `tabel_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `tabel_akses`
--
ALTER TABLE `tabel_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_profil`
--
ALTER TABLE `tabel_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
