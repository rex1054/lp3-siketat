-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 09:56 AM
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
CREATE DATABASE IF NOT EXISTS `lp3_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lp3_db`;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

DROP TABLE IF EXISTS `dokumen`;
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
(5, 4, 1, '', 7, 51, 'SKRIPSI', 'MJU-12', '00801 13056', 5, '2022-02-21'),
(6, 0, 2, '', 7, 51, 'EVIDENCE BASED NURSING', 'MJU-IKEP', '-', 6, '2022-02-24'),
(7, 0, 1, '', 7, 51, 'KEPERAWATAN MENJELANG AJAL DAN PALIATIF', 'MJU.IKEP-26', '00801 13146', 7, '2022-02-23'),
(8, 0, 2, '', 7, 51, 'BIOSTATISTIK', 'MJU.IKEP-23', '00801 13080', 8, '2022-02-25'),
(9, 0, 2, '', 7, 51, 'KEPERAWATAN KELUARGA', 'MJU.60-12', '00801 13042', 9, '2022-02-24'),
(10, 0, 2, '', 7, 54, 'KEPERAWATAN MEDIKAL BEDAH II', 'MU 026', '00802 13028', 10, '2022-02-24'),
(11, 0, 1, '', 4, 33, 'DASAR-DASAR ILMU KOMUNIKASI', 'MJU.IK-002', '00502 16000', 11, '2022-02-25'),
(12, 0, 1, '', 4, 33, 'PERKEMBANGAN TEKNOLOGI KOMUNIKASI', 'MJU.IK-0009', '00502 13000', 12, '2022-02-25'),
(13, 0, 2, '', 1, 15, 'PRODUCTIVE SPEAKING', 'MJU.KIP.BING-020', '00201 13000', 13, '2022-03-02'),
(14, 4, 2, '', 7, 51, 'ISLAM DAN ILMU PENGETAHUAN', 'MJU-08', '00801 13025', 14, '2022-02-26'),
(15, 4, 2, '', 7, 51, 'KEWIRAUSAHAAN', 'MJU-08', '00801 13036', 14, '2022-02-26'),
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
(53, 0, 2, '', 7, 54, 'KEPERAWATAN DASAR', 'MJU.KEP-17', '00801 13014', 5, '2022-02-17'),
(54, 0, 2, '', 7, 51, 'KEPERAWATAN GAWAT DARURAT', 'MJU.IKEP-25', '00801 13044', 33, '2022-03-07'),
(55, 0, 1, '', 7, 51, 'KEPERAWATAN KRITIS', 'MJU.60-11', '00801 13045', 34, '2022-03-07'),
(56, 0, 2, '', 2, 24, 'SISTEM PRODUKSI', 'MJU.TIP-211', '00303 16000', 35, '2022-03-08'),
(57, 0, 2, '', 2, 22, 'EKONOMI PERTANIAN', 'MJU.PTN-04', '00301 16000', 36, '2022-03-08'),
(58, 0, 2, '', 2, 22, 'DASAR AKUNTANSI', 'MJU.AGB-205', '00301 16000', 37, '2022-03-08'),
(59, 0, 2, '', 2, 20, 'TEKNOLOGI PENGOLAHAN HASIL PERTANIAN', 'MJU.AGT-521', '00301 16000', 31, '2022-03-08'),
(60, 0, 2, '', 2, 24, 'MANAJEMEN LINGKUNGAN DAN LIMBAH AGROINDUSTRI', 'MJU.TIP-308', '00303 16000', 39, '2022-03-09'),
(61, 0, 2, '', 0, 10, 'HUKUM KESEHATAN', 'HUM-053', '00100 12000', 40, '2022-03-09'),
(64, 0, 2, '', 0, 10, 'HUKUM KEBIJAKAN PUBLIK', 'HUM-037', '00100 12000', 42, '2022-03-09'),
(65, 0, 2, '', 0, 10, 'HUKUM PERTAMBANGAN', 'HUM-054', '00100 12000', 42, '2022-03-09'),
(66, 0, 2, '', 0, 10, 'HUKUM ACARA PTUN', 'HUM-036', '00100 12000', 42, '2022-03-09'),
(67, 0, 2, '', 0, 10, 'HUKUM WARIS', 'HUM-019', '00100 12000', 43, '2022-03-09'),
(68, 0, 2, '', 0, 10, 'HUKUM ISLAM', 'HUM-005', '00100 12000', 43, '2022-03-09'),
(69, 0, 2, '', 2, 20, 'AGROMETEOROLOGI', 'MJU.PTN-11', '00301 16000 - 11', 44, '2022-03-10'),
(70, 0, 2, '', 2, 22, 'AGROMETEOROLOGI', 'MJU.PTN-11', '00302 16000', 44, '2022-03-10'),
(71, 0, 2, '', 2, 24, 'TEKNOLOGI PENGEMASAN', 'MJU.TIP-205', '00303 16000', 45, '2022-03-10'),
(72, 0, 2, '', 6, 47, 'PSIKOLOGI KEPRIBADIAN I', 'MJU.IPSI.PD-06', '00700 13000', 46, '2022-03-10'),
(73, 0, 2, '', 6, 47, 'PSIKOLOGI KEPRIBADIAN II', 'MJU.IPSI.PD-07', '00700 13000', 46, '2022-03-10'),
(74, 0, 2, '', 6, 47, 'ASESMEN KEPRIBADIAN', 'MJU.IPSI.DIAG-05', '00700 13000', 47, '2022-03-10'),
(75, 0, 2, '', 6, 47, 'PSIKOLOGI KLINIS', 'MJU.IPSI.PD-18', '00700 13000', 48, '2022-03-10'),
(76, 0, 2, '', 6, 47, 'PRAKTEK ASESMEN KOMUNITAS', 'MJU.IPSI.DIAG-08', '01000 13000', 46, '2022-03-10'),
(77, 0, 2, '', 2, 24, 'PRAKTIK KERJA LAPANG', 'MJU.TIP-216', '00303 16000', 39, '2022-03-11'),
(78, 0, 2, '', 6, 47, 'PRAKTEK ASESMEN SDM', 'MJU.IPSI.DIAG-12', '00700 13000', 47, '2022-03-12'),
(79, 0, 2, '', 6, 47, 'PRAKTEK ASESMEN KEPRIBADIAN', 'MJU.IPSI.DIAG-06', '00700 13000', 47, '2022-03-12'),
(80, 0, 2, '', 6, 47, 'ASESMEN SDM', 'MJU.IPSI.DIAG-11', '00700 13000', 47, '2022-03-12'),
(81, 0, 2, '', 6, 47, 'ASESMEN KOMUNITAS', 'MJU.IPSI.DIAG-07', '00700 13000', 49, '2022-03-12'),
(82, 0, 2, '', 6, 47, 'METODOLOGI PENELITIAN KUANTITATIF', 'MJU.IPSI.PD-22', '01000 13000', 50, '2022-03-12'),
(84, 0, 2, '', 1, 13, 'FISIOLOGI HEWAN DAN MANUSIA', 'MJU.BIO-30', '00202 12000', 52, '2022-03-12'),
(85, 0, 2, '', 2, 24, 'TEKNOLOGI PENGOLAHAN PANGAN', 'MJU.PTN-05', '00303 16000', 39, '2022-03-14'),
(86, 0, 2, '', 2, 20, 'TEKNOLOGI BENIH', 'MJU.AGT-221', '00301 16000 - 30', 44, '2022-03-14'),
(87, 0, 2, '', 6, 47, 'DASAR-DASAR ASESMEN', 'MJU.IPSI.PD-08', '00700 13000', 48, '2022-03-14'),
(88, 0, 2, '', 7, 51, 'PENDIDIKAN DAN PROMOSI KESEHATAN', 'MJU.IKEP-10', '00801 13033', 53, '2022-02-18'),
(89, 0, 2, '', 7, 51, 'MANAJEMEN KEPERAWATAN', 'MJU.IKEP-31', '00801 13055', 53, '2022-02-18'),
(90, 0, 2, '', 7, 51, 'KEPERAWATAN HIV-AIDS', 'MJU.IKEP-15', '00801 13030', 54, '2022-02-11'),
(91, 0, 2, '', 7, 51, 'FARMAKOLOGI KEPERAWATAN', 'MJU.IKEP-09', '-', 54, '2022-02-17'),
(92, 0, 2, '', 7, 51, 'KEPERAWATAN ANAK I', 'MJU.IKEP-12', '00801 13027', 1, '2022-02-16'),
(93, 0, 2, '', 7, 51, 'PROSES KEPERAWATAN DAN BERPIKIR KRITIS', 'MJU.IKEP-07', '00801 13020', 1, '2022-02-16'),
(94, 0, 1, '', 7, 51, 'KEPERAWATAN MATERNITAS I', 'MJU.IKEP-14', '00801 13029', 6, '2022-02-19'),
(95, 0, 2, '', 7, 51, 'KETERAMPILAN DASAR KEPERAWATAN', 'MJU.IKEP-06', '00801 13072', 4, '2022-02-22'),
(96, 0, 2, '', 7, 51, 'ILMU DASAR KEPERAWATAN', 'MJU.IKEP-08', '00801 13074', 55, '2022-02-22'),
(97, 0, 2, '', 7, 51, 'KOMUNIKASI DASAR KEPERAWATAN', 'MJU.IKEP-05', '00802 13024', 15, '2022-02-17'),
(98, 0, 2, '', 6, 47, 'PRAKTEK ASESMEN KLINIS', 'MJU.IPSI.DIAG-10', '00700 13000', 47, '2022-03-14'),
(99, 0, 2, '', 2, 22, 'EKONOMI MIKRO', 'MJU.AGB-105', '00362 16000', 56, '2022-03-14'),
(100, 0, 2, '', 7, 54, 'MANAJEMEN KEPERAWATAN', 'MJU.KEP-37', '00802 13037', 53, '2022-02-18'),
(101, 0, 2, '', 7, 54, 'PATOFISIOLOGI', 'MJU.KEP-14', '-', 54, '2022-03-17'),
(102, 0, 2, '', 7, 54, 'KEPERAWATAN MATERNITAS', 'MJU.KEP-28', '00802 13031', 6, '2022-02-19'),
(103, 0, 2, '', 7, 49, 'MANAJEMEN KEPERAWATAN', 'MJU.NERS-10', '00801 13063', 53, '2022-04-18'),
(104, 0, 2, '', 7, 49, 'KEPERAWATAN MEDIKAL BEDAH', 'MJU.NERS-02', '00801 13057', 10, '2022-02-19'),
(105, 0, 2, '', 7, 49, 'KEPERAWATAN MATERNITAS', 'MJU.NERS-04', '00801 13059', 6, '2022-02-19'),
(107, 0, 2, '', 7, 51, 'KEPERAWATAN MEDIKAL BEDAH II', 'MJU.60-09', '00801 13031', 10, '2022-02-16'),
(108, 0, 1, '', 7, 51, 'METODOLOGI PENELITIAN', 'MJU.IKEP-23', '00801 13041', 1, '2022-02-16'),
(109, 0, 2, '', 2, 24, 'PENERAPAN KOMPUTER', 'MJU.TIP-106', '00303 16000', 35, '2022-03-15'),
(110, 0, 2, '', 1, 14, 'PROGRAM PEMBELAJARAN BAHASA DAN SASTRA INDONESIA', 'MJU.BIND-016', '00204 13000', 59, '2022-03-15'),
(111, 0, 2, '', 1, 14, 'SEMANTIK', 'MJU.BIND-005', '00204 13000', 60, '2022-03-15'),
(112, 0, 1, '', 8, 57, 'STATISTIKA', 'MJU.ESYA-015', '-', 61, '2022-01-01'),
(113, 0, 1, '', 8, 57, 'EKONOMETRIKA', 'MJU.ESYA-016', '-', 61, '2022-01-01'),
(114, 0, 1, '', 8, 57, 'METODE PENELITIAN EKONOMI SYARIAH', 'MJU.ESYA-014', '-', 61, '2022-01-01'),
(115, 1, 2, 'PRODUCTIVE SPEAKING', 1, 15, 'PRODUCTIVE SPEAKING', 'MJU.KIP.BING-020', '00201 13000', 13, '2022-03-15'),
(116, 0, 2, '', 6, 47, 'PSIKOPATOLOGI', 'MJU.IPSI.PD-19', '00700 13000', 46, '2022-03-16'),
(117, 0, 2, '', 2, 24, 'SANITASI INDUSTRI', 'MJU.TIP-307', '00303 16000', 45, '2022-03-16'),
(118, 0, 2, '', 2, 22, 'RISET OPERASI', 'MJU.AGB-222', '00302 16000 - 222', 62, '2022-03-16'),
(119, 0, 2, '', 2, 22, 'MANAJEMEN AGRIBISNIS', 'MJU.AGB-101', '00362 16000 - 101', 62, '2022-03-16'),
(120, 0, 2, '', 6, 47, 'PSIKOLOGI INDUSTRI DAN ORGANISASI', 'MJU.IPSI.PD-17', '01000 13000 - PD-17', 63, '2022-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `id` smallint(6) NOT NULL,
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
(51, 'MUH IMAN, S.H., M.H.', '00111086501'),
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
(64, 'DANAN SATRIYO WIBOWO, M.Si.', '');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

DROP TABLE IF EXISTS `fakultas`;
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

DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id_jenis` tinyint(4) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `mkwu` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`, `mkwu`) VALUES
(0, 'RPS', 0),
(1, 'MODUL', 0),
(2, 'BUKU AJAR', 0),
(3, 'PEDOMAN', 0),
(4, 'RPS', 1),
(5, 'MODUL', 1),
(6, 'BUKU AJAR', 1),
(7, 'PEDOMAN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

DROP TABLE IF EXISTS `mk`;
CREATE TABLE `mk` (
  `id` int(11) NOT NULL,
  `id_ta` tinyint(4) NOT NULL,
  `id_prodi` tinyint(4) NOT NULL,
  `jumlah_mk` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`id`, `id_ta`, `id_prodi`, `jumlah_mk`) VALUES
(1, 2, 10, 34),
(2, 2, 13, 22),
(3, 2, 14, 22),
(4, 2, 15, 27),
(5, 2, 16, 28),
(6, 2, 17, 26),
(7, 2, 19, 25),
(8, 2, 20, 28),
(9, 2, 22, 27),
(10, 2, 24, 23),
(11, 2, 25, 21),
(12, 2, 27, 20),
(13, 2, 29, 25),
(14, 2, 31, 18),
(15, 2, 33, 21),
(16, 2, 35, 14),
(17, 2, 37, 38),
(18, 2, 39, 35),
(19, 2, 41, 0),
(20, 2, 43, 23),
(21, 2, 45, 0),
(22, 2, 46, 0),
(23, 2, 47, 29),
(24, 2, 49, 6),
(25, 2, 51, 16),
(26, 2, 54, 22),
(27, 2, 56, 28),
(28, 2, 57, 21);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi` (
  `id_prodi` tinyint(4) NOT NULL,
  `id_fakultas` tinyint(4) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `primer` tinyint(4) NOT NULL DEFAULT 0,
  `nick` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_fakultas`, `prodi`, `primer`, `nick`) VALUES
