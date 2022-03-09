-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 10:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp3_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` tinyint(4) NOT NULL,
  `ta` tinyint(4) DEFAULT NULL,
  `modul` varchar(100) DEFAULT NULL,
  `fakultas` tinyint(4) NOT NULL,
  `prodi` tinyint(4) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `kode_mk` varchar(30) NOT NULL,
  `kode_dokumen` varchar(30) NOT NULL,
  `penyusun` smallint(100) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `jenis`, `ta`, `modul`, `fakultas`, `prodi`, `mk`, `kode_mk`, `kode_dokumen`, `penyusun`, `tanggal`) VALUES
(1, 0, 2, '', 7, 54, 'PRAKTIK KLINIK KEPERAWATAN JIWA', 'MJU.KEP-47', '00802 13048', 2, '2022-02-23'),
(2, 0, 2, '', 7, 54, 'KEPERAWATAN JIWA', 'MJU.KEP-29', '00802 13032', 2, '2022-02-23'),
(3, 0, 2, '', 7, 54, 'FARMAKOLOGI', 'MU-015', '00802 13015', 3, '2022-02-22'),
(4, 0, 2, '', 7, 54, 'GIZI & DIIT', 'MJU.KEP-09', '00802 13013', 4, '2022-02-22'),
(5, 0, 2, '', 7, 51, 'SKRIPSI', 'MJU-12', '00801 13056', 5, '2022-02-21'),
(6, 0, 2, '', 7, 51, 'EVIDENCE BASED NURSING', 'MJU-IKEP', '-', 6, '2022-02-24'),
(7, 0, 2, '', 7, 51, 'KEPERAWATAN MENJELANG AJAL DAN PALIATIF', 'MJU.IKEP-26', '00801 13146', 7, '2022-02-23'),
(8, 0, 2, '', 7, 51, 'BIOSTATISTIK', 'MJU.IKEP-23', '00801 13080', 8, '2022-02-25'),
(9, 0, 2, '', 7, 51, 'KEPERAWATAN KELUARGA', 'MJU.60-12', '00801 13042', 9, '2022-02-24'),
(10, 0, 2, '', 7, 54, 'KEPERAWATAN MEDIKAL BEDAH II', 'MU 026', '00802 13028', 10, '2022-02-24'),
(11, 0, 1, '', 4, 33, 'DASAR-DASAR ILMU KOMUNIKASI', 'MJU.IK-002', '00502 16000', 11, '2022-02-25'),
(12, 0, 1, '', 4, 33, 'PERKEMBANGAN TEKNOLOGI KOMUNIKASI', 'MJU.IK-0009', '00502 13000', 12, '2022-02-25'),
(13, 0, 2, '', 1, 15, 'PRODUCTIVE SPEAKING', 'MJU.KIP.BING-020', '00201 13000', 13, '2022-03-02'),
(14, 0, 2, '', 7, 51, 'ISLAM DAN ILMU PENGETAHUAN', 'MJU-08', '00801 13025', 14, '2022-02-26'),
(15, 0, 2, '', 7, 51, 'KEWIRAUSAHAAN', 'MJU-08', '00801 13036', 14, '2022-02-26'),
(16, 0, 2, '', 7, 54, 'METODE PENELITIAN', 'MJU.KEP-49', '00801 13040', 8, '2022-02-25'),
(17, 0, 2, '', 7, 51, 'KEPERAWATAN KESEHATAN JIWA I', 'IKEP-13', '00801 13028', 15, '2022-03-02'),
(18, 0, 2, '', 7, 51, 'KEPERAWATAN KOMUNITAS II', 'MJU.IKEP-24', '00801 13043', 16, '2022-03-01'),
(19, 0, 2, '', 0, 10, 'HUKUM KEPAILITAN DAN PERADILAN NIAGA', 'HUM-045', '00100 12000', 17, '2022-03-02'),
(20, 0, 2, '', 0, 10, 'HUKUM INDUSTRI KEUANGAN', 'HUM-042', '00100 12000', 17, '2022-03-02'),
(21, 0, 2, '', 0, 10, 'HUKUM PERDATA', 'HUM-006', '00100 12000', 18, '2022-03-02'),
(22, 0, 2, '', 0, 10, 'PENALARAN HUKUM', 'HUM-022', '00100 12000', 19, '2022-03-02'),
(23, 0, 2, '', 0, 10, 'HUKUM ACARA PERDATA', 'HUM-017', '00100 12000', 20, '2022-03-04'),
(24, 0, 2, '', 7, 49, 'KEPERAWATAN ANAK', 'MJU-NERS-04', '00801 13060', 21, '2022-03-02'),
(25, 0, 2, '', 7, 54, 'KEPERAWATAN PROFESIONAL', 'MJU.KEP-018', '00802 13018', 21, '2022-03-02'),
(26, 0, 2, '', 7, 54, 'ANTROPOLOGI KESEHATAN', 'MJU.KEP-07', '00802 13012', 22, '2022-03-02'),
(27, 0, 2, '', 7, 54, 'KEPERAWATAN KOMUNITAS', 'KEP-34', '00802 13034', 16, '2022-03-02'),
(28, 0, 2, '', 7, 54, 'DOKUMENTASI KEPERAWATAN', 'KEP-21', '00802 13018', 1, '2022-03-02'),
(29, 0, 2, '', 0, 10, 'HUKUM ACARA PERADILAN AGAMA', 'HUM-023', '00100 12000', 23, '2022-03-02'),
(30, 0, 2, '', 0, 10, 'ALTERNATIF PENYELESAIAN SENGKETA', 'HUM-046', '00100 12000', 19, '2022-03-02'),
(31, 0, 2, '', 0, 10, 'HUKUM JAMINAN', 'HUM-043', '00100 12000', 17, '2022-03-02'),
(32, 0, 2, '', 0, 10, 'HUKUM PERTAHANAN', 'HUM-016', '00100 12000', 17, '2022-03-02'),
(33, 0, 2, '', 0, 10, 'HUKUM KONSTITUSI', 'HUM-041', '00100 12000', 24, '2022-03-04'),
(34, 0, 2, '', 0, 10, 'HUKUM KEWARGANEGARAAN DAN IMIGRASI', 'HUM-051', '00100 12000', 24, '2022-03-04'),
(35, 0, 2, '', 0, 10, 'HUKUM LINGKUNGAN', 'HUM-038', '00100 12000', 24, '2022-03-04'),
(36, 0, 2, '', 0, 10, 'HUKUM PIDANA', 'HUM-007', '00100 12000', 20, '2022-03-04'),
(37, 0, 2, '', 0, 10, 'HUKUM PIDANA KORPORASI', 'HUM-050', '00100 12000', 25, '2022-03-04'),
(38, 0, 2, '', 0, 10, 'HUKUM PEMILU', 'HUM-052', '00100 12000', 26, '2022-03-04'),
(39, 0, 2, '', 0, 10, 'HUKUM PIDANA MILITER', 'HUM-047', '-', 27, '2022-03-04'),
(40, 0, 2, '', 0, 10, 'TINDAK PIDANA EKONOMI', 'HUM-048', '-', 27, '2022-03-04'),
(41, 0, 2, '', 0, 10, 'HUKUM PIDANA KHUSUS', 'HUM-020', '00100 12000', 25, '2022-03-04'),
(42, 0, 2, '', 0, 10, 'HUKUM PERTANAHAN', 'HUM-016', '-', 28, '2022-03-04'),
(43, 0, 2, '', 0, 10, 'HUKUM PENDAFTARAN PERALIHAN HAK ATAS TANAH (PPHAT)', 'HUM-044', '-', 28, '2022-03-04'),
(44, 0, 2, '', 0, 10, 'HUKUM ACARA MAHKAMAH KONSTITUSI (MK)', 'HUM-039', '00100 12000', 29, '2022-03-04'),
(45, 0, 2, '', 0, 10, 'HUKUM TATA NEGARA', 'HUM-008', '00100 12000', 26, '2022-03-04'),
(46, 1, 2, 'KEPERAWATAN JIWA', 7, 54, 'KEPERAWATAN JIWA', 'MJU.KEP-29', '-', 2, '2022-03-07'),
(47, 0, 2, '', 2, 24, 'PENGETAHUAN BAHAN AGROINDUSTRI', 'MJU.TIP-201', '00303 16000', 30, '2022-03-07'),
(48, 0, 2, '', 2, 24, 'RISET OPERASIONAL', 'MJU.TIP-207', '00303 16000', 30, '2022-03-07'),
(49, 0, 2, '', 2, 24, 'TATA LETAK DAN PENANGANAN BAHAN', 'MJU.TIP-203', '00303 16000', 30, '2022-03-07'),
(50, 0, 2, '', 2, 24, 'MANAJEMEN SUMBER DAYA MANUSIA', 'MJU.TIP-204', '00303 16000', 30, '2022-03-07'),
(51, 0, 2, '', 2, 20, 'BIOKIMIA TANAMAN', 'MJU.AGT-113', '00301 16000 - 17', 31, '2022-03-07'),
(52, 0, 2, '', 0, 10, 'HUKUM ADAT', 'HUM-009', '00100 12000', 32, '2022-03-07'),
(53, 0, 2, '', 7, 54, 'KEPERAWATAN DASAR', 'MJU.KEP-17', '00801 13014', 5, '2022-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` smallint(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npk` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `npk`) VALUES
(1, 'Dr. NIKMATUR ROHMAH, S.Kep., Ns., M.Kes.', ''),
(2, 'Ns. MAD ZAINI, M.Kep., Sp.Kep.J.', ''),
(3, 'Ns. ELY RAHMATIKA NUGRAHANI, S.Kep., M.Kep.', ''),
(4, 'Ns. AYESIE NATASA ZULKA, S.Kep., M.Kep.', ''),
(5, 'Ns. SITI KHOLIFAH, M.Kep.', ''),
(6, 'Ns. AWATIFUL AZZA, M.Kep., Sp.Kep.Mat.', ''),
(7, 'Ns. DWI YUNITA HARYANTI, S.Kep., M.Kes.', ''),
(8, 'LUH TITI HANDAYANI, M.Kes', ''),
(9, 'Ns. CAHYA TRIBAGUS HIDAYAT., S.Kep., M.Kes.', ''),
(10, 'Ns. GINANJAR SASMITO ADI, M.Kep., Sp.Kep.M.B.', ''),
(11, 'Dr. JUARIYAH, M.Si.', ''),
(12, 'KUKUH PRIBADI, S.I.Kom., M.A.', ''),
(13, 'INDAH WERDININGSIH, M.Pd.', ''),
(14, 'Dr. WAHYUDI WIDODO, S.Kp., M.Ked.', ''),
(15, 'Ns. YENI SURYANINGSIH, S.Kep., M.Kep.', ''),
(16, 'Ns. SRI WAHYUNI A., M.Kep., Sp.Kep.Kom.', ''),
(17, 'YUNITA REYKASARI, SH., MH.', ''),
(18, 'SULISTIO ADIWINARTO, S.H., M.H.', ''),
(19, 'ARIS YUNI PAWESTRI, S.H., M.H.', ''),
(20, 'SUYATNA, S.H., M.Hum.', ''),
(21, 'Ns. ZUHROTUL EKA YULIS, S.Kep., M.Kes.', ''),
(22, 'Ns. DIAN RATNA ELMAGHFUROH, S.Kep., M.Kes.', ''),
(23, 'H.M. ALI LUTFI, S.H., M.Hum.', ''),
(24, 'ICHA CAHYANING FITRI, SH., MH.', ''),
(25, 'FINA ROSALINA, S.H., M.H.', ''),
(26, 'DJOKO PURWANTO, SH., M.Hum.', ''),
(27, 'Dr. HARI UTOMO, SH., M.H.', ''),
(28, 'DENYY MAY TIMOR, SH., MKn.', ''),
(29, 'AHMAD SURYONO, S.H., M.H.', ''),
(30, 'FITRIANA DINA RIZKINA, S.T.P., M.Sc.', ''),
(31, 'Ir. WIWIT WIDIARTI, MP.', ''),
(32, 'IGNEO GRANDI GLORIA, SH., M.H.', '');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` tinyint(4) NOT NULL,
  `fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `fakultas`) VALUES
(0, 'HUKUM'),
(1, 'KEGURUAN DAN ILMU PENDIDIKAN'),
(2, 'PERTANIAN'),
(3, 'EKONOMI'),
(4, 'ILMU SOSIAL DAN ILMU POLITIK'),
(5, 'TEKNIK'),
(6, 'PSIKOLOGI'),
(7, 'ILMU KESEHATAN'),
(8, 'AGAMA ISLAM'),
(9, 'EKONOMI PASCA');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` tinyint(4) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
(0, 'RPS'),
(1, 'MODUL'),
(2, 'BUKU AJAR'),
(3, 'PEDOMAN');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` tinyint(4) NOT NULL,
  `id_fakultas` tinyint(4) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_fakultas`, `prodi`) VALUES
