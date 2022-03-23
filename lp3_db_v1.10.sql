-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 09:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET FOREIGN_KEY_CHECKS=0;
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
  `prodi` smallint(6) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `kode_mk` varchar(30) NOT NULL,
  `kode_dokumen` varchar(30) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `jenis`, `ta`, `modul`, `fakultas`, `prodi`, `mk`, `kode_mk`, `kode_dokumen`, `tanggal`) VALUES
(1, 1, 2, '', 8, 55, 'PRAKTIK KLINIK KEPERAWATAN JIWA', 'MJU.KEP-47', '00802 13048', '2022-02-23'),
(2, 1, 2, '', 8, 55, 'KEPERAWATAN JIWA', 'MJU.KEP-29', '00802 13032', '2022-02-23'),
(3, 1, 2, '', 8, 55, 'FARMAKOLOGI', 'MU-015', '00802 13015', '2022-02-22'),
(4, 1, 2, '', 8, 55, 'GIZI & DIIT', 'MJU.KEP-09', '00802 13013', '2022-02-22'),
(5, 5, 1, '', 8, 52, 'SKRIPSI', 'MJU-12', '00801 13056', '2022-02-21'),
(6, 1, 2, '', 8, 52, 'EVIDENCE BASED NURSING', 'MJU-IKEP', '-', '2022-02-24'),
(7, 1, 1, '', 8, 52, 'KEPERAWATAN MENJELANG AJAL DAN PALIATIF', 'MJU.IKEP-26', '00801 13146', '2022-02-23'),
(8, 1, 2, '', 8, 52, 'BIOSTATISTIK', 'MJU.IKEP-23', '00801 13080', '2022-02-25'),
(9, 1, 2, '', 8, 52, 'KEPERAWATAN KELUARGA', 'MJU.60-12', '00801 13042', '2022-02-24'),
(10, 1, 2, '', 8, 55, 'KEPERAWATAN MEDIKAL BEDAH II', 'MU 026', '00802 13028', '2022-02-24'),
(11, 1, 1, '', 5, 34, 'DASAR-DASAR ILMU KOMUNIKASI', 'MJU.IK-002', '00502 16000', '2022-02-25'),
(12, 1, 1, '', 5, 34, 'PERKEMBANGAN TEKNOLOGI KOMUNIKASI', 'MJU.IK-0009', '00502 13000', '2022-02-25'),
(13, 1, 2, '', 2, 16, 'PRODUCTIVE SPEAKING', 'MJU.KIP.BING-020', '00201 13000', '2022-03-02'),
(14, 5, 2, '', 8, 52, 'ISLAM DAN ILMU PENGETAHUAN', 'MJU-08', '00801 13025', '2022-02-26'),
(15, 5, 2, '', 8, 52, 'KEWIRAUSAHAAN', 'MJU-08', '00801 13036', '2022-02-26'),
(16, 1, 2, '', 8, 55, 'METODE PENELITIAN', 'MJU.KEP-49', '00801 13040', '2022-02-25'),
(17, 1, 2, '', 8, 52, 'KEPERAWATAN KESEHATAN JIWA I', 'IKEP-13', '00801 13028', '2022-03-02'),
(18, 1, 2, '', 8, 52, 'KEPERAWATAN KOMUNITAS II', 'MJU.IKEP-24', '00801 13043', '2022-03-01'),
(19, 1, 2, '', 1, 11, 'HUKUM KEPAILITAN DAN PERADILAN NIAGA', 'HUM-045', '00100 12000', '2022-03-02'),
(20, 1, 2, '', 1, 11, 'HUKUM INDUSTRI KEUANGAN', 'HUM-042', '00100 12000', '2022-03-02'),
(21, 1, 2, '', 1, 11, 'HUKUM PERDATA', 'HUM-006', '00100 12000', '2022-03-02'),
(22, 1, 2, '', 1, 11, 'PENALARAN HUKUM', 'HUM-022', '00100 12000', '2022-03-02'),
(23, 1, 2, '', 1, 11, 'HUKUM ACARA PERDATA', 'HUM-017', '00100 12000', '2022-03-04'),
(24, 1, 2, '', 8, 50, 'KEPERAWATAN ANAK', 'MJU-NERS-04', '00801 13060', '2022-03-02'),
(25, 1, 2, '', 8, 55, 'KEPERAWATAN PROFESIONAL', 'MJU.KEP-018', '00802 13018', '2022-03-02'),
(26, 1, 2, '', 8, 55, 'ANTROPOLOGI KESEHATAN', 'MJU.KEP-07', '00802 13012', '2022-03-02'),
(27, 1, 2, '', 8, 55, 'KEPERAWATAN KOMUNITAS', 'KEP-34', '00802 13034', '2022-03-02'),
(28, 1, 2, '', 8, 55, 'DOKUMENTASI KEPERAWATAN', 'KEP-21', '00802 13018', '2022-03-02'),
(29, 1, 2, '', 1, 11, 'HUKUM ACARA PERADILAN AGAMA', 'HUM-023', '00100 12000', '2022-03-02'),
(30, 1, 2, '', 1, 11, 'ALTERNATIF PENYELESAIAN SENGKETA', 'HUM-046', '00100 12000', '2022-03-02'),
(31, 1, 2, '', 1, 11, 'HUKUM JAMINAN', 'HUM-043', '00100 12000', '2022-03-02'),
(32, 1, 2, '', 1, 11, 'HUKUM PERTANAHAN', 'HUM-016', '00100 12000', '2022-03-02'),
(33, 1, 2, '', 1, 11, 'HUKUM KONSTITUSI', 'HUM-041', '00100 12000', '2022-03-04'),
(34, 1, 2, '', 1, 11, 'HUKUM KEWARGANEGARAAN DAN IMIGRASI', 'HUM-051', '00100 12000', '2022-03-04'),
(35, 1, 2, '', 1, 11, 'HUKUM LINGKUNGAN', 'HUM-038', '00100 12000', '2022-03-04'),
(36, 1, 2, '', 1, 11, 'HUKUM PIDANA', 'HUM-007', '00100 12000', '2022-03-04'),
(37, 1, 2, '', 1, 11, 'HUKUM PIDANA KORPORASI', 'HUM-050', '00100 12000', '2022-03-04'),
(38, 1, 2, '', 1, 11, 'HUKUM PEMILU', 'HUM-052', '00100 12000', '2022-03-04'),
(39, 1, 2, '', 1, 11, 'HUKUM PIDANA MILITER', 'HUM-047', '-', '2022-03-04'),
(40, 1, 2, '', 1, 11, 'TINDAK PIDANA EKONOMI', 'HUM-048', '-', '2022-03-04'),
(41, 1, 2, '', 1, 11, 'HUKUM PIDANA KHUSUS', 'HUM-020', '00100 12000', '2022-03-04'),
(43, 1, 2, '', 1, 11, 'HUKUM PENDAFTARAN PERALIHAN HAK ATAS TANAH (PPHAT)', 'HUM-044', '-', '2022-03-04'),
(44, 1, 2, '', 1, 11, 'HUKUM ACARA MAHKAMAH KONSTITUSI (MK)', 'HUM-039', '00100 12000', '2022-03-04'),
(45, 1, 2, '', 1, 11, 'HUKUM TATA NEGARA', 'HUM-008', '00100 12000', '2022-03-04'),
(46, 2, 2, 'KEPERAWATAN JIWA', 8, 55, 'KEPERAWATAN JIWA', 'MJU.KEP-29', '-', '2022-03-07'),
(47, 1, 2, '', 3, 25, 'PENGETAHUAN BAHAN AGROINDUSTRI', 'MJU.TIP-201', '00303 16000', '2022-03-07'),
(48, 1, 2, '', 3, 25, 'RISET OPERASIONAL', 'MJU.TIP-207', '00303 16000', '2022-03-07'),
(49, 1, 2, '', 3, 25, 'TATA LETAK DAN PENANGANAN BAHAN', 'MJU.TIP-203', '00303 16000', '2022-03-07'),
(50, 1, 2, '', 3, 25, 'MANAJEMEN SUMBER DAYA MANUSIA', 'MJU.TIP-204', '00303 16000', '2022-03-07'),
(51, 1, 2, '', 3, 21, 'BIOKIMIA TANAMAN', 'MJU.AGT-113', '00301 16000 - 17', '2022-03-07'),
(52, 1, 2, '', 1, 11, 'HUKUM ADAT', 'HUM-009', '00100 12000', '2022-03-07'),
(53, 1, 2, '', 8, 55, 'KEPERAWATAN DASAR', 'MJU.KEP-17', '00801 13014', '2022-02-17'),
(54, 1, 2, '', 8, 52, 'KEPERAWATAN GAWAT DARURAT', 'MJU.IKEP-25', '00801 13044', '2022-03-07'),
(55, 1, 1, '', 8, 52, 'KEPERAWATAN KRITIS', 'MJU.60-11', '00801 13045', '2022-03-07'),
(56, 1, 2, '', 3, 25, 'SISTEM PRODUKSI', 'MJU.TIP-211', '00303 16000', '2022-03-08'),
(57, 1, 2, '', 3, 23, 'EKONOMI PERTANIAN', 'MJU.PTN-04', '00301 16000', '2022-03-08'),
(58, 1, 2, '', 3, 23, 'DASAR AKUNTANSI', 'MJU.AGB-205', '00301 16000', '2022-03-08'),
(59, 1, 2, '', 3, 21, 'TEKNOLOGI PENGOLAHAN HASIL PERTANIAN', 'MJU.AGT-521', '00301 16000', '2022-03-08'),
(60, 1, 2, '', 3, 25, 'MANAJEMEN LINGKUNGAN DAN LIMBAH AGROINDUSTRI', 'MJU.TIP-308', '00303 16000', '2022-03-09'),
(61, 1, 2, '', 1, 11, 'HUKUM KESEHATAN', 'HUM-053', '00100 12000', '2022-03-09'),
(64, 1, 2, '', 1, 11, 'HUKUM KEBIJAKAN PUBLIK', 'HUM-037', '00100 12000', '2022-03-09'),
(65, 1, 2, '', 1, 11, 'HUKUM PERTAMBANGAN', 'HUM-054', '00100 12000', '2022-03-09'),
(66, 1, 2, '', 1, 11, 'HUKUM ACARA PTUN', 'HUM-036', '00100 12000', '2022-03-09'),
(67, 1, 2, '', 1, 11, 'HUKUM WARIS', 'HUM-019', '00100 12000', '2022-03-09'),
(68, 1, 2, '', 1, 11, 'HUKUM ISLAM', 'HUM-005', '00100 12000', '2022-03-09'),
(69, 1, 2, '', 3, 21, 'AGROMETEOROLOGI', 'MJU.PTN-11', '00301 16000 - 11', '2022-03-10'),
(70, 1, 2, '', 3, 23, 'AGROMETEOROLOGI', 'MJU.PTN-11', '00302 16000', '2022-03-10'),
(71, 1, 2, '', 3, 25, 'TEKNOLOGI PENGEMASAN', 'MJU.TIP-205', '00303 16000', '2022-03-10'),
(72, 1, 2, '', 7, 48, 'PSIKOLOGI KEPRIBADIAN I', 'MJU.IPSI.PD-06', '00700 13000', '2022-03-10'),
(73, 1, 2, '', 7, 48, 'PSIKOLOGI KEPRIBADIAN II', 'MJU.IPSI.PD-07', '00700 13000', '2022-03-10'),
(74, 1, 2, '', 7, 48, 'ASESMEN KEPRIBADIAN', 'MJU.IPSI.DIAG-05', '00700 13000', '2022-03-10'),
(75, 1, 2, '', 7, 48, 'PSIKOLOGI KLINIS', 'MJU.IPSI.PD-18', '00700 13000', '2022-03-10'),
(76, 1, 2, '', 7, 48, 'PRAKTEK ASESMEN KOMUNITAS', 'MJU.IPSI.DIAG-08', '01000 13000', '2022-03-10'),
(77, 1, 2, '', 3, 25, 'PRAKTIK KERJA LAPANG', 'MJU.TIP-216', '00303 16000', '2022-03-11'),
(78, 1, 2, '', 7, 48, 'PRAKTEK ASESMEN SDM', 'MJU.IPSI.DIAG-12', '00700 13000', '2022-03-12'),
(79, 1, 2, '', 7, 48, 'PRAKTEK ASESMEN KEPRIBADIAN', 'MJU.IPSI.DIAG-06', '00700 13000', '2022-03-12'),
(80, 1, 2, '', 7, 48, 'ASESMEN SDM', 'MJU.IPSI.DIAG-11', '00700 13000', '2022-03-12'),
(81, 1, 2, '', 7, 48, 'ASESMEN KOMUNITAS', 'MJU.IPSI.DIAG-07', '00700 13000', '2022-03-12'),
(82, 1, 2, '', 7, 48, 'METODOLOGI PENELITIAN KUANTITATIF', 'MJU.IPSI.PD-22', '01000 13000', '2022-03-12'),
(84, 1, 2, '', 2, 14, 'FISIOLOGI HEWAN DAN MANUSIA', 'MJU.BIO-30', '00202 12000', '2022-03-12'),
(85, 1, 2, '', 3, 25, 'TEKNOLOGI PENGOLAHAN PANGAN', 'MJU.PTN-05', '00303 16000', '2022-03-14'),
(86, 1, 2, '', 3, 21, 'TEKNOLOGI BENIH', 'MJU.AGT-221', '00301 16000 - 30', '2022-03-14'),
(87, 1, 2, '', 7, 48, 'DASAR-DASAR ASESMEN', 'MJU.IPSI.PD-08', '00700 13000', '2022-03-14'),
(88, 1, 2, '', 8, 52, 'PENDIDIKAN DAN PROMOSI KESEHATAN', 'MJU.IKEP-10', '00801 13033', '2022-02-18'),
(89, 1, 2, '', 8, 52, 'MANAJEMEN KEPERAWATAN', 'MJU.IKEP-31', '00801 13055', '2022-02-18'),
(90, 1, 2, '', 8, 52, 'KEPERAWATAN HIV-AIDS', 'MJU.IKEP-15', '00801 13030', '2022-02-11'),
(91, 1, 2, '', 8, 52, 'FARMAKOLOGI KEPERAWATAN', 'MJU.IKEP-09', '-', '2022-02-17'),
(92, 1, 2, '', 8, 52, 'KEPERAWATAN ANAK I', 'MJU.IKEP-12', '00801 13027', '2022-02-16'),
(93, 1, 2, '', 8, 52, 'PROSES KEPERAWATAN DAN BERPIKIR KRITIS', 'MJU.IKEP-07', '00801 13020', '2022-02-16'),
(94, 1, 1, '', 8, 52, 'KEPERAWATAN MATERNITAS I', 'MJU.IKEP-14', '00801 13029', '2022-02-19'),
(95, 1, 2, '', 8, 52, 'KETERAMPILAN DASAR KEPERAWATAN', 'MJU.IKEP-06', '00801 13072', '2022-02-22'),
(96, 1, 2, '', 8, 52, 'ILMU DASAR KEPERAWATAN', 'MJU.IKEP-08', '00801 13074', '2022-02-22'),
(97, 1, 2, '', 8, 52, 'KOMUNIKASI DASAR KEPERAWATAN', 'MJU.IKEP-05', '00802 13024', '2022-02-17'),
(98, 1, 2, '', 7, 48, 'PRAKTEK ASESMEN KLINIS', 'MJU.IPSI.DIAG-10', '00700 13000', '2022-03-14'),
(99, 1, 2, '', 3, 23, 'EKONOMI MIKRO', 'MJU.AGB-105', '00362 16000', '2022-03-14'),
(100, 1, 2, '', 8, 55, 'MANAJEMEN KEPERAWATAN', 'MJU.KEP-37', '00802 13037', '2022-02-18'),
(101, 1, 2, '', 8, 55, 'PATOFISIOLOGI', 'MJU.KEP-14', '-', '2022-03-17'),
(102, 1, 2, '', 8, 55, 'KEPERAWATAN MATERNITAS', 'MJU.KEP-28', '00802 13031', '2022-02-19'),
(103, 1, 2, '', 8, 50, 'MANAJEMEN KEPERAWATAN', 'MJU.NERS-10', '00801 13063', '2022-04-18'),
(104, 1, 2, '', 8, 50, 'KEPERAWATAN MEDIKAL BEDAH', 'MJU.NERS-02', '00801 13057', '2022-02-19'),
(105, 1, 2, '', 8, 50, 'KEPERAWATAN MATERNITAS', 'MJU.NERS-04', '00801 13059', '2022-02-19'),
(107, 1, 2, '', 8, 52, 'KEPERAWATAN MEDIKAL BEDAH II', 'MJU.60-09', '00801 13031', '2022-02-16'),
(108, 1, 1, '', 8, 52, 'METODOLOGI PENELITIAN', 'MJU.IKEP-23', '00801 13041', '2022-02-16'),
(109, 1, 2, '', 3, 25, 'PENERAPAN KOMPUTER', 'MJU.TIP-106', '00303 16000', '2022-03-15'),
(110, 1, 2, '', 2, 15, 'PROGRAM PEMBELAJARAN BAHASA DAN SASTRA INDONESIA', 'MJU.BIND-016', '00204 13000', '2022-03-15'),
(111, 1, 2, '', 2, 15, 'SEMANTIK', 'MJU.BIND-005', '00204 13000', '2022-03-15'),
(112, 1, 1, '', 9, 58, 'STATISTIKA', 'MJU.ESYA-015', '-', '2022-01-01'),
(113, 1, 1, '', 9, 58, 'EKONOMETRIKA', 'MJU.ESYA-016', '-', '2022-01-01'),
(114, 1, 1, '', 9, 58, 'METODE PENELITIAN EKONOMI SYARIAH', 'MJU.ESYA-014', '-', '2022-01-01'),
(115, 2, 2, 'PRODUCTIVE SPEAKING', 2, 16, 'PRODUCTIVE SPEAKING', 'MJU.KIP.BING-020', '00201 13000', '2022-03-15'),
(116, 1, 2, '', 7, 48, 'PSIKOPATOLOGI', 'MJU.IPSI.PD-19', '00700 13000', '2022-03-16'),
(117, 1, 2, '', 3, 25, 'SANITASI INDUSTRI', 'MJU.TIP-307', '00303 16000', '2022-03-16'),
(118, 1, 2, '', 3, 23, 'RISET OPERASI', 'MJU.AGB-222', '00302 16000 - 222', '2022-03-16'),
(119, 1, 2, '', 3, 23, 'MANAJEMEN AGRIBISNIS', 'MJU.AGB-101', '00362 16000 - 101', '2022-03-16'),
(120, 1, 2, '', 7, 48, 'PSIKOLOGI INDUSTRI DAN ORGANISASI', 'MJU.IPSI.PD-17', '01000 13000 - PD-17', '2022-03-16'),
(121, 1, 2, '', 3, 25, 'MIKROBIOLOGI INDUSTRI', 'MJU.TIP-202', '00303 16000', '2022-03-17'),
(122, 1, 2, '', 3, 23, 'PERTANIAN BERKELANJUTAN', 'MJU.AGB-217', '00302 16000 - 217', '2022-03-17'),
(123, 1, 2, '', 1, 11, 'HUKUM KETENAGAKERJAAN', 'HUM-018', '00100 12000', '2022-03-18'),
(124, 1, 2, '', 7, 48, 'ASESMEN KLINIS', 'MJU.IPSI.DIAG-09', '00700 13000', '2022-03-21'),
(125, 1, 2, '', 9, 58, 'FIQIH MUAMALAH', 'MJU.ESYA-008', '00902 13000', '2022-03-21'),
(126, 1, 2, '', 2, 14, 'BIOSISTEMATIKA TUMBUHAN', 'MJU.BIO-16', '-', '2022-03-21'),
(127, 1, 2, '', 7, 48, 'ILMU BUDAYA DASAR', 'MJU.IPSI-02', '00700 13000', '2022-03-22'),
(128, 1, 2, '', 7, 48, 'DASAR-DASAR KOMUNIKASI', 'MJU.IPSI.PD-16', '-', '2022-03-22'),
(129, 1, 2, '', 3, 23, 'PEMASARAN PERTANIAN', 'MJU.AGB-212', '00362 16000 - 212', '2022-03-22'),
(130, 1, 2, '', 3, 21, 'ALAT DAN MESIN PERTANIAN', 'MJU.PTN-06', '00301 16000 - 06', '2022-03-22'),
(131, 1, 2, '', 3, 21, 'ILMU USAHATANI', 'MJU.PTN-12', '00301 16000 - 12', '2022-03-22'),
(132, 1, 2, '', 2, 18, 'MICROTEACHING', 'MJU.AUD-022', '00204 13000', '2022-03-22'),
(133, 1, 2, '', 4, 28, 'AUDIT SISTEM INFORMASI AKUNTANSI', 'MJU.50.AK-32', '00401 13000 01', '2022-03-22'),
(134, 1, 2, '', 4, 28, 'MANAJEMEN AUDIT', 'MJU.50.AK-27', '00402 16000 01', '2022-03-22'),
(135, 1, 2, '', 4, 28, 'AKUNTANSI ASET', 'MJU.50.AK-02', '00402 16000 01', '2022-03-22'),
(136, 1, 2, '', 2, 16, 'INFERENTIAL READING COMPREHENSION', 'MJU.BING-012', '-', '2022-03-22'),
(137, 1, 2, '', 3, 23, 'PRAKTIKUM MANAJEMEN AGRIBISNIS', 'MJU.AGB-224', '00362 16000 - 224', '2022-03-22'),
(138, 1, 2, '', 3, 25, 'REKAYASA PROSES', 'MJU.TIP-213', '00303 16000', '2022-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npk` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `npk`) VALUES
(1, 'Dr. NIKMATUR ROHMAH, S.Kep., Ns., M.Kes.', '197206262005012001'),
(2, 'Ns. MAD ZAINI, M.Kep., Sp.Kep.J.', ''),
(3, 'Ns. ELY RAHMATIKA NUGRAHANI, S.Kep., M.Kep.', ''),
(4, 'Ns. AYESIE NATASA ZULKA, S.Kep., M.Kep.', ''),
(5, 'Ns. SITI KHOLIFAH, M.Kep.', '0725098802'),
(6, 'Ns. AWATIFUL AZZA, M.Kep., Sp.Kep.Mat.', '0013127001'),
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
(31, 'Ir. WIWIT WIDIARTI, MP.', '0003076401'),
(32, 'IGNEO GRANDI GLORIA, SH., M.H.', ''),
(33, 'Ns. MOHAMMAD ALI HAMID, S.Kep., M.Kes.', ''),
(34, 'Ns. CIPTO SUSILO, S.Kep., M.Kep.', ''),
(35, 'DANANG KUMARA HADI, S.TP., M.T.', '0721039103'),
(36, 'Dr. Ir. TEGUH HARI SANTOSA, M.P.', '0006016601'),
(37, 'Ir. HENIK PRAYUGININGSIH, MP.', '0720026301'),
(38, 'AHIB ASSADAM, S.TP., M.Si.', '0730099104'),
(39, 'DANU INDRA WARDHANA, S.TP., M.P.', '0705089203'),
(40, 'MENIK CHUMAIDAH, S.H., M.Hum.', '00260456'),
(41, 'NURUL NADIRA, SH., Mkn.', ''),
(42, 'LUTFIAN UBAIDILLAH, S.H., M.H.', '0717018802'),
(43, 'AKHMAD MAIMUN, Lc., M.H.', ''),
(44, 'Ir. INSAN WIJAYA, M.P.', ''),
(45, 'ARA NUGRAHAYU NALAWATI, S.TP., M.Si.', '0723098908'),
(46, 'PANCA KURSISTIN HANDAYANI, S.Psi., M.A., Psikolog', ''),
(47, 'ISTIQOMAH, S.Psi., M.Si., Psikolog', ''),
(48, 'RIA WIYATFI LINSIYA, M.Si., M.Psi., Psikolog', ''),
(49, 'Dr. NURLAELA WIDYARINI, S.Psi., M.Si.', ''),
(50, 'ERNA IPAK RAHMAWATI, S.Psi., MA.', ''),
(51, 'MUH IMAN, S.H., M.H.', '0011086501'),
(52, 'NOVY EURIKA, S.Si., M.Pd.', ''),
(53, 'ASMUJI, S.KM., M.Kep.', ''),
(54, 'Ns. HENDRA KURNIAWAN, S.Kep., M.Ked.Trop.', ''),
(55, 'Ns. SOFIA RHOSMA DEWI, S.Kep., M.Kep.', ''),
(56, 'NURUL FATHIYAH FAUZI, SP., MP.', ''),
(57, 'MANAN, S.H., M.H.', ''),
(58, 'Dr. FAUZIYAH, S.H., M.H.', ''),
(59, 'AGUS MILU SUSETYO, M.Pd.', ''),
(60, 'Dr. FITRI AMILIA, M.Pd.', '07 09 477'),
(61, 'SALAHUDDIN RIJAL ARIFIN, S.EI., M.SM.', '0725099205'),
(62, 'ANISA NURINA AULIA, S.P., M.Sc.', '0705039103'),
(63, 'SITI NUR\'AINI, S.Psi., M.Si.', ''),
(64, 'DANAN SATRIYO WIBOWO, M.Si.', ''),
(65, 'RISA MARTHA MULIASARI, S.E., M.Si.', ''),
(66, 'Ir. OKTARINA, M.P.', ''),
(67, 'NURAINI KUSUMANINGTYAS, S.Psi., M.Psi., Psikolog', ''),
(68, 'MUHAMMAD SYAFI\'I, M.E.I', ''),
(69, 'ANGGRAENI SWASTIKA SARI, S.Psi., M.Psi., Psikolog', ''),
(70, 'Dr. ALI USMAN, M.Pd.', ''),
(71, 'Ir. BAGUS TRIPAMA, M.P.', ''),
(72, 'SYAMSUL HADI, S.P., M.P.', ''),
(73, 'Dra. KHOIRIYAH, M.Pd.', '09 03 523'),
(74, 'RENDY MIRWAN ASPIRANDI, S.E., M.S.A', ''),
(75, 'GARDINA AULIN NUHA, SE., M.Akun.', ''),
(76, 'Dra. YULINARTATI, SE., MM., AK., CA.', ''),
(77, 'KUNI HIKMAH HIDAYANTI, M.Pd.', '');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` tinyint(4) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `fakultas`, `email`) VALUES
(1, 'HUKUM', 'hukum@unmuhjember.ac.id'),
(2, 'KEGURUAN DAN ILMU PENDIDIKAN', 'fkip@unmuhjember.ac.id'),
(3, 'PERTANIAN', 'faperta@unmuhjember.ac.id'),
(4, 'EKONOMI', 'ekonomi@unmuhjember.ac.id'),
(5, 'ILMU SOSIAL DAN ILMU POLITIK', 'fisip@unmuhjember.ac.id'),
(6, 'TEKNIK', 'ft@unmuhjember.ac.id'),
(7, 'PSIKOLOGI', 'psikologi@unmuhjember.ac.id'),
(8, 'ILMU KESEHATAN', 'fikes@unmuhjember.ac.id'),
(9, 'AGAMA ISLAM', 'fai@unmuhjember.ac.id'),
(10, 'EKONOMI PASCA', 'pasca@unmuhjember.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` tinyint(4) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `mkwu` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`, `mkwu`) VALUES
(1, 'RPS', 0),
(2, 'MODUL', 0),
(3, 'BUKU AJAR', 0),
(4, 'PEDOMAN', 0),
(5, 'RPS', 1),
(6, 'MODUL', 1),
(7, 'BUKU AJAR', 1),
(8, 'PEDOMAN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

CREATE TABLE `mk` (
  `id` int(11) NOT NULL,
  `id_ta` tinyint(4) NOT NULL,
  `id_prodi` smallint(6) NOT NULL,
  `jumlah_mk` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`id`, `id_ta`, `id_prodi`, `jumlah_mk`) VALUES
(1, 2, 11, 34),
(2, 2, 14, 22),
(3, 2, 15, 22),
(4, 2, 16, 27),
(5, 2, 17, 28),
(6, 2, 18, 26),
(7, 2, 20, 25),
(8, 2, 21, 28),
(9, 2, 23, 27),
(10, 2, 25, 23),
(11, 2, 26, 21),
(12, 2, 28, 20),
(13, 2, 30, 25),
(14, 2, 32, 18),
(15, 2, 34, 21),
(16, 2, 36, 14),
(17, 2, 38, 38),
(18, 2, 40, 35),
(19, 2, 42, 0),
(20, 2, 44, 23),
(21, 2, 46, 0),
(22, 2, 47, 0),
(23, 2, 48, 29),
(24, 2, 50, 6),
(25, 2, 52, 16),
(26, 2, 55, 22),
(27, 2, 57, 28),
(28, 2, 58, 21);

-- --------------------------------------------------------

--
-- Table structure for table `penyusun`
--

CREATE TABLE `penyusun` (
  `id` bigint(20) NOT NULL,
  `id_dokumen` bigint(20) UNSIGNED NOT NULL,
  `id_dosen` smallint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyusun`
--

INSERT INTO `penyusun` (`id`, `id_dokumen`, `id_dosen`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 14),
(16, 16, 8),
(17, 17, 15),
(18, 18, 16),
(19, 19, 17),
(20, 20, 17),
(21, 21, 18),
(22, 22, 19),
(24, 24, 21),
(25, 25, 21),
(26, 26, 22),
(27, 27, 16),
(28, 28, 1),
(29, 29, 23),
(30, 30, 19),
(31, 31, 17),
(33, 33, 24),
(34, 34, 24),
(35, 35, 24),
(37, 37, 25),
(38, 38, 26),
(39, 39, 27),
(40, 40, 27),
(41, 41, 25),
(43, 43, 28),
(44, 44, 29),
(46, 46, 2),
(47, 47, 30),
(48, 48, 30),
(49, 49, 30),
(50, 50, 30),
(51, 51, 31),
(52, 52, 32),
(53, 53, 5),
(54, 54, 33),
(55, 55, 34),
(56, 56, 35),
(58, 58, 37),
(59, 59, 31),
(60, 60, 39),
(61, 61, 40),
(64, 64, 42),
(65, 65, 42),
(66, 66, 42),
(67, 67, 43),
(68, 68, 43),
(69, 69, 44),
(70, 70, 44),
(71, 71, 45),
(72, 72, 46),
(73, 73, 46),
(74, 74, 47),
(75, 75, 48),
(76, 76, 46),
(77, 77, 39),
(78, 78, 47),
(79, 79, 47),
(81, 81, 49),
(84, 84, 52),
(85, 85, 39),
(86, 86, 44),
(87, 87, 48),
(88, 88, 53),
(89, 89, 53),
(90, 90, 54),
(91, 91, 54),
(92, 92, 1),
(93, 93, 1),
(94, 94, 6),
(95, 95, 4),
(96, 96, 55),
(97, 97, 15),
(98, 98, 47),
(99, 99, 56),
(100, 100, 53),
(101, 101, 54),
(102, 102, 6),
(103, 103, 53),
(104, 104, 10),
(105, 105, 6),
(107, 107, 10),
(108, 108, 1),
(109, 109, 35),
(110, 110, 59),
(111, 111, 60),
(112, 112, 61),
(113, 113, 61),
(114, 114, 61),
(115, 115, 13),
(116, 116, 46),
(117, 117, 45),
(118, 118, 62),
(120, 120, 63),
(121, 121, 45),
(132, 122, 31),
(133, 122, 62),
(134, 122, 66),
(135, 122, 65),
(153, 123, 51),
(155, 124, 47),
(156, 124, 48),
(157, 124, 67),
(158, 125, 68),
(159, 23, 20),
(160, 23, 29),
(161, 45, 26),
(162, 45, 58),
(163, 45, 40),
(164, 45, 19),
(165, 36, 20),
(166, 36, 25),
(167, 32, 17),
(168, 80, 47),
(169, 80, 69),
(170, 82, 50),
(171, 82, 64),
(172, 82, 49),
(173, 126, 70),
(174, 57, 37),
(175, 127, 64),
(176, 128, 63),
(177, 129, 62),
(178, 130, 71),
(179, 131, 72),
(180, 132, 73),
(181, 133, 74),
(182, 134, 75),
(183, 135, 76),
(184, 119, 65),
(185, 119, 62),
(186, 136, 77),
(187, 137, 62),
(188, 137, 65),
(189, 138, 45),
(190, 138, 38);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` smallint(6) NOT NULL,
  `id_fakultas` tinyint(4) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '-',
  `primer` tinyint(4) NOT NULL DEFAULT 0,
  `nick` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_fakultas`, `prodi`, `email`, `primer`, `nick`) VALUES
