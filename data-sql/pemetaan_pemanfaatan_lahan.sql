-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2020 at 08:13 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemetaan_pemanfaatan_lahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `nid` int(11) NOT NULL,
  `parent_nid` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`nid`, `parent_nid`, `name`, `serial`, `type`, `latitude`, `longitude`, `status`, `image`) VALUES
(1, '0', 'Provinsi Aceh', '11', '1', '4.695135', '96.7493993', '1', 'proklamasi2.jpg'),
(2, '0', 'Provinsi Sumatera Utara', '12', '1', '2.1153547', '99.5450974', '1', 'Suku-Batak-Sumatera-Utara-Pixabay-1024x650.jpg'),
(3, '0', 'Provinsi Sumatera Barat', '13', '1', '-0.7399397', '100.8000051', '1', 'Rumah-Adat-Sumatera-Barat.jpg'),
(4, '0', 'Provinsi Riau', '14', '1', '0.2933469', '101.7068294', '1', 'riau.jpg'),
(5, '0', 'Provinsi Jambi', '15', '1', '-1.4851831', '102.4380581', '1', 'jambi.jpg'),
(6, '0', 'Provinsi Sumatera Selatan', '16', '1', '-3.3194374', '103.914399', '1', 'sumsel1.png'),
(7, '0', 'Provinsi Bengkulu', '17', '1', '-3.5778471', '102.3463875', '1', 'bengkulu.jpg'),
(8, '0', 'Provinsi Lampung', '18', '1', '-4.5585849', '105.4068079', '1', 'lampung.jpg'),
(9, '0', 'Provinsi Kepulauan Bangka Belitung', '19', '1', '-2.7410513', '106.4405872', '1', 'default.png'),
(10, '0', 'Provinsi Kepulauan Riau', '21', '1', '3.9456514', '108.1428669', '1', 'default.png'),
(11, '0', 'Provinsi DKI Jakarta', '31', '1', '-6.211544', '106.845172', '1', 'default.png'),
(12, '0', 'Provinsi Jawa Barat', '32', '1', '-7.090911', '107.668887', '1', 'default.png'),
(13, '0', 'Provinsi Jawa Tengah', '33', '1', '-7.150975', '110.1402594', '1', 'default.png'),
(14, '0', 'Provinsi DI Yogyakarta', '34', '1', '-7.8753849', '110.4262088', '1', 'default.png'),
(15, '0', 'Provinsi Jawa Timur', '35', '1', '-7.5360639', '112.2384017', '1', 'default.png'),
(16, '0', 'Provinsi Banten', '36', '1', '-6.4058172', '106.0640179', '1', 'default.png'),
(17, '0', 'Provinsi Bali', '51', '1', '-8.4095178', '115.188916', '1', 'default.png'),
(18, '0', 'Provinsi Nusa Tenggara Barat', '52', '1', '-8.6529334', '117.3616476', '1', 'default.png'),
(19, '0', 'Provinsi Nusa Tenggara Timur', '53', '1', '-8.6573819', '121.0793705', '1', 'default.png'),
(20, '0', 'Provinsi Kalimantan Barat', '61', '1', '-0.2787808', '111.4752851', '1', 'kalbar.jpg'),
(21, '0', 'Provinsi Kalimantan Tengah', '62', '1', '-1.6814878', '113.3823545', '1', 'default.png'),
(22, '0', 'Provinsi Kalimantan Selatan', '63', '1', '-3.0926415', '115.2837585', '1', 'default.png'),
(23, '0', 'Provinsi Kalimantan Timur', '64', '1', '1.6406296', '116.419389', '1', 'default.png'),
(24, '0', 'Provinsi Sulawesi Utara', '71', '1', '0.6246932', '123.9750018', '1', 'default.png'),
(25, '0', 'Provinsi Sulawesi Tengah', '72', '1', '-1.4300254', '121.4456179', '1', 'default.png'),
(26, '0', 'Provinsi Sulawesi Selatan', '73', '1', '-3.6687994', '119.9740534', '1', 'default.png'),
(27, '0', 'Provinsi Sulawesi Tenggara', '74', '1', '-4.14491', '122.174605', '1', 'default.png'),
(28, '0', 'Provinsi Gorontalo', '75', '1', '0.6999372', '122.4467238', '1', 'default.png'),
(29, '0', 'Provinsi Sulawesi Barat', '76', '1', '-2.8441371', '119.2320784', '1', 'default.png'),
(30, '0', 'Provinsi Maluku', '81', '1', '-3.2384616', '130.1452734', '1', 'default.png'),
(31, '0', 'Provinsi Maluku Utara', '82', '1', '1.5709993', '127.8087693', '1', 'default.png'),
(32, '0', 'Provinsi Papua Barat', '91', '1', '-1.3361154', '133.1747162', '1', 'default.png'),
(33, '0', 'Provinsi Papua', '94', '1', '-4.269928', '138.0803529', '1', 'default.png'),
(562, '74', 'Kota Tangerang Selatan', '0', '2', '-6.2888889', '106.7180556', '1', 'default.png'),
(821, '15', 'Kabupaten Banyuwangi', '1501', '2', '-8.2186111', '114.3669444', '1', 'default.png'),
(823, '15', 'Kabupaten Madiun', '1502', '2', '-7.627753', '111.505483', '1', 'default.png'),
(824, '15', 'Kabupaten Ponorogo', '1503', '2', '-7.867827', '111.466003', '1', 'default.png'),
(825, '15', 'Kabupaten Magetan', '1504', '2', '-7.6493413', '111.3381593', '1', 'default.png'),
(826, '15', 'Kabupaten Pacitan', '1505', '2', '-8.204614', '111.08769', '1', 'default.png'),
(827, '15', 'Kabupaten Ngawi', '1506', '2', '-7.38993', '111.46193', '1', 'default.png'),
(828, '15', 'Kabupaten Bangkalan', '1507', '2', '-7.0306912', '112.7450068', '1', 'default.png'),
(829, '15', 'Kabupaten Kediri', '1508', '2', '-7.809356', '112.032356', '1', 'default.png'),
(830, '15', 'Kabupaten Bondowoso', '1509', '2', '-7.917704', '113.813483', '1', 'default.png'),
(831, '15', 'Kabupaten Blitar', '1510', '2', '-8.1014419', '112.162762', '1', 'default.png'),
(832, '15', 'Kabupaten Trenggalek', '1511', '2', '-8.05', '111.7166667', '1', 'default.png'),
(833, '15', 'Kabupaten Tulungagung', '1512', '2', '-8.0666667', '111.9', '1', 'default.png'),
(834, '15', 'Kabupaten Nganjuk', '1513', '2', '-7.602932', '111.901808', '1', 'default.png'),
(835, '15', 'Kabupaten Situbondo', '1514', '2', '-7.702534', '113.955605', '1', 'default.png'),
(836, '15', 'Kabupaten Malang', '1515', '2', '-8.0495643', '112.6884549', '1', 'default.png'),
(837, '15', 'Kabupaten Jember', '1516', '2', '-8.172357', '113.700302', '1', 'default.png'),
(838, '15', 'Kabupaten Sumenep', '1517', '2', '-6.9253999', '113.9060624', '1', 'default.png'),
(839, '15', 'Kabupaten Pasuruan', '1518', '2', '-6.8623098', '108.8001936', '1', 'default.png'),
(840, '15', 'Kabupaten Pamekasan', '1519', '2', '-7.1666667', '113.4666667', '1', 'default.png'),
(841, '15', 'Kabupaten Probolinggo', '1520', '2', '-7.753965', '113.210675', '1', 'default.png'),
(842, '15', 'Kabupaten Lumajang', '1521', '2', '-8.137022', '113.226601', '1', 'default.png'),
(843, '15', 'Kabupaten Bojonegoro', '1522', '2', '0.882681', '124.4669566', '1', 'default.png'),
(844, '15', 'Kabupaten Tuban', '1523', '2', '-8.7493146', '115.1711298', '1', 'default.png'),
(845, '15', 'Kabupaten Lamongan', '1524', '2', '-7.406153', '109.3946794', '1', 'default.png'),
(846, '15', 'Kabupaten Sidoarjo', '1525', '2', '-7.4530278', '112.7173389', '1', 'default.png'),
(847, '15', 'Kabupaten Sampang', '1526', '2', '-7.5782556', '109.2058436', '1', 'default.png'),
(848, '15', 'Kabupaten Mojokerto', '1527', '2', '-7.488075', '112.427027', '1', 'default.png'),
(849, '15', 'Kabupaten Gresik', '1528', '2', '-7.15665', '112.6555', '1', 'default.png'),
(850, '15', 'Kabupaten Jombang', '1529', '2', '-7.5468395', '112.2264794', '1', 'default.png'),
(851, '15', 'Kota Mojokerto', '1530', '2', '-7.4722222', '112.4336111', '1', 'default.png'),
(852, '15', 'Kota Surabaya', '1531', '2', '-7.289166', '112.734398', '1', 'default.png'),
(853, '15', 'Kota Madiun', '1532', '2', '-7.629714', '111.513702', '1', 'default.png'),
(854, '15', 'Kota Blitar', '1533', '2', '-8.1', '112.15', '1', 'default.png'),
(855, '15', 'Kota Malang', '1534', '2', '-7.981894', '112.626503', '1', 'default.png'),
(856, '15', 'Kota Batu', '1535', '2', '-7.8671', '112.5239', '1', 'default.png'),
(857, '15', 'Kota Pasuruan', '1536', '2', '-7.644872', '112.903297', '1', 'default.png'),
(858, '15', 'Kota Kediri', '1537', '2', '-7.816895', '112.011398', '1', 'default.png'),
(859, '15', 'Kota Probolinggo', '1538', '2', '-7.756928', '113.211502', '1', 'default.png'),
(925, '5', 'Kabupaten Batanghari', '501', '2', '-1.7083922', '103.0817903', '1', 'default.png'),
(926, '5', 'Kabupaten Bungo', '502', '2', '-1.6401338', '101.8891721', '1', 'default.png'),
(927, '5', 'Kabupaten Kerinci', '503', '2', '-1.8720467', '101.4339148', '1', 'default.png'),
(928, '5', 'Kabupaten Merangin', '504', '2', '-2.1752789', '101.9804613', '1', 'default.png'),
(929, '5', 'Kabupaten Muaro Jambi', '505', '2', '-1.596672', '103.615799', '1', 'default.png'),
(930, '5', 'Kabupaten Sarolangun', '506', '2', '-2.2654937', '102.6905326', '1', 'default.png'),
(931, '5', 'Kabupaten Tanjung Jabung Barat', '507', '2', '-1.2332122', '103.7984428', '1', 'default.png'),
(932, '5', 'Kabupaten Tanjung Jabung Timur', '508', '2', '-1.3291599', '103.89973', '1', 'default.png'),
(933, '5', 'Kabupaten Tebo', '509', '2', '-1.2592999', '102.3463875', '1', 'default.png'),
(934, '5', 'Kota Jambi', '510', '2', '-1.596672', '103.615799', '1', 'default.png'),
(935, '5', 'Kota Sungai Penuh', '511', '2', '-2.06314', '101.387199', '1', 'default.png'),
(1326, '1', 'Kabupaten Simeulue', '1109', '2', '2.583333', '96.083333', '1', 'default.png'),
(1327, '1', 'Kabupaten Aceh Singkil', '1102', '2', '2.3589459', '97.87216', '1', 'default.png'),
(1328, '1', 'Kabupaten Aceh Selatan', '1101', '2', '3.3115056', '97.3516558', '1', 'default.png'),
(1329, '1', 'Kabupaten Aceh Tenggara', '1102', '2', '3.3088666', '97.6982272', '1', 'default.png'),
(1330, '1', 'Kabupaten Aceh Timur', '1103', '2', '5.255443', '95.9885456', '1', 'default.png'),
(1331, '1', 'Kabupaten Aceh Tengah', '1104', '2', '4.4482641', '96.8350999', '1', 'default.png'),
(1332, '1', 'Kabupaten Aceh Barat', '1105', '2', '4.4542745', '96.1526985', '1', 'default.png'),
(1333, '1', 'Kabupaten Aceh Besar', '1106', '2', '5.4529168', '95.4777811', '1', 'default.png'),
(1334, '1', 'Kabupaten Pidie', '1107', '2', '5.0742659', '95.940971', '1', 'default.png'),
(1335, '1', 'Kabupaten Bireuen', '1111', '2', '5.18254', '96.89005', '1', 'default.png'),
(1336, '1', 'Kabupaten Aceh Utara', '1108', '2', '4.9786331', '97.2221421', '1', 'default.png'),
(1337, '1', 'Kabupaten Aceh Barat Daya', '1112', '2', '3.0512643', '97.3368031', '1', 'default.png'),
(1338, '1', 'Kabupaten Gayo Lues', '1113', '2', '3.955165', '97.3516558', '1', 'default.png'),
(1339, '1', 'Kabupaten Aceh Tamiang', '1116', '2', '4.2328871', '98.0028892', '1', 'default.png'),
(1340, '1', 'Kabupaten Nagan Raya', '1115', '2', '4.1248406', '96.4929797', '1', 'default.png'),
(1341, '1', 'Kabupaten Aceh Jaya', '1114', '2', '4.7873684', '95.6457951', '1', 'default.png'),
(1342, '1', 'Kabupaten Bener Meriah', '1117', '2', '4.7748348', '97.0068393', '1', 'default.png'),
(1343, '1', 'Kabupaten Pidie Jaya', '1118', '2', '5.1548063', '96.195132', '1', 'default.png'),
(1344, '1', 'Kota Banda Aceh', '1171', '2', '5.55', '95.3166667', '1', 'default.png'),
(1345, '1', 'Kota Sabang', '1172', '2', '5.8946929', '95.3192982', '1', 'default.png'),
(1346, '1', 'Kota Langsa', '1174', '2', '4.48', '97.9633333', '1', 'default.png'),
(1347, '1', 'Kota Lhokseumawe', '1173', '2', '5.1880556', '97.1402778', '1', 'default.png'),
(1348, '1', 'Kota Subulussalam', '1175', '2', '2.6449927', '98.0165205', '1', 'default.png'),
(1349, '2', 'Kabupaten Nias', '1204', '2', '-8.1712591', '113.7111274', '1', 'default.png'),
(1350, '2', 'Kabupaten Mandailing Natal', '1213', '2', '0.7432372', '99.3673084', '1', 'default.png'),
(1351, '2', 'Kabupaten Tapanuli Selatan', '1203', '2', '1.5774933', '99.2785583', '1', 'default.png'),
(1352, '2', 'Kabupaten Tapanuli Tengah', '1201', '2', '1.8493299', '98.704075', '1', 'default.png'),
(1353, '2', 'Kabupaten Tapanuli Utara', '1202', '2', '2.0405246', '99.1013498', '1', 'default.png'),
(1354, '2', 'Kabupaten Toba Samosir', '1212', '2', '2.3502398', '99.2785583', '1', 'default.png'),
(1355, '2', 'Kabupaten Labuhanbatu', '1210', '2', '2.3439863', '100.1703257', '1', 'default.png'),
(1356, '2', 'Kabupaten Asahan', '1209', '2', '2.8174722', '99.634135', '1', 'default.png'),
(1357, '2', 'Kabupaten Simalungun', '1208', '2', '2.9781612', '99.2785583', '1', 'default.png'),
(1358, '2', 'Kabupaten Dairi', '1211', '2', '2.8675801', '98.265058', '1', 'default.png'),
(1359, '2', 'Kabupaten Karo', '1206', '2', '3.1052909', '98.265058', '1', 'default.png'),
(1360, '2', 'Kabupaten Deli Serdang', '1207', '2', '3.4201802', '98.704075', '1', 'default.png'),
(1361, '2', 'Kabupaten Langkat', '1205', '2', '3.8653916', '98.3088441', '1', 'default.png'),
(1362, '2', 'Kabupaten Nias Selatan', '1214', '2', '0.7086091', '97.8286368', '1', 'default.png'),
(1363, '2', 'Kabupaten Humbang Hasundutan', '1216', '2', '2.1988508', '98.5721016', '1', 'default.png'),
(1364, '2', 'Kabupaten Pakpak Bharat', '1215', '2', '2.545786', '98.299838', '1', 'default.png'),
(1365, '2', 'Kabupaten Samosir', '1217', '2', '2.5833333', '98.8166667', '1', 'default.png'),
(1366, '2', 'Kabupaten Serdang Bedagai', '1218', '2', '3.3371694', '99.0571089', '1', 'default.png'),
(1367, '2', 'Kabupaten Batu Bara', '1219', '2', '3.1740979', '99.5006143', '1', 'default.png'),
(1368, '2', 'Kabupaten Padang Lawas Utara', '1220', '2', '1.5758644', '99.634135', '1', 'default.png'),
(1369, '2', 'Kabupaten Padang Lawas', '1221', '2', '1.1186977', '99.8124935', '1', 'default.png'),
(1370, '2', 'Kota Sibolga', '1273', '2', '1.7403745', '98.7827988', '1', 'default.png'),
(1371, '2', 'Kota Tanjung Balai', '1274', '2', '2.965122', '99.800331', '1', 'default.png'),
(1372, '2', 'Kota Pematang Siantar', '1272', '2', '2.96', '99.06', '1', 'default.png'),
(1373, '2', 'Kota Tebing Tinggi', '1276', '2', '3.3856205', '99.2009815', '1', 'default.png'),
(1374, '2', 'Kota Medan', '1271', '2', '3.585242', '98.6755979', '1', 'default.png'),
(1375, '2', 'Kota Binjai', '1275', '2', '3.594462', '98.482246', '1', 'default.png'),
(1376, '2', 'Kota Padangsidimpuan', '1277', '2', '1.380424', '99.273972', '1', 'default.png'),
(1377, '3', 'Kabupaten Kepulauan Mentawai', '1309', '2', '-1.426001', '98.9245343', '1', 'default.png'),
(1378, '3', 'Kabupaten Pesisir Selatan', '1301', '2', '-1.7223147', '100.8903099', '1', 'default.png'),
(1379, '3', 'Kabupaten Solok', '1302', '2', '-0.803027', '100.644402', '1', 'default.png'),
(1380, '3', 'Kabupaten Sijunjung', '1303', '2', '-0.6881586', '100.997658', '1', 'default.png'),
(1381, '3', 'Kabupaten Tanah Datar', '1304', '2', '-0.4797043', '100.5746224', '1', 'default.png'),
(1382, '3', 'Kabupaten Padang Pariaman', '1305', '2', '-0.5546757', '100.2151578', '1', 'default.png'),
(1383, '3', 'Kabupaten Agam', '1306', '2', '-0.2209392', '100.1703257', '1', 'default.png'),
(1384, '3', 'Kabupaten Lima Puluh Kota', '1307', '2', '3.168216', '99.4187929', '1', 'default.png'),
(1385, '3', 'Kabupaten Pasaman', '1308', '2', '0.1288752', '99.7901781', '1', 'default.png'),
(1386, '3', 'Kabupaten Solok Selatan', '1311', '2', '-1.4157329', '101.2523792', '1', 'default.png'),
(1387, '3', 'Kabupaten Dharmas Raya', '1310', '2', '-1.1120568', '101.6157773', '1', 'default.png'),
(1388, '3', 'Kabupaten Pasaman Barat', '1312', '2', '0.2213005', '99.634135', '1', 'default.png'),
(1389, '3', 'Kota Padang', '1371', '2', '-0.95', '100.3530556', '1', 'default.png'),
(1390, '3', 'Kota Solok', '1372', '2', '-0.803027', '100.644402', '1', 'default.png'),
(1391, '3', 'Kota Sawah Lunto', '1373', '2', '-0.6810286', '100.7763604', '1', 'default.png'),
(1392, '3', 'Kota Padang Panjang', '1374', '2', '-0.470679', '100.4059456', '1', 'default.png'),
(1393, '3', 'Kota Bukittinggi', '1375', '2', '-0.3055556', '100.3691667', '1', 'default.png'),
(1394, '3', 'Kota Payakumbuh', '1376', '2', '-0.22887', '100.632301', '1', 'default.png'),
(1395, '3', 'Kota Pariaman', '1377', '2', '-0.6264389', '100.1179574', '1', 'default.png'),
(1396, '4', 'Kabupaten Kuantan Singingi', '1409', '2', '-0.4411596', '101.5248055', '1', 'default.png'),
(1397, '4', 'Kabupaten Indragiri Hulu', '1402', '2', '-0.7361181', '102.2547919', '1', 'default.png'),
(1398, '4', 'Kabupaten Indragiri Hilir', '1404', '2', '-0.1456733', '102.989615', '1', 'default.png'),
(1399, '4', 'Kabupaten Pelalawan', '1405', '2', '0.441415', '102.088699', '1', 'default.png'),
(1400, '4', 'Kabupaten S I A K', '1408', '2', '-0.789275', '113.921327', '1', 'default.png'),
(1401, '4', 'Kabupaten Kampar', '1401', '2', '0.146671', '101.1617356', '1', 'default.png'),
(1402, '4', 'Kabupaten Rokan Hulu', '1406', '2', '1.0410934', '100.439656', '1', 'default.png'),
(1403, '4', 'Kabupaten Bengkalis', '1403', '2', '1.4897222', '102.0797222', '1', 'default.png'),
(1404, '4', 'Kabupaten Rokan Hilir', '1407', '2', '1.6463978', '100.8000051', '1', 'default.png'),
(1405, '4', 'Kota Pekanbaru', '1471', '2', '0.5333333', '101.45', '1', 'default.png'),
(1406, '4', 'Kota Dumai', '1472', '2', '1.665742', '101.447601', '1', 'default.png'),
(1407, '5', 'Kabupaten Kerinci', '1501', '2', '-1.697', '101.264', '1', 'default.png'),
(1408, '5', 'Kabupaten Merangin', '1502', '2', '-2.1752789', '101.9804613', '1', 'default.png'),
(1409, '5', 'Kabupaten Sarolangun', '1503', '2', '-2.2654937', '102.6905326', '1', 'default.png'),
(1410, '5', 'Kabupaten Batang Hari', '1504', '2', '-1.7083922', '103.0817903', '1', 'default.png'),
(1411, '5', 'Kabupaten Muaro Jambi', '1505', '2', '-1.596672', '103.615799', '1', 'default.png'),
(1412, '5', 'Kabupaten Tanjung Jabung Timur', '1507', '2', '-1.3291599', '103.89973', '1', 'default.png'),
(1413, '5', 'Kabupaten Tanjung Jabung Barat', '1506', '2', '-1.2332122', '103.7984428', '1', 'default.png'),
(1414, '5', 'Kabupaten Tebo', '1509', '2', '-1.2592999', '102.3463875', '1', 'default.png'),
(1415, '5', 'Kabupaten Bungo', '1508', '2', '-1.6401338', '101.8891721', '1', 'default.png'),
(1416, '5', 'Kota Jambi', '1571', '2', '-1.596672', '103.615799', '1', 'default.png'),
(1417, '6', 'Kabupaten Ogan Komering Ulu', '1601', '2', '-4.0283486', '104.0072348', '1', 'default.png'),
(1418, '6', 'Kabupaten Ogan Komering Ilir', '1602', '2', '-3.4559744', '105.2194808', '1', 'default.png'),
(1419, '6', 'Kabupaten Muara Enim', '1603', '2', '-3.651581', '103.770798', '1', 'default.png'),
(1420, '6', 'Kabupaten Lahat', '1604', '2', '-3.7863889', '103.5427778', '1', 'default.png'),
(1421, '6', 'Kabupaten Musi Rawas', '1605', '2', '-2.8625305', '102.989615', '1', 'default.png'),
(1422, '6', 'Kabupaten Musi Banyuasin', '1606', '2', '-2.5442029', '103.7289167', '1', 'default.png'),
(1423, '6', 'Kabupaten Banyu Asin', '1607', '2', '-2.6095639', '104.7520939', '1', 'default.png'),
(1424, '6', 'Kabupaten Ogan Komering Ulu Selatan', '1609', '2', '-4.6681951', '104.0072348', '1', 'default.png'),
(1425, '6', 'Kabupaten Ogan Komering Ulu Timur', '1608', '2', '-3.8567934', '104.7520939', '1', 'default.png'),
(1426, '6', 'Kabupaten Ogan Ilir', '1610', '2', '-3.426544', '104.6121475', '1', 'default.png'),
(1427, '6', 'Kabupaten Empat Lawang', '1611', '2', '-3.7286029', '102.8975098', '1', 'default.png'),
(1428, '6', 'Kota Palembang', '1671', '2', '-2.9911083', '104.7567333', '1', 'default.png'),
(1429, '6', 'Kota Prabumulih', '1674', '2', '-3.440956', '104.235397', '1', 'default.png'),
(1430, '6', 'Kota Pagar Alam', '1672', '2', '-4.03767', '103.265297', '1', 'default.png'),
(1431, '6', 'Kota Lubuklinggau', '1673', '2', '-3.2966667', '102.8616667', '1', 'default.png'),
(1432, '7', 'Kabupaten Bengkulu Selatan', '1701', '2', '-4.3248409', '103.035694', '1', 'default.png'),
(1433, '7', 'Kabupaten Rejang Lebong', '1702', '2', '-3.4548154', '102.6675575', '1', 'default.png'),
(1434, '7', 'Kabupaten Bengkulu Utara', '1703', '2', '-3.4219555', '102.1632718', '1', 'default.png'),
(1435, '7', 'Kabupaten Kaur', '1704', '2', '-4.6792278', '103.4511768', '1', 'default.png'),
(1436, '7', 'Kabupaten Seluma', '1705', '2', '-4.0622929', '102.5642261', '1', 'default.png'),
(1437, '7', 'Kabupaten Mukomuko', '1706', '2', '-2.5760003', '101.1169805', '1', 'default.png'),
(1438, '7', 'Kabupaten Lebong', '1707', '2', '-2.992617', '104.382202', '1', 'default.png'),
(1439, '7', 'Kabupaten Kepahiang', '1708', '2', '-3.651431', '102.578201', '1', 'default.png'),
(1440, '7', 'Kota Bengkulu', '1771', '2', '-3.7955556', '102.2591667', '1', 'default.png'),
(1441, '8', 'Kabupaten Lampung Barat', '1804', '2', '-5.1490396', '104.1930918', '1', 'default.png'),
(1442, '8', 'Kabupaten Tanggamus', '1802', '2', '-5.3027489', '104.5655273', '1', 'default.png'),
(1443, '8', 'Kabupaten Lampung Selatan', '1801', '2', '-5.5622614', '105.5474373', '1', 'default.png'),
(1444, '8', 'Kabupaten Lampung Timur', '1807', '2', '-5.1134995', '105.6881788', '1', 'default.png'),
(1445, '8', 'Kabupaten Lampung Tengah', '1802', '2', '-4.8008086', '105.3131185', '1', 'default.png'),
(1446, '8', 'Kabupaten Lampung Utara', '1803', '2', '-4.8133905', '104.7520939', '1', 'default.png'),
(1447, '8', 'Kabupaten Way Kanan', '1808', '2', '-4.4963689', '104.5655273', '1', 'default.png'),
(1448, '8', 'Kabupaten Tulangbawang', '1812', '2', '-4.3176576', '105.5005483', '1', 'default.png'),
(1449, '8', 'Kabupaten Pesawaran', '1809', '2', '-5.493245', '105.0791228', '1', 'default.png'),
(1450, '8', 'Kota Bandar Lampung', '1871', '2', '-5.45', '105.2666667', '1', 'default.png'),
(1451, '8', 'Kota Metro', '1872', '2', '-5.1166667', '105.3', '1', 'default.png'),
(1452, '9', 'Kabupaten Bangka', '1901', '2', '-2.2884782', '106.0640179', '1', 'default.png'),
(1453, '9', 'Kabupaten Belitung', '1902', '2', '-2.8708938', '107.9531836', '1', 'default.png'),
(1454, '9', 'Kabupaten Bangka Barat', '1905', '2', '-2.2884782', '106.0640179', '1', 'default.png'),
(1455, '9', 'Kabupaten Bangka Tengah', '1904', '2', '-2.2884782', '106.0640179', '1', 'default.png'),
(1456, '9', 'Kabupaten Bangka Selatan', '1903', '2', '-2.2884782', '106.0640179', '1', 'default.png'),
(1457, '9', 'Kabupaten Belitung Timur', '1906', '2', '-2.8708938', '107.9531836', '1', 'default.png'),
(1458, '9', 'Kota Pangkal Pinang', '1971', '2', '-2.129323', '106.109596', '1', 'default.png'),
(1459, '10', 'Kabupaten Karimun', '2102', '2', '1.05', '103.3666667', '1', 'default.png'),
(1460, '10', 'Kabupaten Bintan', '2101', '2', '1.0619173', '104.5189214', '1', 'default.png'),
(1461, '10', 'Kabupaten Natuna', '2103', '2', '3.9329945', '108.1812242', '1', 'default.png'),
(1462, '10', 'Kabupaten Lingga', '2104', '2', '-0.1627686', '104.6354631', '1', 'default.png'),
(1463, '10', 'Kota Batam', '2171', '2', '1.0456264', '104.0304535', '1', 'default.png'),
(1464, '10', 'Kota Tanjung Pinang', '2172', '2', '0.9179205', '104.446464', '1', 'default.png'),
(1465, '11', 'Kabupaten Kepulauan Seribu', '3101', '2', '-5.7985266', '106.5071982', '1', 'default.png'),
(1466, '11', 'Kota Jakarta Selatan', '3174', '2', '-6.332973', '106.807915', '1', 'default.png'),
(1467, '11', 'Kota Jakarta Timur', '3175', '2', '-6.211544', '106.845172', '1', 'default.png'),
(1468, '11', 'Kota Jakarta Pusat', '3171', '2', '-6.211544', '106.845172', '1', 'default.png'),
(1469, '11', 'Kota Jakarta Barat', '3173', '2', '-6.211544', '106.845172', '1', 'default.png'),
(1470, '11', 'Kota Jakarta Utara', '3172', '2', '-6.211544', '106.845172', '1', 'default.png'),
(1471, '12', 'Kabupaten Bogor', '3201', '2', '-6.6', '106.8', '1', 'default.png'),
(1472, '12', 'Kabupaten Sukabumi', '3202', '2', '-6.92405', '106.922203', '1', 'default.png'),
(1473, '12', 'Kabupaten Cianjur', '3203', '2', '-6.8172531', '107.1307289', '1', 'default.png'),
(1474, '12', 'Kabupaten Bandung', '3204', '2', '-6.9147444', '107.6098111', '1', 'default.png'),
(1475, '12', 'Kabupaten Garut', '3205', '2', '-7.227906', '107.908699', '1', 'default.png'),
(1476, '12', 'Kabupaten Tasikmalaya', '3206', '2', '-7.327954', '108.214104', '1', 'default.png'),
(1477, '12', 'Kabupaten Ciamis', '3207', '2', '-7.3333333', '108.35', '1', 'default.png'),
(1478, '12', 'Kabupaten Kuningan', '3208', '2', '-6.9833333', '108.4833333', '1', 'default.png'),
(1479, '12', 'Kabupaten Cirebon', '3209', '2', '-6.715534', '108.564003', '1', 'default.png'),
(1480, '12', 'Kabupaten Majalengka', '3210', '2', '-6.8531026', '108.2258897', '1', 'default.png'),
(1481, '12', 'Kabupaten Sumedang', '3211', '2', '0.6095949', '110.0330554', '1', 'default.png'),
(1482, '12', 'Kabupaten Indramayu', '3212', '2', '-6.336315', '108.325104', '1', 'default.png'),
(1483, '12', 'Kabupaten Subang', '3213', '2', '-6.569361', '107.752403', '1', 'default.png'),
(1484, '12', 'Kabupaten Purwakarta', '3214', '2', '-6.5386806', '107.4499404', '1', 'default.png'),
(1485, '12', 'Kabupaten Karawang', '3215', '2', '-6.3227303', '107.3375791', '1', 'default.png'),
(1486, '12', 'Kabupaten Bekasi', '3216', '2', '-6.2333333', '107', '1', 'default.png'),
(1487, '12', 'Kabupaten Bandung Barat', '3217', '2', '-6.8937121', '107.4321959', '1', 'default.png'),
(1488, '12', 'Kota Bogor', '3271', '2', '-6.6', '106.8', '1', 'default.png'),
(1489, '12', 'Kota Sukabumi', '3272', '2', '-6.92405', '106.922203', '1', 'default.png'),
(1490, '12', 'Kota Bandung', '3273', '2', '-6.9147444', '107.6098111', '1', 'default.png'),
(1491, '12', 'Kota Cirebon', '3274', '2', '-6.715534', '108.564003', '1', 'default.png'),
(1492, '12', 'Kota Bekasi', '3275', '2', '-6.2333333', '107', '1', 'default.png'),
(1493, '12', 'Kota Depok', '3276', '2', '-6.39', '106.83', '1', 'default.png'),
(1494, '12', 'Kota Cimahi', '3277', '2', '-6.880239', '107.5355', '1', 'default.png'),
(1495, '12', 'Kota Tasikmalaya', '3278', '2', '-7.327954', '108.214104', '1', 'default.png'),
(1496, '12', 'Kota Banjar', '3279', '2', '-7.3666667', '108.5333333', '1', 'default.png'),
(1497, '13', 'Kabupaten Cilacap', '3301', '2', '-7.733333', '109', '1', 'default.png'),
(1498, '13', 'Kabupaten Banyumas', '3302', '2', '-7.4832133', '109.140438', '1', 'default.png'),
(1499, '13', 'Kabupaten Purbalingga', '3303', '2', '-7.390747', '109.3638', '1', 'default.png'),
(1500, '13', 'Kabupaten Banjarnegara', '3304', '2', '-7.402706', '109.681396', '1', 'default.png'),
(1501, '13', 'Kabupaten Kebumen', '3305', '2', '-7.678682', '109.656502', '1', 'default.png'),
(1502, '13', 'Kabupaten Purworejo', '3306', '2', '-7.709731', '110.008003', '1', 'default.png'),
(1503, '13', 'Kabupaten Wonosobo', '3307', '2', '-7.362109', '109.899399', '1', 'default.png'),
(1504, '13', 'Kabupaten Magelang', '3308', '2', '-7.481253', '110.213799', '1', 'default.png'),
(1505, '13', 'Kabupaten Boyolali', '3309', '2', '-7.523819', '110.595901', '1', 'default.png'),
(1506, '13', 'Kabupaten Klaten', '3310', '2', '-7.711687', '110.595497', '1', 'default.png'),
(1507, '13', 'Kabupaten Sukoharjo', '3311', '2', '-7.6808818', '110.8195292', '1', 'default.png'),
(1508, '13', 'Kabupaten Wonogiri', '3312', '2', '-7.817782', '110.920601', '1', 'default.png'),
(1509, '13', 'Kabupaten Karanganyar', '3313', '2', '-7.5961111', '110.9508333', '1', 'default.png'),
(1510, '13', 'Kabupaten Sragen', '3314', '2', '-7.430229', '111.021301', '1', 'default.png'),
(1511, '13', 'Kabupaten Grobogan', '3315', '2', '-7.0217194', '110.9625854', '1', 'default.png'),
(1512, '13', 'Kabupaten Blora', '3316', '2', '-6.95', '111.4166667', '1', 'default.png'),
(1513, '13', 'Kabupaten Rembang', '3317', '2', '-6.71124', '111.345299', '1', 'default.png'),
(1514, '13', 'Kabupaten Pati', '3318', '2', '-6.751338', '111.038002', '1', 'default.png'),
(1515, '13', 'Kabupaten Kudus', '3319', '2', '-6.804087', '110.838203', '1', 'default.png'),
(1516, '13', 'Kabupaten Jepara', '3320', '2', '-6.5596059', '110.6717', '1', 'default.png'),
(1517, '13', 'Kabupaten Demak', '3321', '2', '-6.888115', '110.639297', '1', 'default.png'),
(1518, '13', 'Kabupaten Semarang', '3322', '2', '-6.9666667', '110.4166667', '1', 'default.png'),
(1519, '13', 'Kabupaten Temanggung', '3323', '2', '-7.316669', '110.174797', '1', 'default.png'),
(1520, '13', 'Kabupaten Kendal', '3324', '2', '-6.919686', '110.205597', '1', 'default.png'),
(1521, '13', 'Kabupaten Batang', '3325', '2', '-6.8941111', '109.7234519', '1', 'default.png'),
(1522, '13', 'Kabupaten Pekalongan', '3326', '2', '-6.882887', '109.669998', '1', 'default.png'),
(1523, '13', 'Kabupaten Pemalang', '3327', '2', '-6.884234', '109.377998', '1', 'default.png'),
(1524, '13', 'Kabupaten Tegal', '3328', '2', '-6.8666667', '109.1333333', '1', 'default.png'),
(1525, '13', 'Kabupaten Brebes', '3329', '2', '-6.8833333', '109.05', '1', 'default.png'),
(1526, '13', 'Kota Magelang', '3371', '2', '-7.481253', '110.213799', '1', 'default.png'),
(1527, '13', 'Kota Surakarta', '3372', '2', '-7.5666667', '110.8166667', '1', 'default.png'),
(1528, '13', 'Kota Salatiga', '3373', '2', '-7.302328', '110.4729', '1', 'default.png'),
(1529, '13', 'Kota Semarang', '3374', '2', '-6.9666667', '110.4166667', '1', 'default.png'),
(1530, '13', 'Kota Pekalongan', '3375', '2', '-6.882887', '109.669998', '1', 'default.png'),
(1531, '13', 'Kota Tegal', '3376', '2', '-6.8666667', '109.1333333', '1', 'default.png'),
(1532, '14', 'Kabupaten Kulon Progo', '3401', '2', '-7.8266798', '110.1640846', '1', 'default.png'),
(1533, '14', 'Kabupaten Bantul', '3402', '2', '-7.8846111', '110.3341111', '1', 'default.png'),
(1534, '14', 'Kabupaten Gunung Kidul', '3403', '2', '-8.0305091', '110.6168921', '1', 'default.png'),
(1536, '14', 'Kota Yogyakarta', '3471', '2', '-7.797224', '110.368797', '1', 'default.png'),
(1537, '16', 'Kabupaten Pandeglang', '3601', '2', '-6.314835', '106.103897', '1', 'default.png'),
(1538, '16', 'Kabupaten Lebak', '3602', '2', '-6.5643956', '106.2522143', '1', 'default.png'),
(1539, '16', 'Kabupaten Tangerang', '3603', '2', '-6.1783056', '106.6318889', '1', 'default.png'),
(1540, '16', 'Kabupaten Serang', '3604', '2', '-6.12009', '106.150299', '1', 'default.png'),
(1541, '16', 'Kota Tangerang', '3671', '2', '-6.1783056', '106.6318889', '1', 'default.png'),
(1542, '16', 'Kota Cilegon', '3672', '2', '-6.0169825', '106.040506', '1', 'default.png'),
(1543, '16', 'Kota Serang', '3673', '2', '-6.12009', '106.150299', '1', 'default.png'),
(1544, '17', 'Kabupaten Jembrana', '5101', '2', '-8.361852', '114.6418', '1', 'default.png'),
(1545, '17', 'Kabupaten Tabanan', '5102', '2', '-8.544516', '115.119797', '1', 'default.png'),
(1546, '17', 'Kabupaten Badung', '5103', '2', '-8.5819296', '115.1770586', '1', 'default.png'),
(1547, '17', 'Kabupaten Gianyar', '5104', '2', '-8.544185', '115.3255', '1', 'default.png'),
(1548, '17', 'Kabupaten Klungkung', '5105', '2', '-8.5389222', '115.4045111', '1', 'default.png'),
(1549, '17', 'Kabupaten Bangli', '5106', '2', '-8.454303', '115.354897', '1', 'default.png'),
(1550, '17', 'Kabupaten Karang Asem', '5107', '2', '-6.3996057', '108.0503042', '1', 'default.png'),
(1551, '17', 'Kabupaten Buleleng', '5108', '2', '-8.113831', '115.126999', '1', 'default.png'),
(1552, '17', 'Kota Denpasar', '5171', '2', '-8.65629', '115.222099', '1', 'default.png'),
(1553, '18', 'Kabupaten Lombok Barat', '5201', '2', '-8.6464599', '116.1123078', '1', 'default.png'),
(1554, '18', 'Kabupaten Lombok Tengah', '5202', '2', '-8.694623', '116.2777073', '1', 'default.png'),
(1555, '18', 'Kabupaten Lombok Timur', '5203', '2', '-8.5134471', '116.5609857', '1', 'default.png'),
(1556, '18', 'Kabupaten Sumbawa', '5204', '2', '-8.6529334', '117.3616476', '1', 'default.png'),
(1557, '18', 'Kabupaten Dompu', '5205', '2', '-8.4966318', '118.4747173', '1', 'default.png'),
(1558, '18', 'Kabupaten Bima', '5206', '2', '-8.460566', '118.727402', '1', 'default.png'),
(1559, '18', 'Kabupaten Sumbawa Barat', '5207', '2', '-8.9292907', '116.8910342', '1', 'default.png'),
(1560, '18', 'Kota Mataram', '5271', '2', '-8.5833333', '116.1166667', '1', 'default.png'),
(1561, '18', 'Kota Bima', '5272', '2', '-8.460566', '118.727402', '1', 'default.png'),
(1562, '19', 'Kabupaten Sumba Barat', '5312', '2', '-9.6548326', '119.3947135', '1', 'default.png'),
(1563, '19', 'Kabupaten Sumba Timur', '5311', '2', '-9.9802103', '120.3435506', '1', 'default.png'),
(1564, '19', 'Kabupaten Kupang', '5301', '2', '-10.1833333', '123.5833333', '1', 'default.png'),
(1565, '19', 'Kabupaten Timor Tengah Selatan', '5302', '2', '-9.7762816', '124.4198243', '1', 'default.png'),
(1566, '19', 'Kabupaten Timor Tengah Utara', '5303', '2', '-9.4522647', '124.597132', '1', 'default.png'),
(1567, '19', 'Kabupaten Belu', '5304', '2', '-9.4125796', '124.9506625', '1', 'default.png'),
(1568, '19', 'Kabupaten Alor', '5305', '2', '-8.2754027', '124.7298765', '1', 'default.png'),
(1569, '19', 'Kabupaten Lembata', '5313', '2', '-8.4719075', '123.4831906', '1', 'default.png'),
(1570, '19', 'Kabupaten Flores Timur', '5306', '2', '-8.3130942', '122.9663018', '1', 'default.png'),
(1571, '19', 'Kabupaten Sikka', '5307', '2', '-8.6766175', '122.1291843', '1', 'default.png'),
(1572, '19', 'Kabupaten Ende', '5308', '2', '-8.854053', '121.654198', '1', 'default.png'),
(1573, '19', 'Kabupaten Ngada', '5309', '2', '-8.7430424', '120.9876321', '1', 'default.png'),
(1574, '19', 'Kabupaten Manggarai', '5310', '2', '-8.6796987', '120.3896651', '1', 'default.png'),
(1575, '19', 'Kabupaten Rote Ndao', '5314', '2', '-10.7386421', '123.1239049', '1', 'default.png'),
(1576, '19', 'Kabupaten Manggarai Barat', '5315', '2', '-8.6688149', '120.0665236', '1', 'default.png'),
(1577, '19', 'Kabupaten Sumba Tengah', '5317', '2', '-9.4879226', '119.6962677', '1', 'default.png'),
(1578, '19', 'Kabupaten Sumba Barat Daya', '5318', '2', '-9.539139', '119.1390642', '1', 'default.png'),
(1579, '19', 'Kabupaten Nagekeo', '5316', '2', '-8.6753545', '121.3084088', '1', 'default.png'),
(1580, '19', 'Kabupaten Manggarai Timur', '5319', '2', '-8.6206712', '120.6199895', '1', 'default.png'),
(1581, '19', 'Kota Kupang', '5371', '2', '-10.1833333', '123.5833333', '1', 'default.png'),
(1582, '20', 'Kabupaten Sambas', '6101', '2', '1.361328', '109.309998', '1', 'default.png'),
(1583, '20', 'Kabupaten Bengkayang', '6107', '2', '0.8209729', '109.477699', '1', 'default.png'),
(1584, '20', 'Kabupaten Landak', '6108', '2', '0.4237287', '109.7591675', '1', 'default.png'),
(1585, '20', 'Kabupaten Pontianak', '6102', '2', '-0.022523', '109.330307', '1', 'default.png'),
(1586, '20', 'Kabupaten Sanggau', '6103', '2', '0.119275', '110.597298', '1', 'default.png'),
(1587, '20', 'Kabupaten Ketapang', '6104', '2', '-1.859098', '109.971901', '1', 'default.png'),
(1588, '20', 'Kabupaten Sintang', '6105', '2', '0.080238', '111.495499', '1', 'default.png'),
(1589, '20', 'Kabupaten Kapuas Hulu', '6106', '2', '-0.7931004', '113.9060624', '1', 'default.png'),
(1590, '20', 'Kabupaten Sekadau', '6109', '2', '0.015637', '110.888603', '1', 'default.png'),
(1591, '20', 'Kabupaten Melawi', '6110', '2', '-0.7000681', '111.6660725', '1', 'default.png'),
(1592, '20', 'Kabupaten Kayong Utara', '6111', '2', '-0.9225877', '110.0449662', '1', 'default.png'),
(1593, '20', 'Kabupaten Kubu Raya', '6112', '2', '-0.3533938', '109.4735066', '1', 'default.png'),
(1594, '20', 'Kota Pontianak', '6171', '2', '-0.022523', '109.330307', '1', 'default.png'),
(1595, '20', 'Kota Singkawang', '6172', '2', '0.908795', '108.984596', '1', 'default.png'),
(1596, '21', 'Kabupaten Kotawaringin Barat', '6201', '2', '-6.1961131', '106.8630174', '1', 'default.png'),
(1597, '21', 'Kabupaten Kotawaringin Timur', '6202', '2', '-6.1952992', '106.8630737', '1', 'default.png'),
(1598, '21', 'Kabupaten Kapuas', '6203', '2', '-0.0459972', '110.1313251', '1', 'default.png'),
(1599, '21', 'Kabupaten Barito Selatan', '6204', '2', '-1.875943', '114.8092691', '1', 'default.png'),
(1600, '21', 'Kabupaten Barito Utara', '6205', '2', '-0.9587136', '115.094045', '1', 'default.png'),
(1601, '21', 'Kabupaten Sukamara', '6208', '2', '-2.6267517', '111.2368084', '1', 'default.png'),
(1602, '21', 'Kabupaten Lamandau', '6209', '2', '-1.9269166', '111.1891151', '1', 'default.png'),
(1603, '21', 'Kabupaten Seruyan', '6207', '2', '-3.0123467', '112.4291464', '1', 'default.png'),
(1604, '21', 'Kabupaten Katingan', '6206', '2', '-0.9758379', '112.8105512', '1', 'default.png'),
(1605, '21', 'Kabupaten Pulang Pisau', '6211', '2', '-2.6849607', '113.9536466', '1', 'default.png'),
(1606, '21', 'Kabupaten Gunung Mas', '6210', '2', '-6.7052778', '106.9913889', '1', 'default.png'),
(1607, '21', 'Kabupaten Barito Timur', '6213', '2', '-2.0123999', '115.188916', '1', 'default.png'),
(1608, '21', 'Kabupaten Murung Raya', '6212', '2', '-0.1362171', '114.3341432', '1', 'default.png'),
(1609, '21', 'Kota Palangka Raya', '6271', '2', '-2.21', '113.92', '1', 'default.png'),
(1610, '22', 'Kabupaten Tanah Laut', '6301', '2', '-3.7694047', '114.8092691', '1', 'default.png'),
(1611, '22', 'Kabupaten Kota Baru', '6302', '2', '-6.332973', '106.807915', '1', 'default.png'),
(1612, '22', 'Kabupaten Banjar', '6303', '2', '-7.3666667', '108.5333333', '1', 'default.png'),
(1613, '22', 'Kabupaten Barito Kuala', '6304', '2', '-3.0714738', '114.6667939', '1', 'default.png'),
(1614, '22', 'Kabupaten Tapin', '6305', '2', '-2.9160746', '115.0465991', '1', 'default.png'),
(1615, '22', 'Kabupaten Hulu Sungai Selatan', '6306', '2', '-2.7662681', '115.2363408', '1', 'default.png'),
(1616, '22', 'Kabupaten Hulu Sungai Tengah', '6307', '2', '-2.6153162', '115.5207358', '1', 'default.png'),
(1617, '22', 'Kabupaten Hulu Sungai Utara', '6308', '2', '-2.4421225', '115.188916', '1', 'default.png'),
(1618, '22', 'Kabupaten Tabalong', '6309', '2', '-1.864302', '115.5681084', '1', 'default.png'),
(1619, '22', 'Kabupaten Tanah Bumbu', '6310', '2', '-3.4512244', '115.5681084', '1', 'default.png'),
(1620, '22', 'Kabupaten Balangan', '6311', '2', '-2.3260425', '115.6154732', '1', 'default.png'),
(1621, '22', 'Kota Banjarmasin', '6371', '2', '-3.328499', '114.589203', '1', 'default.png'),
(1622, '22', 'Kota Banjar Baru', '6372', '2', '-3.4666667', '114.75', '1', 'default.png'),
(1623, '23', 'Kabupaten Paser', '6401', '2', '-1.7175266', '115.9467997', '1', 'default.png'),
(1624, '23', 'Kabupaten Kutai Barat', '6407', '2', '0.1353881', '115.094045', '1', 'default.png'),
(1625, '23', 'Kabupaten Kutai Kartanegara', '6402', '2', '-0.1336655', '116.6081653', '1', 'default.png'),
(1626, '23', 'Kabupaten Kutai Timur', '6408', '2', '0.9433774', '116.9852422', '1', 'default.png'),
(1627, '23', 'Kabupaten Berau', '6403', '2', '2.0450883', '117.3616476', '1', 'default.png'),
(1628, '23', 'Kabupaten Malinau', '6406', '2', '3.584221', '116.647797', '1', 'default.png'),
(1629, '23', 'Kabupaten Bulungan', '6404', '2', '2.9042476', '116.9852422', '1', 'default.png'),
(1630, '23', 'Kabupaten Nunukan', '6405', '2', '4.0609227', '117.666952', '1', 'default.png'),
(1631, '23', 'Kabupaten Penajam Paser Utara', '6409', '2', '-1.2917094', '116.5137964', '1', 'default.png'),
(1632, '23', 'Kabupaten Tana Tidung', '6410', '2', '3.551869', '117.0794082', '1', 'default.png'),
(1633, '23', 'Kota Balikpapan', '6471', '2', '-1.2635389', '116.8278833', '1', 'default.png'),
(1634, '23', 'Kota Samarinda', '6472', '2', '-0.502183', '117.153801', '1', 'default.png'),
(1635, '23', 'Kota Tarakan', '6473', '2', '3.3', '117.6333333', '1', 'default.png'),
(1636, '23', 'Kota Bontang', '6474', '2', '0.1333333', '117.5', '1', 'default.png'),
(1637, '24', 'Kabupaten Bolaang Mongondow', '7101', '2', '0.6870994', '124.0641419', '1', 'default.png'),
(1638, '24', 'Kabupaten Minahasa', '7102', '2', '1', '124.5833333', '1', 'default.png'),
(1639, '24', 'Kabupaten Kepulauan Sangihe', '7103', '2', '3.5303212', '125.5438967', '1', 'default.png'),
(1640, '24', 'Kabupaten Kepulauan Talaud', '7104', '2', '4.092', '126.768', '1', 'default.png'),
(1641, '24', 'Kabupaten Minahasa Selatan', '7105', '2', '1.0946773', '124.4641848', '1', 'default.png'),
(1642, '24', 'Kabupaten Minahasa Utara', '7106', '2', '1.5327973', '124.994751', '1', 'default.png'),
(1643, '24', 'Kabupaten Bolaang Mongondow Utara', '7108', '2', '0.818691', '123.5280072', '1', 'default.png'),
(1644, '24', 'Kabupaten Siau Tagulandang Biaro', '7109', '2', '2.345964', '125.4124355', '1', 'default.png'),
(1645, '24', 'Kabupaten Minahasa Tenggara', '7107', '2', '1.0278551', '124.7298765', '1', 'default.png'),
(1646, '24', 'Kota Manado', '7171', '2', '1.4917014', '124.842843', '1', 'default.png'),
(1647, '24', 'Kota Bitung', '7172', '2', '1.4553529', '125.204697', '1', 'default.png'),
(1648, '24', 'Kota Tomohon', '7173', '2', '1.3234131', '124.8384504', '1', 'default.png'),
(1649, '24', 'Kota Kotamobagu', '7174', '2', '0.7333333', '124.3166667', '1', 'default.png'),
(1650, '25', 'Kabupaten Banggai Kepulauan', '7207', '2', '-1.6408137', '123.5504076', '1', 'default.png'),
(1651, '25', 'Kabupaten Banggai', '7201', '2', '-1.6408137', '123.5504076', '1', 'default.png'),
(1652, '25', 'Kabupaten Morowali', '7206', '2', '-2.3003072', '121.5370003', '1', 'default.png'),
(1653, '25', 'Kabupaten Poso', '7202', '2', '-1.391922', '120.766998', '1', 'default.png'),
(1654, '25', 'Kabupaten Donggala', '7203', '2', '-0.4233155', '119.8352303', '1', 'default.png'),
(1655, '25', 'Kabupaten Toli-Toli', '7204', '2', '0.8768231', '120.7579834', '1', 'default.png'),
(1656, '25', 'Kabupaten Buol', '7205', '2', '0.9695452', '121.3541631', '1', 'default.png'),
(1657, '25', 'Kabupaten Parigi Moutong', '7208', '2', '0.5817607', '120.8039474', '1', 'default.png'),
(1658, '25', 'Kabupaten Tojo Una-Una', '7209', '2', '-1.098757', '121.5370003', '1', 'default.png'),
(1659, '25', 'Kota Palu', '7271', '2', '-0.898583', '119.850601', '1', 'default.png'),
(1660, '26', 'Kabupaten Selayar', '7301', '2', '-6', '120.5', '1', 'default.png'),
(1661, '26', 'Kabupaten Bulukumba', '7302', '2', '-5.4329368', '120.2051096', '1', 'default.png'),
(1662, '26', 'Kabupaten Bantaeng', '7303', '2', '-5.5169316', '120.0202964', '1', 'default.png'),
(1663, '26', 'Kabupaten Jeneponto', '7304', '2', '-5.554579', '119.6730939', '1', 'default.png'),
(1664, '26', 'Kabupaten Takalar', '7305', '2', '-5.4162493', '119.4875668', '1', 'default.png'),
(1665, '26', 'Kabupaten Gowa', '7306', '2', '-5.3102888', '119.742604', '1', 'default.png'),
(1666, '26', 'Kabupaten Sinjai', '7307', '2', '-5.2171961', '120.112735', '1', 'default.png'),
(1667, '26', 'Kabupaten Maros', '7309', '2', '-4.94695', '119.578903', '1', 'default.png'),
(1668, '26', 'Kabupaten Pangkajene Dan Kepulauan', '7310', '2', '-4.805035', '119.5571677', '1', 'default.png'),
(1669, '26', 'Kabupaten Barru', '7311', '2', '-4.4172651', '119.6730939', '1', 'default.png'),
(1670, '26', 'Kabupaten Bone', '7308', '2', '-2.083333', '120.216667', '1', 'default.png'),
(1671, '26', 'Kabupaten Soppeng', '7312', '2', '-4.3518541', '119.9277947', '1', 'default.png'),
(1672, '26', 'Kabupaten Wajo', '7313', '2', '-4.022229', '120.0665236', '1', 'default.png'),
(1673, '26', 'Kabupaten Sidenreng Rappang', '7314', '2', '-3.7738981', '120.0202964', '1', 'default.png'),
(1674, '26', 'Kabupaten Pinrang', '7315', '2', '-3.793071', '119.6408', '1', 'default.png'),
(1675, '26', 'Kabupaten Enrekang', '7316', '2', '-3.563128', '119.7612', '1', 'default.png'),
(1676, '26', 'Kabupaten Luwu', '7317', '2', '-3.3052214', '120.2512728', '1', 'default.png'),
(1677, '26', 'Kabupaten Tana Toraja', '7318', '2', '-3.0753003', '119.742604', '1', 'default.png'),
(1678, '26', 'Kabupaten Luwu Utara', '7322', '2', '-2.2690446', '119.9740534', '1', 'default.png'),
(1679, '26', 'Kabupaten Luwu Timur', '7324', '2', '-2.5825518', '121.1710389', '1', 'default.png'),
(1680, '26', 'Kota Makassar', '7371', '2', '-5.1333333', '119.4166667', '1', 'default.png'),
(1681, '26', 'Kota Pare-Pare', '7372', '2', '-4.0166667', '119.6236111', '1', 'default.png'),
(1682, '26', 'Kota Palopo', '7373', '2', '-3', '120.2', '1', 'default.png'),
(1683, '27', 'Kabupaten Buton', '7404', '2', '-5.3096355', '122.9888319', '1', 'default.png'),
(1684, '27', 'Kabupaten Muna', '7403', '2', '-4.901629', '122.6277455', '1', 'default.png'),
(1685, '27', 'Kabupaten Konawe', '7402', '2', '-3.9380432', '122.0837445', '1', 'default.png'),
(1686, '27', 'Kabupaten Kolaka', '7401', '2', '-4.049665', '121.593803', '1', 'default.png'),
(1687, '27', 'Kabupaten Konawe Selatan', '7405', '2', '-4.2027915', '122.4467238', '1', 'default.png'),
(1688, '27', 'Kabupaten Bombana', '7406', '2', '-4.6543462', '121.9017954', '1', 'default.png'),
(1689, '27', 'Kabupaten Wakatobi', '7407', '2', '-5.3264442', '123.5951925', '1', 'default.png'),
(1690, '27', 'Kabupaten Kolaka Utara', '7408', '2', '-3.1347227', '121.1710389', '1', 'default.png'),
(1691, '27', 'Kabupaten Buton Utara', '7410', '2', '-4.7023424', '123.0338767', '1', 'default.png'),
(1692, '27', 'Kabupaten Konawe Utara', '7409', '2', '-3.3803291', '122.0837445', '1', 'default.png'),
(1693, '27', 'Kota Kendari', '7471', '2', '-3.972201', '122.5149028', '1', 'default.png'),
(1694, '27', 'Kota Bau-Bau', '7472', '2', '-5.46667', '122.633', '1', 'default.png'),
(1695, '28', 'Kabupaten Boalemo', '7502', '2', '0.7013419', '122.2653887', '1', 'default.png'),
(1696, '28', 'Kabupaten Gorontalo', '7501', '2', '0.5333333', '123.0666667', '1', 'default.png'),
(1697, '28', 'Kabupaten Pohuwato', '7504', '2', '0.7055278', '121.7195459', '1', 'default.png'),
(1698, '28', 'Kabupaten Bone Bolango', '7503', '2', '0.5657885', '123.3486147', '1', 'default.png'),
(1699, '28', 'Kabupaten Gorontalo Utara', '7505', '2', '0.9252647', '122.4920088', '1', 'default.png'),
(1700, '28', 'Kota Gorontalo', '7571', '2', '0.5333333', '123.0666667', '1', 'default.png'),
(1701, '29', 'Kabupaten Majene', '7605', '2', '-3.0297251', '118.9062794', '1', 'default.png'),
(1702, '29', 'Kabupaten Polewali Mandar', '7604', '2', '-3.3419323', '119.1390642', '1', 'default.png'),
(1703, '29', 'Kabupaten Mamasa', '7603', '2', '-2.960135', '119.368202', '1', 'default.png'),
(1704, '29', 'Kabupaten Mamuju', '7602', '2', '-2.7293364', '118.9295737', '1', 'default.png'),
(1705, '29', 'Kabupaten Mamuju Utara', '7601', '2', '-1.5264542', '119.5107708', '1', 'default.png'),
(1706, '30', 'Kabupaten Maluku Tenggara Barat', '8103', '2', '-7.5322642', '131.3611121', '1', 'default.png'),
(1707, '30', 'Kabupaten Maluku Tenggara', '8102', '2', '-5.7512455', '132.7271587', '1', 'default.png'),
(1708, '30', 'Kabupaten Maluku Tengah', '8101', '2', '-3.0166501', '129.4864411', '1', 'default.png'),
(1709, '30', 'Kabupaten Buru Selatan', '8109', '2', '-3.3927754', '126.7819505', '1', 'default.png'),
(1710, '30', 'Kabupaten Kepulauan Aru', '8107', '2', '-6.1946502', '134.5501935', '1', 'default.png'),
(1711, '30', 'Kabupaten Seram Bagian Barat', '8106', '2', '-3.1271575', '128.4008357', '1', 'default.png'),
(1712, '30', 'Kabupaten Seram Bagian Timur', '8105', '2', '-3.4150761', '130.390488', '1', 'default.png'),
(1713, '30', 'Kota Ambon', '8171', '2', '-3.65607', '128.166419', '1', 'default.png'),
(1714, '30', 'KotaTual', '8172', '2', '-5.640851', '132.7475093', '1', 'default.png'),
(1715, '31', 'Kabupaten Halmahera Barat', '8201', '2', '1.3121235', '128.4849923', '1', 'default.png'),
(1716, '31', 'Kabupaten Halmahera Tengah', '8202', '2', '1.3121235', '128.4849923', '1', 'default.png'),
(1717, '31', 'Kabupaten Kepulauan Sula', '8205', '2', '-1.8666667', '125.3666667', '1', 'default.png'),
(1718, '31', 'Kabupaten Halmahera Selatan', '8204', '2', '1.3121235', '128.4849923', '1', 'default.png'),
(1719, '31', 'Kabupaten Halmahera Utara', '8203', '2', '1.3121235', '128.4849923', '1', 'default.png'),
(1720, '31', 'Kabupaten Halmahera Timur', '8206', '2', '1.3121235', '128.4849923', '1', 'default.png'),
(1721, '31', 'Kota Ternate', '8271', '2', '0.7833333', '127.3666667', '1', 'default.png'),
(1722, '31', 'Kota Tidore Kepulauan', '8272', '2', '0.6833333', '127.4', '1', 'default.png'),
(1723, '32', 'Kabupaten Fakfak', '9203', '2', '-2.885237', '132.2658282', '1', 'default.png'),
(1724, '32', 'Kabupaten Kaimana', '9208', '2', '-3.660925', '133.774506', '1', 'default.png'),
(1725, '32', 'Kabupaten Teluk Wondama', '9207', '2', '-2.8551699', '134.3236557', '1', 'default.png'),
(1726, '32', 'Kabupaten Teluk Bintuni', '9206', '2', '-1.9056848', '133.329466', '1', 'default.png'),
(1727, '32', 'Kabupaten Manokwari', '9202', '2', '-0.8614531', '134.0620421', '1', 'default.png'),
(1728, '32', 'Kabupaten Sorong Selatan', '9204', '2', '-0.8666667', '131.25', '1', 'default.png'),
(1729, '32', 'Kota Sorong', '9271', '2', '-0.8666667', '131.25', '1', 'default.png'),
(1730, '32', 'Kabupaten Raja Ampat', '9205', '2', '-1.0915151', '130.8778586', '1', 'default.png'),
(1731, '32', 'Kabupaten Sorong', '9201', '2', '-0.8666667', '131.25', '1', 'default.png'),
(1732, '33', 'Kabupaten Merauke', '9101', '2', '-8.4960406', '140.3945527', '1', 'default.png'),
(1733, '33', 'Kabupaten Jayawijaya', '9102', '2', '-4.0004481', '138.7995122', '1', 'default.png'),
(1734, '33', 'Kabupaten Jayapura', '9103', '2', '-2.533', '140.717', '1', 'default.png'),
(1735, '33', 'Kabupaten Nabire', '9104', '2', '-3.5095462', '135.7520985', '1', 'default.png'),
(1736, '33', 'Kabupaten Kepulauan Yapen', '9105', '2', '-1.7469359', '136.1709012', '1', 'default.png'),
(1737, '33', 'Kabupaten Biak Numfor', '9106', '2', '-1.0381022', '135.9800848', '1', 'default.png'),
(1738, '33', 'Kabupaten Paniai', '9108', '2', '-3.7876441', '136.3624686', '1', 'default.png'),
(1739, '33', 'Kabupaten Puncak Jaya', '9107', '2', '-4.0836111', '137.1847222', '1', 'default.png'),
(1740, '33', 'Kabupaten Mimika', '9109', '2', '-4.4553223', '137.1362125', '1', 'default.png'),
(1741, '33', 'Kabupaten Boven Digoel', '9116', '2', '-5.7400018', '140.3481835', '1', 'default.png'),
(1742, '33', 'Kabupaten Mappi', '9117', '2', '-7.102232', '139.396393', '1', 'default.png'),
(1743, '33', 'Kabupaten Asmat', '9118', '2', '-5.0573958', '138.3988186', '1', 'default.png'),
(1744, '33', 'Kabupaten Yahukimo', '9113', '2', '-4.4939717', '139.5279996', '1', 'default.png'),
(1745, '33', 'Kabupaten Pegunungan Bintang', '9112', '2', '-4.5589872', '140.5135589', '1', 'default.png'),
(1746, '33', 'Kabupaten Tolikara', '9114', '2', '-3.481132', '138.4787258', '1', 'default.png'),
(1747, '33', 'Kabupaten Sarmi', '9110', '2', '-1.868727', '138.743607', '1', 'default.png'),
(1748, '33', 'Kabupaten Keerom', '9111', '2', '-3.3449536', '140.7624493', '1', 'default.png'),
(1749, '33', 'Kabupaten Waropen', '9115', '2', '-2.8435717', '136.670534', '1', 'default.png'),
(1750, '33', 'Kabupaten Supiori', '9119', '2', '-0.7295099', '135.6385125', '1', 'default.png'),
(1751, '33', 'Kabupaten Mamberamo Raya', '9120', '2', '-2.5331255', '137.7637565', '1', 'default.png'),
(1752, '33', 'Kota Jayapura', '9171', '2', '-2.533', '140.717', '1', 'default.png'),
(1753, '2', 'Kabupaten Labuhanbatu Utara', '1223', '2', '2.3465638', '99.8124935', '1', 'default.png'),
(1754, '2', 'Kabupaten Labuhanbatu Selatan', '1222', '2', '1.8799353', '100.1703257', '1', 'default.png'),
(1756, '2', 'Kabupaten Nias Utara', '1224', '2', '1.1255279', '97.5247243', '1', 'default.png'),
(1757, '2', 'Kabupaten Nias Barat', '1225', '2', '1.1255279', '97.5247243', '1', 'default.png'),
(1758, '2', 'Kota Gunungsitoli', '1278', '2', '1.281964', '97.61594', '1', 'default.png'),
(1759, '4', 'Kabupaten Kepulauan Meranti', '1410', '2', '0.9208765', '102.6675575', '1', 'default.png'),
(1760, '5', 'Kota Sungai Penuh', '1572', '2', '-2.06314', '101.387199', '1', 'default.png'),
(1761, '7', 'Kabupaten Bengkulu Tengah', '1709', '2', '-3.7955556', '102.2591667', '1', 'default.png'),
(1762, '8', 'Kabupaten Tulangbawang Barat', '1806', '2', '-4.5256967', '105.0791228', '1', 'default.png'),
(1763, '8', 'Kabupaten Pringsewu', '1810', '2', '-5.3539884', '104.9622498', '1', 'default.png'),
(1764, '8', 'Kabupaten Mesuji', '1811', '2', '-4.0044783', '105.3131185', '1', 'default.png'),
(1765, '10', 'Kabupaten Lingga', '2104', '2', '-0.1627686', '104.6354631', '1', 'default.png'),
(1766, '10', ' Kabupaten Anambas', '2105', '2', '3.1055459', '105.6537231', '1', 'default.png'),
(1767, '14', 'Kabupaten Sleman', '3404', '2', '-7.716165', '110.335403', '1', 'default.png'),
(1768, '16', 'Kota Tangerang Selatan', '3674', '2', '-6.2888889', '106.7180556', '1', 'default.png'),
(1769, '18', 'Kabupaten Lombok Utara', '5208', '2', '-8.3739076', '116.2777073', '1', 'default.png'),
(1770, '19', 'Kabupaten Sabu Raijua', '5302', '2', '-10.5541116', '121.8334868', '1', 'default.png');
INSERT INTO `daerah` (`nid`, `parent_nid`, `name`, `serial`, `type`, `latitude`, `longitude`, `status`, `image`) VALUES
(1771, '24', 'Kabupaten Bolang Mongondow Timur', '7110', '2', '0.7152651', '124.4641848', '1', 'default.png'),
(1772, '24', 'Kabupaten Bolang Mongondow Selatan', '7111', '2', '0.4053215', '123.8411288', '1', 'default.png'),
(1773, '25', 'Kabupaten Sigi', '7210', '2', '-1.3834127', '120.0665236', '1', 'default.png'),
(1774, '26', 'Kabupaten Toraja Utara', '7326', '2', '-2.8621942', '119.8352303', '1', 'default.png'),
(1775, '30', 'Kabupaten Maluku Barat Daya', '8108', '2', '-7.7851588', '126.3498097', '1', 'default.png'),
(1776, '30', 'Kabupaten Buru', '8104', '2', '-3.3927754', '126.7819505', '1', 'default.png'),
(1778, '31', 'Kabupaten Pulau Morota', '8207', '2', '2.3656672', '128.4008357', '1', 'default.png'),
(1789, '32', 'Kabupaten Tambrauw', '9209', '2', '-0.781856', '132.3938375', '1', 'default.png'),
(1790, '32', 'Kabupaten Maybat', '9210', '2', '3.1472', '101.6997', '1', 'default.png'),
(1791, '33', 'Kabupaten Memberamo Tengah', '9121', '2', '-2.3745692', '138.3190276', '1', 'default.png'),
(1792, '33', 'Kabupaten Yalimo', '9122', '2', '-3.7852847', '139.4466005', '1', 'default.png'),
(1793, '33', 'Kabupaten Lanny Jaya', '9123', '2', '-3.971033', '138.3190276', '1', 'default.png'),
(1794, '33', 'Kabupaten Nduga', '9124', '2', '-4.4069496', '138.2393528', '1', 'default.png'),
(1795, '33', 'Kabupaten Puncak', '9125', '2', '-6.7125476', '106.9542425', '1', 'default.png'),
(1796, '33', 'Kabupaten Dogiyai', '9126', '2', '-4.0193872', '135.9610446', '1', 'default.png'),
(1797, '33', 'Kabupaten Intan Jaya', '9127', '2', '-3.5076422', '136.7478493', '1', 'default.png'),
(1798, '33', 'Kabupaten Deiyai', '9128', '2', '-4.0974893', '136.4393054', '1', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `hortikultural`
--

CREATE TABLE `hortikultural` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `terakhir_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hortikultural`
--

INSERT INTO `hortikultural` (`id`, `judul`, `terakhir_update`) VALUES
(1, 'Luas Tanaman Perkebunan Besar di Provinsi Kalimantan Barat, 2015-2018', '2019-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `menu_detail`
--

CREATE TABLE `menu_detail` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_detail`
--

INSERT INTO `menu_detail` (`id`, `nama_menu`) VALUES
(1, 'Sosial & Kependudukan'),
(2, 'Ekonomi & Perdagangan'),
(3, 'Pertanian & Pertambangan');

-- --------------------------------------------------------

--
-- Table structure for table `perkebunan`
--

CREATE TABLE `perkebunan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `terakhir_update` date DEFAULT NULL,
  `nid_daerah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perkebunan`
--

INSERT INTO `perkebunan` (`id`, `judul`, `terakhir_update`, `nid_daerah`) VALUES
(1, 'Luas Tanaman Perkebunan Besar di Provinsi Kalimantan Barat, 2015-2018', '2019-12-10', 20),
(6, 'Luas Tanaman Perkebunan Besar (Karet) Menurut Kabupetan/Kota di Provinsi Kalimantan Barat, 2015-2018', '2019-09-18', 20);

-- --------------------------------------------------------

--
-- Table structure for table `statistik_sektoral`
--

CREATE TABLE `statistik_sektoral` (
  `id` int(11) NOT NULL,
  `kab_kota` varchar(100) DEFAULT NULL,
  `nama_tanaman` varchar(100) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_perkebunan` int(11) DEFAULT NULL,
  `nid_daerah_luas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistik_sektoral`
--

INSERT INTO `statistik_sektoral` (`id`, `kab_kota`, `nama_tanaman`, `tahun`, `jumlah`, `id_perkebunan`, `nid_daerah_luas`) VALUES
(1, 'Kalimantan Barat', 'Karet', '2015', 5013, 1, 20),
(2, 'Kalimantan Barat', 'Karet', '2016', 5013, 1, 20),
(3, 'Kalimantan Barat', 'Karet', '2017', 3661, 1, 20),
(4, 'Kalimantan Barat', 'Karet', '2018', 5837, 1, 20),
(5, 'Kalimantan Barat', 'Kelapa Sawit', '2015', 1046212, 1, 20),
(6, 'Kalimantan Barat', 'Kelapa Sawit', '2016', 1055656, 1, 20),
(7, 'Kalimantan Barat', 'Kelapa Sawit', '2017', 1112368, 1, 20),
(8, 'Kalimantan Barat', 'Kelapa Sawit', '2018', 1193581, 1, 20),
(9, 'Kalimantan Barat', 'Aneka Tanaman', '2015', 0, 1, 20),
(10, 'Kalimantan Barat', 'Aneka Tanaman', '2016', 688, 1, 20),
(11, 'Kalimantan Barat', 'Aneka Tanaman', '2017', 688, 1, 20),
(12, 'Kalimantan Barat', 'Aneka Tanaman', '2018', 688, 1, 20),
(13, 'Kalimantan Barat', 'Karet', '2015', 5013, 6, 20),
(14, 'Kalimantan Barat', 'Karet', '2016', 5013, 6, 20),
(15, 'Kalimantan Barat', 'Karet', '2017', 3661, 6, 20),
(16, 'Kalimantan Barat', 'Karet', '2018', 5837, 6, 20),
(17, 'Sambas', 'Karet', '2015', 0, 6, 20),
(18, 'Sambas', 'Karet', '2016', 0, 6, 20),
(19, 'Sambas', 'Karet', '2017', 0, 6, 20),
(20, 'Sambas', 'Karet', '2018', 0, 6, 20),
(21, 'Bengkayang', 'Karet', '2015', 0, 6, 20),
(22, 'Bengkayang', 'Karet', '2016', 0, 6, 20),
(23, 'Bengkayang', 'Karet', '2017', 0, 6, 20),
(24, 'Bengkayang', 'Karet', '2018', 0, 6, 20),
(25, 'Landak', 'Karet', '2015', 3015, 6, 20),
(26, 'Landak', 'Karet', '2016', 3015, 6, 20),
(27, 'Landak', 'Karet', '2017', 3015, 6, 20),
(28, 'Landak', 'Karet', '2018', 3015, 6, 20),
(29, 'Mempawah', 'Karet', '2018', 0, 6, 20),
(30, 'Mempawah', 'Karet', '2015', 0, 6, 20),
(31, 'Mempawah', 'Karet', '2016', 0, 6, 20),
(32, 'Mempawah', 'Karet', '2017', 0, 6, 20),
(33, 'Sanggau', 'Karet', '2015', 0, 6, 20),
(34, 'Sanggau', 'Karet', '2016', 0, 6, 20),
(35, 'Sanggau', 'Karet', '2017', 0, 6, 20),
(36, 'Sanggau', 'Karet', '2018', 0, 6, 20),
(37, 'Ketapang', 'Karet', '2015', 0, 6, 20),
(38, 'Ketapang', 'Karet', '2016', 0, 6, 20),
(39, 'Ketapang', 'Karet', '2017', 0, 6, 20),
(40, 'Ketapang', 'Karet', '2018', 0, 6, 20),
(41, 'Sintang', 'Karet', '2015', 1352, 6, 20),
(42, 'Sintang', 'Karet', '2016', 1352, 6, 20),
(43, 'Sintang', 'Karet', '2017', 0, 6, 20),
(44, 'Sintang', 'Karet', '2018', 1352, 6, 20),
(45, 'Kapuas Hulu', 'Karet', '2015', 575, 6, 20),
(46, 'Kapuas Hulu', 'Karet', '2016', 575, 6, 20),
(47, 'Kapuas Hulu', 'Karet', '2017', 575, 6, 20),
(48, 'Kapuas Hulu', 'Karet', '2018', 357, 6, 20),
(49, 'Sekadau', 'Karet', '2015', 0, 6, 20),
(50, 'Sekadau', 'Karet', '2016', 0, 6, 20),
(51, 'Sekadau', 'Karet', '2017', 0, 6, 20),
(52, 'Sekadau', 'Karet', '2018', 1042, 6, 20),
(53, 'Melawi', 'Karet', '2015', 0, 6, 20),
(54, 'Melawi', 'Karet', '2016', 0, 6, 20),
(55, 'Melawi', 'Karet', '2017', 0, 6, 20),
(56, 'Melawi', 'Karet', '2018', 0, 6, 20),
(57, 'Kayong Utara', 'Karet', '2015', 0, 6, 20),
(58, 'Kayong Utara', 'Karet', '2016', 0, 6, 20),
(59, 'Kayong Utara', 'Karet', '2017', 0, 6, 20),
(60, 'Kayong Utara', 'Karet', '2018', 0, 6, 20),
(61, 'Kubu Raya', 'Karet', '2015', 71, 6, 20),
(62, 'Kubu Raya', 'Karet', '2016', 71, 6, 20),
(63, 'Kubu Raya', 'Karet', '2017', 71, 6, 20),
(64, 'Kubu Raya', 'Karet', '2018', 71, 6, 20),
(65, 'Kota Pontianak', 'Karet', '2015', 0, 6, 20),
(66, 'Kota Pontianak', 'Karet', '2016', 0, 6, 20),
(67, 'Kota Pontianak', 'Karet', '2017', 0, 6, 20),
(68, 'Kota Pontianak', 'Karet', '2018', 0, 6, 20),
(69, 'Kota Singkawang', 'Karet', '2015', 0, 6, 20),
(70, 'Kota Singkawang', 'Karet', '2016', 0, 6, 20),
(71, 'Kota Singkawang', 'Karet', '2017', 0, 6, 20),
(72, 'Kota Singkawang', 'Karet', '2018', 0, 6, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_detail`
--

CREATE TABLE `sub_menu_detail` (
  `id` int(11) NOT NULL,
  `id_menu_detail` int(11) DEFAULT NULL,
  `nama_sub_menu` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_menu_detail`
--

INSERT INTO `sub_menu_detail` (`id`, `id_menu_detail`, `nama_sub_menu`, `url`) VALUES
(1, 1, 'Gender', 'daerah/gender'),
(2, 1, 'Geografi', 'daerah/geografi'),
(3, 1, 'Iklim', 'daerah/iklim'),
(4, 1, 'Indeks Pembangunan Manusia', 'daerah/indeks_pembangunan_manusia'),
(5, 1, 'Kemiskinan', 'daerah/kemiskinan'),
(6, 1, 'Kependudukan', 'daerah/kependudukan'),
(7, 1, 'Kesehatan', 'daerah/kesehatan'),
(8, 1, 'Konsumsi & Pengeluaran', 'daerah/konsumsi_pengeluaran'),
(9, 1, 'Lingkungan Hidup', 'daerah/lingkungan_hidup'),
(10, 1, 'Pemerintahan', 'daerah/pemerintahan'),
(11, 1, 'Pendidikan', 'daerah/pendidikan'),
(12, 1, 'Perumahan', 'daerah/perumahan'),
(13, 1, 'Politik & Keamanan', 'daerah/politik_keamanan'),
(14, 1, 'Potensi Desa', 'daerah/potensi_desa'),
(15, 1, 'Sosial Budaya', 'daerah/sosial_budaya'),
(16, 1, 'Tenaga Kerja', 'daerah/tenaga_kerja'),
(17, 2, 'Ekspor-Impor', 'daerah/ekspor_impor'),
(18, 2, 'Energi', 'daerah/energi'),
(19, 2, 'Industri Besar & Sedang', 'daerah/industri_besar_sedang'),
(20, 2, 'Industri Mikro & Kecil', 'daerah/industri_mikro_kecil'),
(21, 2, 'Inflasi', 'daerah/inflasi'),
(22, 2, 'Input-Output', 'daerah/input_output'),
(23, 2, 'ITB-ITK', 'daerah/itb_itk'),
(24, 2, 'Keuangan', 'daerah/keuangan'),
(25, 2, 'Komunikasi', 'daerah/komunikasi'),
(26, 2, 'Konstruksi', 'daerah/konstruksi'),
(27, 2, 'Nilai Tukar Petani', 'daerah/nilai_tukar_petani'),
(28, 2, 'Pariwisata', 'daerah/pariwisata'),
(29, 2, 'Produk Domestik Regional Bruto (Lapangan Usaha)', 'daerah/lapangan_usaha'),
(30, 2, 'Produk Domestik Regional Bruto (Pengeluaran)', 'daerah/pengeluaran'),
(31, 2, 'Transportasi', 'daerah/transportasi'),
(32, 2, 'Usaha Mikro Kecil', 'daerah/usaha_mikro_kecil'),
(33, 3, 'Hortikultural', 'detail_daerah/pertanian_pertambangan/hortikultural'),
(34, 3, 'Perikanan', 'daerah/perikanan'),
(35, 3, 'Perkebunan', 'detail_daerah/pertanian_pertambangan/perkebunan'),
(36, 3, 'Perternakan', 'daerah/peternakan'),
(37, 3, 'Tanaman Pangan', 'daerah/tanaman_pangan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `hortikultural`
--
ALTER TABLE `hortikultural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_detail`
--
ALTER TABLE `menu_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkebunan`
--
ALTER TABLE `perkebunan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nid_daerah` (`nid_daerah`);

--
-- Indexes for table `statistik_sektoral`
--
ALTER TABLE `statistik_sektoral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perkebunan` (`id_perkebunan`),
  ADD KEY `nid_daerah_luas` (`nid_daerah_luas`);

--
-- Indexes for table `sub_menu_detail`
--
ALTER TABLE `sub_menu_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_menu_detail` (`id_menu_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hortikultural`
--
ALTER TABLE `hortikultural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_detail`
--
ALTER TABLE `menu_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perkebunan`
--
ALTER TABLE `perkebunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistik_sektoral`
--
ALTER TABLE `statistik_sektoral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `sub_menu_detail`
--
ALTER TABLE `sub_menu_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perkebunan`
--
ALTER TABLE `perkebunan`
  ADD CONSTRAINT `nid_daerah` FOREIGN KEY (`nid_daerah`) REFERENCES `daerah` (`nid`);

--
-- Constraints for table `statistik_sektoral`
--
ALTER TABLE `statistik_sektoral`
  ADD CONSTRAINT `id_perkebunan` FOREIGN KEY (`id_perkebunan`) REFERENCES `perkebunan` (`id`),
  ADD CONSTRAINT `nid_daerah_luas` FOREIGN KEY (`nid_daerah_luas`) REFERENCES `daerah` (`nid`);

--
-- Constraints for table `sub_menu_detail`
--
ALTER TABLE `sub_menu_detail`
  ADD CONSTRAINT `sub_menu_detail_ibfk_1` FOREIGN KEY (`id_menu_detail`) REFERENCES `menu_detail` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