(0, 0, '-'),
(1, 1, '-'),
(2, 2, '-'),
(3, 3, '-'),
(4, 4, '-'),
(5, 5, '-'),
(6, 6, '-'),
(7, 7, '-'),
(8, 8, '-'),
(9, 9, '-'),
(10, 0, 'ILMU HUKUM'),
(11, 0, 'ILMU HUKUM SORE'),
(12, 1, 'D2 PENDIDIKAN GURU TAMAN KANAK-KANAK'),
(13, 1, 'PENDIDIKAN BIOLOGI'),
(14, 1, 'PENDIDIKAN BAHASA DAN SASTRA INDONESIA'),
(15, 1, 'PENDIDIKAN BAHASA INGGRIS'),
(16, 1, 'PENDIDIKAN MATEMATIKA'),
(17, 1, 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI'),
(18, 1, 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI SORE'),
(19, 1, 'PENDIDIKAN OLAHRAGA'),
(20, 2, 'AGROTEKNOLOGI'),
(21, 2, 'AGROTEKNOLOGI SORE'),
(22, 2, 'AGRIBISNIS'),
(23, 2, 'AGRIBISNIS'),
(24, 2, 'TEKNOLOGI INDUSTRI PERTANIAN'),
(25, 3, 'MANAJEMEN'),
(26, 3, 'MANAJEMEN SORE'),
(27, 3, 'AKUNTANSI'),
(28, 3, 'AKUNTANSI SORE'),
(29, 4, 'D3 PERHOTELAN'),
(30, 4, 'D1 AKADEMI PARIWISATA'),
(31, 4, 'ILMU PEMERINTAHAN'),
(32, 4, 'ILMU PEMERINTAHAN (NON REGULER)'),
(33, 4, 'ILMU KOMUNIKASI'),
(34, 4, 'ILMU KOMUNIKASI (NON REGULER)'),
(35, 5, 'MANAJEMEN INFORMATIKA'),
(36, 5, 'MANAJEMEN INFORMATIKA SORE'),
(37, 5, 'TEKNIK SIPIL'),
(38, 5, 'TEKNIK SIPIL SORE'),
(39, 5, 'TEKNIK ELEKTRO'),
(40, 5, 'TEKNIK ELEKTRO SORE'),
(41, 5, 'TEKNIK MESIN'),
(42, 5, 'TEKNIK MESIN SORE'),
(43, 5, 'TEKNIK INFORMATIKA'),
(44, 5, 'TEKNIK INFORMATIKA SORE'),
(45, 5, 'TEKNIK LINGKUNGAN'),
(46, 5, 'SISTEM INFORMASI'),
(47, 6, 'PSIKOLOGI'),
(48, 6, 'PSIKOLOGI SORE'),
(49, 7, 'PROFESI NERS'),
(50, 7, 'PROFESI NERS SORE'),
(51, 7, 'ILMU KEPERAWATAN'),
(52, 7, 'ILMU KEPERAWATAN SORE'),
(53, 7, 'ILMU KEPERAWATAN SORE B'),
(54, 7, 'D3 KEPERAWATAN'),
(55, 7, 'D3 KEPERAWATAN SORE'),
(56, 8, 'PENDIDIKAN AGAMA ISLAM'),
(57, 8, 'EKONOMI SYARIAH'),
(58, 8, 'EKONOMI SYARIAH SORE'),
(59, 9, 'MAGISTER MANAJEMEN');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id_ta` tinyint(4) NOT NULL,
  `ta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id_ta`, `ta`) VALUES
(1, '2021 Ganjil'),
(2, '2021 Genap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_fakultass` (`fakultas`),
  ADD KEY `fk_prodi` (`prodi`),
  ADD KEY `fk_jenis` (`jenis`),
  ADD KEY `fk_ta` (`ta`),
  ADD KEY `fk_dosen` (`penyusun`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `fk_fakultas` (`id_fakultas`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_ta` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_dosen` FOREIGN KEY (`penyusun`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_fakultass` FOREIGN KEY (`fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prodi` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ta` FOREIGN KEY (`ta`) REFERENCES `ta` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `fk_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