(1, 1, '-', '-', 0, NULL),
(2, 2, '-', '-', 0, NULL),
(3, 3, '-', '-', 0, NULL),
(4, 4, '-', '-', 0, NULL),
(5, 5, '-', '-', 0, NULL),
(6, 6, '-', '-', 0, NULL),
(7, 7, '-', '-', 0, NULL),
(8, 8, '-', '-', 0, NULL),
(9, 9, '-', '-', 0, NULL),
(10, 10, '-', '-', 0, NULL),
(11, 1, 'ILMU HUKUM', 'hukum@unmuhjember.ac.id', 1, 'Ilmu Hukum'),
(12, 1, 'ILMU HUKUM SORE', '-', 0, NULL),
(13, 2, 'D2 PENDIDIKAN GURU TAMAN KANAK-KANAK', '-', 0, NULL),
(14, 2, 'PENDIDIKAN BIOLOGI', 'biologi@unmuhjember.ac.id', 1, 'Biologi'),
(15, 2, 'PENDIDIKAN BAHASA DAN SASTRA INDONESIA', 'pbsi.umjember@unmuhjember.ac.id', 1, 'PBSI'),
(16, 2, 'PENDIDIKAN BAHASA INGGRIS', 'FKIP.Inggris@unmuhjember.ac.id', 1, 'PBI'),
(17, 2, 'PENDIDIKAN MATEMATIKA', 'pendmatematika@unmuhjember.ac.id', 1, 'Matematika'),
(18, 2, 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI', 'paud.fkip@unmuhjember.ac.id', 1, 'PG PAUD'),
(19, 2, 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI SORE', '-', 0, NULL),
(20, 2, 'PENDIDIKAN OLAHRAGA', 'por@unmuhjember.ac.id', 1, 'POR'),
(21, 3, 'AGROTEKNOLOGI', 'agroteknologi@unmuhjember.ac.id', 1, 'Agroteknologi'),
(22, 3, 'AGROTEKNOLOGI SORE', '-', 0, NULL),
(23, 3, 'AGRIBISNIS', 'agribisnis@unmuhjember.ac.id', 1, 'Agribisnis'),
(24, 3, 'AGRIBISNIS SORE', '-', 0, NULL),
(25, 3, 'TEKNOLOGI INDUSTRI PERTANIAN', 'tip@unmuhjember.ac.id', 1, 'TIP'),
(26, 4, 'MANAJEMEN', 'manajemen@unmuhjember.ac.id', 1, 'Manajemen'),
(27, 4, 'MANAJEMEN SORE', '-', 0, NULL),
(28, 4, 'AKUNTANSI', 'akuntansi@unmuhjember.ac.id', 1, 'Akuntansi'),
(29, 4, 'AKUNTANSI SORE', '-', 0, NULL),
(30, 5, 'D3 PERHOTELAN', '-', 1, 'D3 Perhotelan'),
(31, 5, 'D1 AKADEMI PARIWISATA', '-', 0, NULL),
(32, 5, 'ILMU PEMERINTAHAN', 'ilmupemerintahan.fisip@unmuhjember.ac.id\n', 1, 'Ilmu Pemerintahan'),
(33, 5, 'ILMU PEMERINTAHAN (NON REGULER)', '-', 0, NULL),
(34, 5, 'ILMU KOMUNIKASI', 'komunikasi@unmuhjember.ac.id', 1, 'Ilkom'),
(35, 5, 'ILMU KOMUNIKASI (NON REGULER)', '-', 0, NULL),
(36, 6, 'MANAJEMEN INFORMATIKA', 'mi.ft@unmuhjember.ac.id', 1, 'MI'),
(37, 6, 'MANAJEMEN INFORMATIKA SORE', '-', 0, NULL),
(38, 6, 'TEKNIK SIPIL', 'tekniksipil@unmuhjember.ac.id', 1, 'Sipil'),
(39, 6, 'TEKNIK SIPIL SORE', '-', 0, NULL),
(40, 6, 'TEKNIK ELEKTRO', 'elektro@unmuhjember.ac.id', 1, 'Elektro'),
(41, 6, 'TEKNIK ELEKTRO SORE', '-', 0, NULL),
(42, 6, 'TEKNIK MESIN', 't.mesin@unmuhjember.ac.id', 1, 'Mesin'),
(43, 6, 'TEKNIK MESIN SORE', '-', 0, NULL),
(44, 6, 'TEKNIK INFORMATIKA', 'teknikinformatika@unmuhjember.ac.id', 1, 'TI'),
(45, 6, 'TEKNIK INFORMATIKA SORE', '-', 0, NULL),
(46, 6, 'TEKNIK LINGKUNGAN', 'tekniklingkungan@unmuhjember.ac.id', 1, 'Lingkungan'),
(47, 6, 'SISTEM INFORMASI', 'sisteminformasi@unmuhjember.ac.id', 1, 'SI'),
(48, 7, 'PSIKOLOGI', 'psikologi@unmuhjember.ac.id', 1, 'Psikologi'),
(49, 7, 'PSIKOLOGI SORE', '-', 0, NULL),
(50, 8, 'PROFESI NERS', 'Prodiners@unmuhjember.ac.id', 1, 'Ners'),
(51, 8, 'PROFESI NERS SORE', '-', 0, NULL),
(52, 8, 'ILMU KEPERAWATAN', 's1fikes@unmuhjember.ac.id', 1, 'Ilmu Keperawatan'),
(53, 8, 'ILMU KEPERAWATAN SORE', '-', 0, NULL),
(54, 8, 'ILMU KEPERAWATAN SORE B', '-', 0, NULL),
(55, 8, 'D3 KEPERAWATAN', 'd3keperawatan@unmuhjember.ac.id', 1, 'D3 Keperawatan'),
(56, 8, 'D3 KEPERAWATAN SORE', '-', 0, NULL),
(57, 9, 'PENDIDIKAN AGAMA ISLAM', 'pai@unmuhjember.ac.id', 1, 'PAI'),
(58, 9, 'EKONOMI SYARIAH', 'ekonomisyariah@unmuhjember.ac.id', 1, 'ES'),
(59, 9, 'EKONOMI SYARIAH SORE', '-', 0, NULL),
(60, 10, 'MAGISTER MANAJEMEN', 'pasca@unmuhjember.ac.id', 0, NULL);

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
  ADD KEY `fk_ta` (`ta`);

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
-- Indexes for table `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prodii` (`id_prodi`),
  ADD KEY `fk_taa` (`id_ta`);

--
-- Indexes for table `penyusun`
--
ALTER TABLE `penyusun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dokumen` (`id_dokumen`),
  ADD KEY `fk_dosen` (`id_dosen`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `mk`
--
ALTER TABLE `mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `penyusun`
--
ALTER TABLE `penyusun`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

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
  ADD CONSTRAINT `fk_fakultass` FOREIGN KEY (`fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`jenis`) REFERENCES `jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prodii` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ta` FOREIGN KEY (`ta`) REFERENCES `ta` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk`
--
ALTER TABLE `mk`
  ADD CONSTRAINT `fk_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_taa` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyusun`
--
ALTER TABLE `penyusun`
  ADD CONSTRAINT `fk_dokumen` FOREIGN KEY (`id_dokumen`) REFERENCES `dokumen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `fk_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