(0, 0, '-', 0, NULL),
(1, 1, '-', 0, NULL),
(2, 2, '-', 0, NULL),
(3, 3, '-', 0, NULL),
(4, 4, '-', 0, NULL),
(5, 5, '-', 0, NULL),
(6, 6, '-', 0, NULL),
(7, 7, '-', 0, NULL),
(8, 8, '-', 0, NULL),
(9, 9, '-', 0, NULL),
(10, 0, 'ILMU HUKUM', 1, 'Ilmu Hukum'),
(11, 0, 'ILMU HUKUM SORE', 0, NULL),
(12, 1, 'D2 PENDIDIKAN GURU TAMAN KANAK-KANAK', 0, NULL),
(13, 1, 'PENDIDIKAN BIOLOGI', 1, 'Biologi'),
(14, 1, 'PENDIDIKAN BAHASA DAN SASTRA INDONESIA', 1, 'PBSI'),
(15, 1, 'PENDIDIKAN BAHASA INGGRIS', 1, 'PBI'),
(16, 1, 'PENDIDIKAN MATEMATIKA', 1, 'Matematika'),
(17, 1, 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI', 1, 'PG PAUD'),
(18, 1, 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI SORE', 0, NULL),
(19, 1, 'PENDIDIKAN OLAHRAGA', 1, 'POR'),
(20, 2, 'AGROTEKNOLOGI', 1, 'Agroteknologi'),
(21, 2, 'AGROTEKNOLOGI SORE', 0, NULL),
(22, 2, 'AGRIBISNIS', 1, 'Agribisnis'),
(23, 2, 'AGRIBISNIS SORE', 0, NULL),
(24, 2, 'TEKNOLOGI INDUSTRI PERTANIAN', 1, 'TIP'),
(25, 3, 'MANAJEMEN', 1, 'Manajemen'),
(26, 3, 'MANAJEMEN SORE', 0, NULL),
(27, 3, 'AKUNTANSI', 1, 'Akuntansi'),
(28, 3, 'AKUNTANSI SORE', 0, NULL),
(29, 4, 'D3 PERHOTELAN', 1, 'D3 Perhotelan'),
(30, 4, 'D1 AKADEMI PARIWISATA', 0, NULL),
(31, 4, 'ILMU PEMERINTAHAN', 1, 'Ilmu Pemerintahan'),
(32, 4, 'ILMU PEMERINTAHAN (NON REGULER)', 0, NULL),
(33, 4, 'ILMU KOMUNIKASI', 1, 'Ilkom'),
(34, 4, 'ILMU KOMUNIKASI (NON REGULER)', 0, NULL),
(35, 5, 'MANAJEMEN INFORMATIKA', 1, 'MI'),
(36, 5, 'MANAJEMEN INFORMATIKA SORE', 0, NULL),
(37, 5, 'TEKNIK SIPIL', 1, 'Sipil'),
(38, 5, 'TEKNIK SIPIL SORE', 0, NULL),
(39, 5, 'TEKNIK ELEKTRO', 1, 'Elektro'),
(40, 5, 'TEKNIK ELEKTRO SORE', 0, NULL),
(41, 5, 'TEKNIK MESIN', 1, 'Mesin'),
(42, 5, 'TEKNIK MESIN SORE', 0, NULL),
(43, 5, 'TEKNIK INFORMATIKA', 1, 'TI'),
(44, 5, 'TEKNIK INFORMATIKA SORE', 0, NULL),
(45, 5, 'TEKNIK LINGKUNGAN', 1, 'Lingkungan'),
(46, 5, 'SISTEM INFORMASI', 1, 'SI'),
(47, 6, 'PSIKOLOGI', 1, 'Psikologi'),
(48, 6, 'PSIKOLOGI SORE', 0, NULL),
(49, 7, 'PROFESI NERS', 1, 'Ners'),
(50, 7, 'PROFESI NERS SORE', 0, NULL),
(51, 7, 'ILMU KEPERAWATAN', 1, 'Ilmu Keperawatan'),
(52, 7, 'ILMU KEPERAWATAN SORE', 0, NULL),
(53, 7, 'ILMU KEPERAWATAN SORE B', 0, NULL),
(54, 7, 'D3 KEPERAWATAN', 1, 'D3 Keperawatan'),
(55, 7, 'D3 KEPERAWATAN SORE', 0, NULL),
(56, 8, 'PENDIDIKAN AGAMA ISLAM', 1, 'PAI'),
(57, 8, 'EKONOMI SYARIAH', 1, 'ES'),
(58, 8, 'EKONOMI SYARIAH SORE', 0, NULL),
(59, 9, 'MAGISTER MANAJEMEN', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

DROP TABLE IF EXISTS `ta`;
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
-- Indexes for table `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prodii` (`id_prodi`),
  ADD KEY `fk_taa` (`id_ta`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `mk`
--
ALTER TABLE `mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- Constraints for table `mk`
--
ALTER TABLE `mk`
  ADD CONSTRAINT `fk_prodii` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_taa` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE;

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
