-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 08:14 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
(140, 1, 3, '', 3, 21, 'TEKNOLOGI PRODUKSI TANAMAN UMBI-UMBIAN', 'MJU.AGT-423', '00301 16000 - 45', '2022-10-17'),
(141, 1, 3, '', 3, 21, 'TEKNOLOGI PRODUKSI TANAMAN LEGUMINOSA', 'MJU.AGT-422', '00112 16000', '2022-10-19'),
(142, 1, 3, '', 3, 21, 'STATISTIK PERTANIAN', 'MJU.PTN-02', '00301 16000', '2022-10-19'),
(143, 1, 3, '', 3, 21, 'RANCANGAN PERCOBAAN', 'MJU.AGT-212', '00109 16000', '2022-10-19'),
(144, 1, 3, '', 3, 21, 'PEMULIAAN TANAMAN', 'MJU.AGT-222', '00301 16000', '2022-10-19'),
(145, 4, 3, '', 4, 26, 'PEDOMAN EKUIVALENSI MATA KULIAH DAN KONVERSI NILAI', '-', '-', '2022-10-17'),
(146, 4, 3, '', 4, 26, 'KURIKULUM PROGRAM STUDI MANAJEMEN', '-', '00401 10000 - 01', '2022-10-25'),
(147, 1, 3, '', 3, 21, 'URBAN AGRIKULTUR DAN HIDROPONIK', 'MJU.PTN-09', '00103 16000', '2022-10-03'),
(148, 1, 3, '', 3, 23, 'URBAN AGRIKULTUR DAN HIDROPONIK', 'MJU.PTN-09', '00302 16000 - 09', '2022-10-03'),
(149, 1, 3, '', 3, 25, 'URBAN AGRIKULTUR DAN HIDROPONIK', 'MJU.PTN-09', '00303 16000', '2022-10-04'),
(150, 1, 3, '', 2, 17, 'PENGEMBANGAN MEDIA PEMBELAJARAN INOVATIF', 'MJU.MAT-026', '00202 12000', '2022-10-04'),
(151, 1, 3, '', 9, 58, 'DASAR-DASAR BISNIS ISLAM', 'MJU.ESYA-032', '00902 13000', '2022-10-04'),
(152, 1, 3, '', 8, 52, 'KONSEP DASAR KEPERAWATAN', 'MJU.IKEP-02', '00802 13007', '2022-10-04'),
(153, 1, 3, '', 8, 52, 'PEMENUHAN KEBUTUHAN DASAR MANUSIA', 'MJU.IKEP-01', '00801 16069', '2022-10-04'),
(154, 1, 3, '', 9, 58, 'STUDI KELAYAKAN BISNIS ISLAM', 'MJU.ESYA-034', '00902 13000', '2022-10-10'),
(155, 1, 3, '', 9, 58, 'MANAJEMEN BISNIS ONLINE (DIGITAL MARKETING)', 'MJU.ESYA-036', '00902 13000', '2022-10-10'),
(156, 1, 3, '', 3, 21, 'KETAHANAN PANGAN', 'MJU.PTN-07', '00301 16000 - 07', '2022-10-10'),
(157, 1, 3, '', 3, 21, 'TEKNIK PERLINDUNGAN TANAMAN', 'MJU.PTN-13', '00114 16000', '2022-10-10'),
(158, 1, 3, '', 3, 21, 'TEKNOLOGI PENGENDALIAN GULMA', 'MJU.AGT-234', '00301 16000 - 39', '2022-10-12'),
(159, 1, 3, '', 3, 23, 'MANAJEMEN PEMASARAN', 'MJU.AGB-103', '00302 16000', '2022-10-13'),
(160, 1, 3, '', 3, 23, 'DEMOGRAFI', 'MJU.AGB-215', '00302 16000', '2022-10-13'),
(161, 1, 3, '', 3, 21, 'TEKNOLOGI PRODUKSI TANAMAN UMBI-UMBIAN', 'MJU.AGT-423', '00301 16000 - 45', '2022-10-17'),
(162, 1, 3, '', 5, 30, 'F & B SERVICE OPERATION II', 'MJU.HTL-029', '00401 10000 - 01', '2022-10-25'),
(163, 3, 3, '', 9, 58, 'FIQIH MUAMALAH', 'MJU.ESYA-008', '-', '2022-10-26'),
(164, 1, 3, '', 8, 55, 'KOMUNIKASI', 'KEP-20', '00802 13024', '2022-10-25'),
(165, 1, 3, '', 8, 55, 'PATOFISIOLOGI', 'MJU.KEP-14', '00802 13014', '2022-10-25'),
(166, 1, 3, '', 8, 55, 'BAHASA INGGRIS KEPERAWATAN 2', 'MU-024', '00802 13030', '2022-10-25'),
(167, 1, 3, '', 8, 55, 'KEPERAWATAN GERONTIK', 'MU-040', '00802 13040', '2022-10-25'),
(168, 1, 3, '', 8, 55, 'BAHASA INGGRIS', 'MJU.KES-01', '00802 13030', '2022-10-25'),
(169, 1, 3, '', 1, 11, 'PRAKTIK PERADILAN PERDATA', 'HUM-029', '00100 12000', '2022-10-25'),
(170, 1, 3, '', 1, 11, 'PRAKTIK MEDIASI', 'HUM-031', '00100 12000', '2022-10-25'),
(171, 1, 3, '', 1, 11, 'PENGANTAR HUKUM INDONESIA', 'HUM-002', '-', '2022-10-25'),
(172, 1, 3, '', 1, 11, 'HUKUM INTERNASIONAL', 'HKW-322', '00100 12000', '2022-10-25'),
(173, 1, 3, '', 1, 11, 'HUKUM ACARA PIDANA', 'HUM-012', '00100 12000', '2022-10-25'),
(174, 1, 3, '', 1, 11, 'PENGANTAR ILMU HUKUM', 'HUM-001', '-', '2022-10-25'),
(175, 1, 3, '', 1, 11, 'BAHASA INGGRIS HUKUM', 'HUM-001', '-', '2022-10-25'),
(176, 1, 3, '', 1, 11, 'PRAKTEK PERADILAN PIDANA KEJAKSAAN', 'HUM-026', '00100 12000', '2022-10-25'),
(177, 1, 3, '', 1, 11, 'HUKUM DAGANG', 'HUM-010', '-', '2022-10-25'),
(178, 1, 3, '', 2, 17, 'STATISTIKA DASAR', 'MJU.MAT-021', '00202 12000', '2022-10-25'),
(179, 1, 3, '', 2, 17, 'GEOMETRI ANALITIK', 'MJU.MAT-007', '00202 12000', '2022-10-25'),
(180, 1, 3, '', 2, 17, 'METODOLOGI PENELITIAN', 'MJU.MAT-035', '00202 12000', '2022-10-25'),
(181, 1, 3, '', 2, 17, 'STRATEGI PEMBELAJARAN MATEMATIKA', 'MJU.MAT-031', '00202 12000', '2022-10-25'),
(182, 1, 3, '', 3, 21, 'TEKNOLOGI PENGOLAHAN PANGAN', 'MJU.PTN-05', '00301 16000 - 05', '2022-10-25'),
(183, 1, 3, '', 3, 23, 'METODOLOGI PENELITIAN AGRIBISNIS', 'MJU.AGB-219', '00302 16000', '2022-10-25'),
(184, 1, 3, '', 5, 32, 'PELAYANAN PUBLIK', 'MKK-14', '00501 13000', '2022-10-25'),
(185, 1, 3, '', 5, 32, 'TATA KELOLA PEMILU', 'MKK-39', '-', '2022-10-25'),
(186, 1, 3, '', 5, 32, 'PENGADAAN BARANG DAN JASA PEMERINTAH', 'MKK-35', '00501 13000', '2022-10-25'),
(187, 1, 3, '', 5, 34, 'STAKEHOLDERS RELATIONS', 'MJU.IK-0022', '00502 13000', '2022-10-25'),
(188, 1, 3, '', 5, 34, 'DASAR-DASAR ILMU KOMUNIKASI', 'MJU.IK-002', '00502 13000', '2022-10-25'),
(189, 1, 3, '', 7, 48, 'PSIKOLOGI SOSIAL I', 'MJU.IPSI.PD-13', '00700 13000', '2022-10-25'),
(190, 1, 3, '', 7, 48, 'PRAKTEK KONSTRUKSI ALAT UKUR', 'MJU.IPSI.PD-21', '01000 13000', '2022-10-25'),
(191, 1, 3, '', 7, 48, 'DINAMIKA KELOMPOK', 'MJU.IPSI.AP-01', '00700 13000', '2022-10-25'),
(192, 1, 3, '', 7, 48, 'TEORI BELAJAR', 'MJU.IPSI.PD-15', '00700 13000', '2022-10-25'),
(193, 1, 3, '', 7, 48, 'KONSTRUKSI ALAT UKUR', 'MJU.IPSI.PD-20', '00700 13000', '2022-10-25'),
(194, 1, 3, '', 9, 58, 'STUDI AL-QUR\'AN', 'MJU.90-01', '00902 13000', '2022-10-25'),
(195, 1, 3, '', 9, 58, 'MANAJEMEN SDM PERBANKAN SYARIAH', 'MJU.ESYA-030', '00902 13000', '2022-10-25'),
(196, 1, 3, '', 9, 58, 'EKONOMI MIKRO', 'MJU.ESYA-003', '00902 13000', '2022-10-25'),
(197, 1, 3, '', 8, 52, 'ILMU BIOMEDIK DASAR', 'MJU.IKEP-03', '00801 13005', '2022-10-25'),
(198, 1, 3, '', 8, 52, 'KEPERAWATAN GERONTIK', 'MJU.60-13', '00801 13050', '2022-10-25'),
(199, 1, 3, '', 8, 52, 'SISTEM INFORMASI KEPERAWATAN', 'MJU.IKEP-11', '00801 13021', '2022-10-25'),
(200, 1, 3, '', 8, 52, 'BAHASA INGGRIS UMUM', 'MJU.60-01', '00801 13003', '2022-10-25'),
(201, 1, 3, '', 8, 52, 'MANAJEMEN MUTU PELAYANAN KESEHATAN', 'MJU.IKEP-29', '00801 13053', '2022-10-25'),
(202, 2, 3, 'KOMUNIKASI', 8, 55, 'KOMUNIKASI', 'KEP-20', '-', '2022-10-25'),
(203, 2, 3, 'ARGUMENTATIVE SPEAKING', 2, 16, 'ARGUMENTATIVE SPEAKING', 'MJU.KIP.BING-021', '00201 13000', '2022-10-25'),
(204, 2, 3, 'RESPONSIVE SPEAKING', 2, 16, 'RESPONSIVE SPEAKING', 'MJU.KIP.BING-019', '00201 13000', '2022-10-25'),
(205, 3, 3, '', 8, 52, 'KEPERAWATAN JIWA', '-', '-', '2022-10-25'),
(206, 2, 3, 'EKONOMI MIKRO', 9, 58, 'EKONOMI MIKRO', 'MJU.ESYA-003', '00902 17000', '2022-10-26'),
(207, 3, 3, '', 2, 17, 'BUKU AJAR GEOMETRI TRANSFORMASI', 'MJU.MAT-036', '00202 14000', '2022-10-27'),
(208, 1, 3, '', 8, 52, 'TERAPI KOMPLEMENTER', 'MJU.KEP.K-53', '00801 13052', '2022-10-22'),
(209, 2, 3, 'STUDI AL-QUR\'AN', 9, 58, 'STUDI AL-QUR\'AN', 'MJU.90-01', '00902 13000', '2022-11-01'),
(210, 1, 3, '', 8, 52, 'FALSAFAH DAN TEORI KEPERAWATAN', 'MJU.IKEP-04', '-', '2022-11-02'),
(211, 1, 3, '', 8, 55, 'PSIKOLOGI', 'MJU.KEP-10', '00802 13006', '2022-11-02'),
(212, 1, 3, '', 8, 55, 'KEPERAWATAN ANAK', 'KEP-27', '00802 13029', '2022-11-02'),
(213, 1, 3, '', 8, 55, 'ILMU BIOMEDIK DASAR', '-', '00802 13005', '2022-11-02'),
(214, 1, 3, '', 8, 55, 'KESELAMATAN DAN KESEHATAN KERJA (K3)', 'MJU.KEP-12', '00802 13022', '2022-11-02'),
(215, 1, 3, '', 1, 11, 'SOSIOLOGI HUKUM', 'HUM-011', '-', '2022-11-02'),
(216, 1, 3, '', 1, 11, 'HUKUM INTERNASIONAL', 'HUM-015', '00601 16000', '2022-11-02'),
(218, 2, 3, 'KEPERAWATAN PSIKIATRI', 8, 53, 'KEPERAWATAN PSIKIATRI', '-', '-', '2022-11-02'),
(219, 1, 3, '', 7, 48, 'KOMUNIKASI TERAPAN', 'MJU.IPSI AP-02', '00700 13000', '2022-11-03'),
(221, 1, 3, '', 8, 50, 'MANAJEMEN KEPERAWATAN', 'MJU.NERS-07', '00801 13063', '2022-11-04'),
(222, 1, 3, '', 7, 48, 'KESEHATAN MENTAL', 'MJU.IPSI.PD-12', '00700 13000', '2022-11-04'),
(223, 1, 3, '', 7, 48, 'WAWANCARA', 'MJU.IPSI.DIAG-02', '00700 13000', '2022-11-04'),
(224, 1, 3, '', 7, 48, 'PRAKTEK INTERVENSI INDIVIDU', 'MJU.IPSI.INT-04', '00700 13000', '2022-11-04'),
(225, 1, 3, '', 7, 48, 'OBSERVASI', 'MJU.IPSI.DIAG-01', '00700 13000', '2022-11-04'),
(226, 1, 3, '', 7, 48, 'INTERVENSI INDIVIDU', 'MJU.IPSI.INT-03', '00700 13000', '2022-11-04'),
(227, 1, 3, '', 7, 48, 'SEJARAH PSIKOLOGI', 'MJU.IPSI.PD-05', '00700 13000', '2022-11-04'),
(228, 1, 3, '', 7, 48, 'PSIKOLOGI PERKEMBANGAN', 'MJU.IPSI.PD-03', '00700 13000', '2022-11-04'),
(229, 1, 3, '', 7, 48, 'PSIKOLOGI DASAR 1', 'MJU.IPSI.PD-01', '01000 13000', '2022-11-04'),
(230, 1, 3, '', 7, 48, 'PSIKOLOGI KONSUMEN', 'MJU.IPSI.AP-04', '00700 13000', '2022-11-04'),
(231, 1, 3, '', 7, 48, 'PSIKOLOGI SUMBER DAYA MANUSIA', 'MJU.IPSI.AP-03', '00700 13000', '2022-11-04'),
(232, 1, 3, '', 7, 48, 'PSIKOLOGI LINTAS BUDAYA', 'MJU.IPSI.PD-24', '00700 13000', '2022-11-04'),
(233, 1, 3, '', 7, 48, 'ASESMEN KOGNITIF', 'MJU.IPSI.DIAG-03', '00700 13000', '2022-11-04'),
(234, 1, 3, '', 7, 48, 'PRAKTEK ASESMEN KOGNITIF', 'MJU.IPSI.DIAG-04', '00700 13000', '2022-11-04'),
(235, 1, 3, '', 7, 48, 'PRAKTEK INTERVENSI KOMUNITAS', 'MJU.IPSI.DIAG-04', '00700 13000', '2022-11-04'),
(236, 1, 3, '', 7, 48, 'METODOLOGI PENELITIAN KUALITATIF', 'MJU.IPSI.PD-23', '00700 13000', '2022-11-04'),
(237, 1, 3, '', 7, 48, 'INTERVENSI KOMUNITAS', 'MJU.IPSI.DIAG-07', '00700 13000', '2022-11-04'),
(238, 1, 3, '', 7, 48, 'PSIKOLOGI SOSIAL II', 'MJU.IPSI.PD-14', '00700 13000', '2022-11-04'),
(239, 1, 3, '', 7, 48, 'PSIKOLOGI DASAR 2', 'MJU.IPSI.PD-02', '01000 13000', '2022-11-04'),
(240, 1, 3, '', 8, 52, 'KOMUNIKASI TERAPEUTIK KEPERAWATAN', 'MJU.IKEP-14', '00801 13019', '2022-11-04'),
(241, 2, 3, 'DASAR-DASAR BISNIS ISLAM', 9, 58, 'DASAR-DASAR BISNIS ISLAM', 'MJU.ESYA-003', '00902 17000', '2022-11-08'),
(242, 2, 3, 'MANAJEMEN BISNIS ONLINE (DIGITAL MARKETING)', 9, 58, 'MANAJEMEN BISNIS ONLINE (DIGITAL MARKETING)', 'MJU.ESYA-036', '00902 17000', '2022-11-08'),
(243, 2, 3, 'MANAJEMEN SDM PERBANKAN SYARIAH', 9, 58, 'MANAJEMEN SDM PERBANKAN SYARIAH', 'MJU.ESYA-030', '00902 17000', '2022-10-26'),
(244, 1, 3, '', 1, 11, 'HUKUM PERLINDUNGAN KONSUMEN', 'HUM-056', '00100 12000', '2022-11-07'),
(245, 1, 3, '', 1, 11, 'HUKUM INVESTASI', 'HUM-058', '00100 12000', '2022-11-07'),
(246, 1, 3, '', 1, 11, 'HUKUM SURAT BERHARGA', 'HUM-059', '00100 12000', '2022-11-07'),
(247, 1, 3, '', 2, 15, 'KRITIK SASTRA', 'MJU.BIND-013', '00204 13000', '2022-11-03'),
(248, 1, 3, '', 2, 15, 'DRAMA INDONESIA', 'MJU.BIND-012', '00204 13000', '2022-11-03'),
(249, 1, 3, '', 2, 15, 'PROFIL PENDIDIK', 'MJU.60-003', '00204 13000', '2022-11-03'),
(250, 1, 3, '', 2, 15, 'KETERAMPILAN MENULIS', 'MJU.BIND-031', '00204 13000', '2022-11-03'),
(251, 1, 3, '', 2, 15, 'SOSIOLINGUISTRIK', 'MJU.BIND-006', '00204 13000', '2022-11-03'),
(252, 1, 3, '', 2, 17, 'KAJIAN KURIKULUM SEKOLAH', 'MJU.MAT-028', '00202 12000', '2022-11-03'),
(253, 1, 3, '', 2, 17, 'PROPOSAL PENELITIAN', 'MJU.MAT-036', '00202 12000', '2022-11-03'),
(254, 1, 3, '', 2, 17, 'GEOMETRI TRANSFORMASI', 'MJU.MAT-008', '-', '2022-11-03'),
(255, 1, 3, '', 2, 17, 'SEJARAH DAN FILSAFAT MATEMATIKA', 'MJU.60-04', '00202 12000', '2022-11-03'),
(256, 1, 3, '', 2, 17, 'PERENCANAAN PEMBELAJARAN MATEMATIKA', 'MJU.MAT-034', '00202 12000', '2022-11-03'),
(257, 1, 3, '', 2, 17, 'ANALISIS VARIABEL KOMPLEKS', 'MJU.MAT-017', '00202 12000', '2022-11-03'),
(258, 1, 3, '', 2, 17, 'MICROTEACHING', 'MJU.MAT-037', '00202 12000', '2022-11-03'),
(259, 1, 3, '', 2, 17, 'PENGEMBANGAN BAHAN AJAR', 'MJU.MAT-027', '00202 12000', '2022-11-03'),
(260, 1, 3, '', 1, 11, 'PRAKTIK PERADILAN AGAMA', 'HUM-030', '00100 12000', '2022-11-08'),
(261, 1, 3, '', 8, 50, 'KEPERAWATAN MEDIKAL BEDAH', 'MJU.NERS-02', '00801 13059', '2022-11-08'),
(262, 1, 3, '', 8, 52, 'KEPERAWATAN KESEHATAN JIWA II', 'MJU.IKEP-20', '00801 13037', '2022-11-08'),
(263, 1, 3, '', 8, 52, 'PRAKTIK KLINIK KEPERAWATAN MEDIKAL BEDAH', 'MJU.IKEP-28', '00801 13049', '2022-11-08'),
(264, 1, 3, '', 8, 52, 'KEPERAWATAN DEWASA SISTEM KARDIOVASKULER, RESPIRATORI DAN HEMATOLOGI', 'MJU.IKEP-12', '00801 13076', '2022-11-08'),
(265, 1, 3, '', 8, 52, 'KEPERAWATAN MEDIKAL BEDAH III', 'MJU.IKEP-18', '00801 13035', '2022-11-08'),
(266, 1, 3, '', 8, 53, 'PROSES KEPERAWATAN DAN BERPIKIR KRITIS', 'MJU.IKEP-07', '00801 13020', '2022-11-08'),
(267, 1, 3, '', 8, 53, 'METODOLOGI PENELITIAN', 'MJU.IKEP-23', '00801 13041', '2022-11-08'),
(268, 1, 3, '', 2, 20, 'PROFIL PENDIDIK', 'MJU.60-03', '00202 12000', '2022-11-07'),
(269, 1, 3, '', 2, 20, 'EVALUASI PEMBELAJARAN PENJAS', 'MJU.POR-052', '00207 13000', '2022-11-07'),
(270, 1, 3, '', 5, 30, 'BAR OPERATION', 'MJU.HTL-030', '00401 10000 - 01', '2022-11-09'),
(271, 1, 3, '', 8, 52, 'KEPERAWATAN KOMUNITAS I', 'MJU.KEP.K-43', '00801 13038', '2022-11-10'),
(272, 1, 3, '', 8, 52, 'PSIKOSOSIAL BUDAYA DALAM KEPERAWATAN', 'MJU.IKEP-07', '00801 13013', '2022-11-10'),
(273, 1, 3, '', 3, 25, 'FISIKA', 'MJU.TIP-101', '00303 16000 - 06', '2022-11-10'),
(274, 1, 3, '', 2, 20, 'ILMU KEPELATIHAN OLAHRAGA', 'MJU.POR-039', '00207 13000', '2022-11-10'),
(275, 1, 3, '', 2, 20, 'PENELITIAN PENJAS DAN OLAHRAGA', 'MJU.POR-046', '00207 13000', '2022-11-10'),
(276, 1, 3, '', 2, 20, 'KETERAMPILAN DASAR SEPAKBOLA', 'MJU.POR-024', '00207 13000', '2022-11-10'),
(277, 1, 3, '', 2, 20, 'KAJIAN KURIKULUM PENJAS', 'MJU.POR-051', '00207 13000 1', '2022-11-10'),
(278, 1, 3, '', 2, 20, 'SEMINAR KEOLAHRAGAAN', 'MJU.POR-043', '00207 13000', '2022-11-10'),
(279, 1, 3, '', 2, 20, 'DASAR-DASAR PENJAS OLAHRAGA', 'MJU.POR-003', '00207 13000', '2022-11-10'),
(280, 1, 3, '', 2, 20, 'MICROTEACHING', 'MJU.POR-053', '00207 13000', '2022-11-10'),
(281, 1, 3, '', 2, 20, 'PEMBELAJARAN ATLETIK', 'MJU.POR-015', '00207 13000', '2022-11-10'),
(282, 1, 3, '', 2, 20, 'PEMBELAJARAN BOLA VOLI', 'MJU.POR-021', '00207 13000', '2022-11-10'),
(283, 1, 3, '', 2, 20, 'PEMBELAJARAN BOLA BASKET', 'MJU.POR-023', '00207 13000', '2022-11-10'),
(284, 1, 3, '', 2, 20, 'PEMBELAJARAN SENAM IRAMA', 'MJU.POR-019', '00207 13000', '2022-11-10'),
(285, 1, 3, '', 2, 20, 'PERMAINAN TENIS MEJA', 'MJU.POR-031', '00207 13000', '2022-11-10'),
(286, 1, 3, '', 2, 20, 'PERMAINAN SEPAK TAKRAW', 'MJU.POR-037', '00207 13000', '2022-11-10'),
(287, 1, 3, '', 2, 20, 'BIOMEKANIKA OLAHRAGA', 'MJU.POR-009', '00207 13000', '2022-11-10'),
(288, 1, 3, '', 1, 11, 'PRAKTIK PERANCANGAN KONTRAK', 'HUM-032', '00100 12000', '2022-11-10'),
(289, 1, 3, '', 1, 11, 'PRAKTIK PERADILAN PIDANA-PENGADILAN', 'HUM-025', '00100 12000', '2022-11-10'),
(290, 1, 3, '', 1, 11, 'HUKUM PIDANA ISLAM', 'HUM-063', '-', '2022-11-10'),
(291, 1, 3, '', 1, 11, 'ILMU NEGARA', 'HUM-003', '00100 12000', '2022-11-10'),
(292, 1, 3, '', 1, 11, 'HUKUM KELEMBAGANEGARAAN', 'HUM-065', '00100 12000', '2022-11-10'),
(293, 1, 3, '', 5, 30, 'FRONT OFFICE OPERATION II', 'MJU.HTL-019', '00401 10000 - 01', '2022-10-22'),
(294, 2, 3, 'STUDI KELAYAKAN BISNIS ISLAM', 9, 58, 'STUDI KELAYAKAN BISNIS ISLAM', 'MJU.ESYA-034', '00902 17000', '2022-10-25'),
(295, 1, 3, '', 8, 55, 'PRAKTIK KLINIK KEPERAWATAN MEDIKAL BEDAH II', 'MJU.KEP-045', '00802 13045', '2022-11-09'),
(296, 1, 3, '', 8, 55, 'KEPERAWATAN MEDIKAL BEDAH I', 'MJU.KEP-025', '00802 13027', '2022-11-08'),
(297, 1, 3, '', 8, 55, 'PRAKTIK KLINIK KEPERAWATAN MEDIKAL BEDAH I', 'MJU.KEP-042', '00802 13042', '2022-11-08'),
(298, 1, 3, '', 2, 20, 'PEMBELAJARAN BULU TANGKIS', 'MJU.POR-029', '00207 13000', '2022-11-14'),
(299, 2, 3, 'KETERAMPILAN TENIS MEJA', 2, 20, 'KETERAMPILAN TENIS MEJA', 'MJU.POR-031', '00204 13000', '2022-11-14'),
(300, 2, 3, 'BIOMEKANIK OLAHRAGA', 2, 20, 'BIOMEKANIK OLAHRAGA', '-', '-', '2022-11-14'),
(301, 2, 3, 'PEMBELAJARAN ATLETIK', 2, 20, 'PEMBELAJARAN ATLETIK', '-', '-', '2022-11-14'),
(302, 2, 3, 'KETERAMPILAN DASAR BOLA VOLI', 2, 20, 'KETERAMPILAN DASAR BOLA VOLI', 'MJU.POR-020', '00204 13000', '2022-11-14'),
(303, 1, 3, '', 1, 11, 'HUKUM ADMINISTRASI NEGARA', 'HUM-0144', '00100 12000', '2022-11-12');

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
(8, 'Ns. LUH TITI HANDAYANI, M.Kes', ''),
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
(20, 'H. SUYATNA, S.H., M.Hum.', ''),
(21, 'Ns. ZUHROTUL EKA YULIS, S.Kep., M.Kes.', ''),
(22, 'Ns. DIAN RATNA ELMAGHFUROH, S.Kep., M.Kes.', ''),
(23, 'H.M. ALI LUTFI, S.H., M.H.', ''),
(24, 'ICHA CAHYANING FITRI, SH., MH.', ''),
(25, 'FINA ROSALINA, S.H., M.H.', ''),
(26, 'DJOKO PURWANTO, S.H., M.Hum.', '0725016301'),
(27, 'Dr. HARI UTOMO, SH., M.H.', ''),
(28, 'DENYY MAY TIMOR, S.H., M.Kn.', ''),
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
(59, 'AGUS MILU SUSETYO, M.Pd., MCE', ''),
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
(77, 'KUNI HIKMAH HIDAYANTI, M.Pd.', ''),
(78, 'LARAS SEKAR ARUM, SP., M. Biotek', '0708089202'),
(79, 'Ir. ISKANDAR UMARIE, M.P.', '0003016401'),
(80, 'AHMAD IZZUDDIN, SE., MM.', ''),
(81, 'Dr. Ir. EKO BUDI SATOTO, M.MT.', ''),
(82, 'Dra. RETNO ENDAH SUPENI, M.M.', ''),
(83, 'NURSAIDAH, S.E., M.M.', ''),
(84, 'YOHANES GUNAWAN WIBOWO, S.E., M.M.', ''),
(85, 'HADI JATMIKO, SST.Par., M.Si.', ''),
(86, 'YOGA DWI WINDY KUSUMA NINGTYAS, S.Pd., M.Sc.', '0730038902'),
(87, 'MIFTAHUL HASANAH, M.E.I.', '0701128804'),
(88, 'Ns. KOMARUDIN, M.Kep., Sp.Kep.J.', ''),
(89, 'QISTHIYAH KARIMAH, S.Pd., M.Pd.', ''),
(90, 'Dr. FATQURHOHMAN, M.Pd.', '0711028602'),
(91, 'PUTRI ROBIATUL ADAWIYAH, S.Sos., M.Si.', ''),
(92, 'Dr. RIA ANGIN, M.Si.', ''),
(93, 'IIN ERVINA, S.Psi., M.Si.', ''),
(94, 'Ns. RANY AGUSTIN WULANDARI, S.Kep., M.Kep.', ''),
(95, 'Ns. RESTI UTAMI, S.Kep., M.Kep.', ''),
(96, 'JANUARIYA LAILI, S.Psi., M.Psi.', ''),
(97, 'Dra. FESTA YUMPI RAHMANAWATI, M.Si., Psikolog', ''),
(98, 'DZARNA, M.Pd.', '1988020111503631'),
(99, 'EKA NOVA ALI VARDANI, M.Pd.', ''),
(100, 'Dr. LADY AGUSTINA, M.Pd.', '0722088102'),
(101, 'ROHMAD WAHID R., M.Si.', ''),
(102, 'HANA PUSPITA EKA FIRDAUS, S.Pd., M.Pd.', '0714069002'),
(103, 'Ns. SASMIYANTO, S.Kep., M.Kes.', ''),
(104, 'Ns. SUSI WAHYUNING ASIH, S.Kep., M.Kep.', ''),
(105, 'Dr.  RIZKI APRILIYANTO', ''),
(106, 'AULYA NANDA PRAFITASARI, M.Pd.', ''),
(107, 'BAHTIAR HARI HARDOVI, M.Pd.', ''),
(108, 'PRAMUKHTIKO SURYO KENCONO, S.H., M.H.', '0002096502');

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
  `jumlah_mk` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`id`, `id_ta`, `id_prodi`, `jumlah_mk`) VALUES
(1, 1, 11, 0),
(2, 1, 14, 0),
(3, 1, 15, 0),
(4, 1, 16, 0),
(5, 1, 17, 0),
(6, 1, 18, 0),
(7, 1, 20, 0),
(8, 1, 21, 0),
(9, 1, 23, 0),
(10, 1, 25, 0),
(11, 1, 26, 0),
(12, 1, 28, 0),
(13, 1, 30, 0),
(14, 1, 32, 0),
(15, 1, 34, 0),
(16, 1, 36, 0),
(17, 1, 38, 0),
(18, 1, 40, 0),
(19, 1, 42, 0),
(20, 1, 44, 0),
(21, 1, 46, 0),
(22, 1, 47, 0),
(23, 1, 48, 0),
(24, 1, 50, 0),
(25, 1, 52, 0),
(26, 1, 55, 0),
(27, 1, 57, 0),
(28, 1, 58, 0),
(29, 1, 60, 0),
(30, 2, 11, 0),
(31, 2, 14, 0),
(32, 2, 15, 0),
(33, 2, 16, 0),
(34, 2, 17, 0),
(35, 2, 18, 0),
(36, 2, 20, 0),
(37, 2, 21, 0),
(38, 2, 23, 0),
(39, 2, 25, 0),
(40, 2, 26, 0),
(41, 2, 28, 0),
(42, 2, 30, 0),
(43, 2, 32, 0),
(44, 2, 34, 0),
(45, 2, 36, 0),
(46, 2, 38, 0),
(47, 2, 40, 0),
(48, 2, 42, 0),
(49, 2, 44, 0),
(50, 2, 46, 0),
(51, 2, 47, 0),
(52, 2, 48, 0),
(53, 2, 50, 0),
(54, 2, 52, 0),
(55, 2, 55, 0),
(56, 2, 57, 0),
(57, 2, 58, 0),
(58, 2, 60, 0),
(59, 3, 11, 33),
(60, 3, 14, 24),
(61, 3, 15, 32),
(62, 3, 16, 37),
(63, 3, 17, 37),
(64, 3, 18, 28),
(65, 3, 20, 36),
(66, 3, 21, 37),
(67, 3, 23, 29),
(68, 3, 25, 35),
(69, 3, 26, 31),
(70, 3, 28, 29),
(71, 3, 30, 21),
(72, 3, 32, 27),
(73, 3, 34, 27),
(74, 3, 36, 0),
(75, 3, 38, 43),
(76, 3, 40, 40),
(77, 3, 42, 7),
(78, 3, 44, 37),
(79, 3, 46, 0),
(80, 3, 47, 0),
(81, 3, 48, 35),
(82, 3, 50, 6),
(83, 3, 52, 28),
(84, 3, 55, 20),
(85, 3, 57, 32),
(86, 3, 58, 29),
(87, 3, 60, 11);

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
(193, 140, 31),
(194, 140, 78),
(195, 141, 79),
(196, 142, 79),
(197, 143, 79),
(198, 144, 79),
(200, 146, 80),
(201, 146, 81),
(202, 146, 82),
(203, 146, 83),
(204, 146, 84),
(205, 147, 44),
(206, 148, 44),
(207, 149, 44),
(208, 150, 86),
(209, 151, 87),
(210, 152, 15),
(211, 153, 7),
(212, 154, 87),
(213, 155, 87),
(215, 157, 66),
(216, 156, 31),
(217, 158, 31),
(218, 159, 72),
(219, 160, 72),
(222, 145, 80),
(223, 161, 31),
(224, 161, 78),
(225, 162, 85),
(226, 163, 68),
(227, 164, 2),
(228, 164, 88),
(229, 165, 14),
(230, 165, 54),
(231, 166, 55),
(232, 167, 55),
(233, 167, 22),
(234, 168, 55),
(235, 168, 7),
(236, 169, 29),
(237, 170, 29),
(238, 171, 17),
(239, 172, 19),
(240, 173, 20),
(241, 173, 25),
(242, 174, 17),
(243, 175, 89),
(244, 176, 20),
(245, 177, 18),
(246, 178, 90),
(247, 179, 90),
(248, 180, 90),
(249, 181, 90),
(250, 182, 31),
(251, 182, 78),
(252, 183, 37),
(253, 184, 91),
(254, 185, 92),
(255, 186, 91),
(256, 187, 11),
(257, 188, 11),
(258, 189, 50),
(259, 189, 64),
(260, 190, 50),
(261, 190, 69),
(262, 191, 50),
(263, 191, 64),
(264, 192, 69),
(265, 192, 93),
(266, 193, 69),
(267, 193, 50),
(268, 194, 68),
(269, 195, 68),
(270, 196, 68),
(271, 197, 54),
(272, 198, 55),
(273, 198, 22),
(274, 199, 5),
(275, 200, 55),
(276, 201, 7),
(277, 201, 53),
(278, 201, 22),
(279, 202, 2),
(280, 203, 13),
(281, 204, 13),
(282, 205, 2),
(283, 205, 94),
(284, 206, 68),
(285, 207, 90),
(286, 208, 14),
(287, 208, 16),
(288, 209, 68),
(289, 210, 1),
(290, 210, 5),
(291, 210, 8),
(292, 210, 2),
(293, 211, 15),
(294, 212, 1),
(295, 212, 21),
(296, 212, 95),
(297, 213, 54),
(298, 214, 53),
(299, 214, 7),
(300, 215, 43),
(301, 216, 43),
(303, 218, 2),
(304, 218, 88),
(305, 218, 15),
(306, 219, 63),
(307, 219, 69),
(310, 221, 53),
(311, 221, 7),
(312, 222, 47),
(313, 222, 48),
(314, 223, 47),
(315, 223, 48),
(316, 224, 47),
(317, 224, 48),
(318, 224, 67),
(319, 225, 47),
(320, 225, 48),
(321, 226, 47),
(322, 226, 48),
(323, 226, 67),
(324, 227, 49),
(325, 227, 93),
(326, 228, 93),
(327, 229, 93),
(328, 229, 49),
(329, 230, 63),
(330, 230, 64),
(331, 230, 96),
(332, 231, 63),
(333, 231, 64),
(334, 231, 96),
(335, 232, 64),
(336, 233, 46),
(337, 233, 69),
(338, 233, 96),
(339, 234, 46),
(340, 234, 69),
(341, 235, 46),
(342, 235, 49),
(343, 235, 96),
(344, 236, 46),
(345, 236, 97),
(346, 237, 49),
(347, 237, 46),
(348, 237, 96),
(349, 238, 46),
(350, 238, 50),
(351, 239, 49),
(352, 239, 93),
(353, 240, 2),
(354, 240, 88),
(355, 240, 15),
(356, 241, 87),
(357, 242, 87),
(358, 243, 68),
(359, 244, 32),
(360, 245, 32),
(361, 246, 32),
(363, 248, 98),
(364, 247, 98),
(365, 249, 60),
(366, 250, 99),
(367, 251, 60),
(368, 252, 100),
(369, 253, 100),
(370, 254, 101),
(371, 255, 102),
(372, 256, 102),
(373, 257, 86),
(374, 258, 100),
(375, 259, 100),
(376, 259, 102),
(377, 260, 23),
(378, 261, 10),
(379, 261, 33),
(380, 261, 103),
(381, 261, 14),
(382, 261, 54),
(383, 261, 34),
(384, 262, 15),
(385, 263, 10),
(386, 263, 33),
(387, 263, 103),
(388, 264, 10),
(389, 264, 103),
(390, 264, 33),
(391, 264, 34),
(392, 265, 10),
(393, 265, 33),
(394, 266, 1),
(395, 266, 22),
(396, 267, 1),
(397, 267, 53),
(398, 268, 100),
(399, 269, 59),
(400, 270, 85),
(401, 271, 16),
(402, 271, 9),
(403, 272, 104),
(404, 272, 95),
(405, 273, 31),
(406, 273, 38),
(407, 274, 105),
(408, 275, 105),
(409, 276, 105),
(410, 277, 106),
(411, 278, 105),
(412, 279, 105),
(413, 280, 105),
(414, 281, 105),
(415, 282, 107),
(416, 283, 107),
(417, 284, 107),
(418, 285, 107),
(419, 286, 107),
(420, 287, 105),
(421, 288, 28),
(422, 289, 42),
(423, 290, 43),
(424, 291, 40),
(425, 292, 26),
(426, 293, 85),
(427, 294, 87),
(428, 295, 10),
(429, 295, 8),
(430, 295, 14),
(431, 295, 33),
(432, 295, 34),
(433, 295, 103),
(434, 296, 10),
(435, 296, 8),
(436, 296, 103),
(437, 296, 33),
(438, 296, 34),
(439, 297, 10),
(440, 297, 8),
(441, 297, 14),
(442, 297, 33),
(443, 297, 34),
(444, 297, 103),
(445, 298, 107),
(446, 299, 107),
(447, 300, 105),
(448, 301, 105),
(449, 302, 107),
(450, 303, 58);

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
(60, 10, 'MAGISTER MANAJEMEN', 'pasca@unmuhjember.ac.id', 1, 'Pasca');

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
(2, '2021 Genap'),
(3, '2022 Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'firdaus', 'admin!');

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
  ADD KEY `fk_taa` (`id_ta`),
  ADD KEY `fk_prodi` (`id_prodi`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `mk`
--
ALTER TABLE `mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `penyusun`
--
ALTER TABLE `penyusun`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_ta` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
