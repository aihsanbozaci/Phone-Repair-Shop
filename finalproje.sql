-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Şub 2022, 13:16:34
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `finalproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

CREATE TABLE `kayit` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `tcno` varchar(11) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `telno` bigint(10) NOT NULL,
  `emailid` varchar(70) NOT NULL,
  `job` varchar(50) NOT NULL,
  `adres` text NOT NULL,
  `birim` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `kayittarihi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`id`, `firstname`, `lastname`, `tcno`, `birthdate`, `gender`, `telno`, `emailid`, `job`, `adres`, `birim`, `info`, `kayittarihi`) VALUES
(20, 'Zeynep', 'Elibol', '67989908911', '2017-09-11', 'IOS', 5489875632, 'zeynep@gmail.com', 'iPhone 6S', 'Cihangir', 'Hasar', 'Çatladı.', '2021-12-12'),
(22, 'Ahmet', 'Bozacı', '12354645675', '2020-05-12', 'Android', 789456457, 'bozaci@gmail.com', 'Samsung s11 plus', 'istanbul', 'Hasar', 'çatlak', '2022-02-06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `username`, `password`) VALUES
(1, 'ahmetbozaci', '123456'),
(10, 'ahmetihsanbozaci', '099ebea48ea9666a7da2177267983138');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `time_log`
--

CREATE TABLE `time_log` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cikis` timestamp NOT NULL DEFAULT current_timestamp(),
  `giris` timestamp NOT NULL DEFAULT current_timestamp(),
  `tarayici` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `time_log`
--

INSERT INTO `time_log` (`id`, `ip_address`, `username`, `cikis`, `giris`, `tarayici`) VALUES
(53, '::1', 'ahmetbozaci', '2022-01-31 16:13:22', '2022-01-31 16:13:22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(54, '::1', 'ahmetbozaci', '2022-01-31 14:40:31', '2022-01-31 16:32:29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(55, '::1', 'ahmetbozaci', '2022-01-31 17:32:00', '2022-01-31 19:31:58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(56, '::1', 'ahmet', '2022-01-31 17:44:22', '2022-01-31 19:44:21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(57, '::1', 'ahmetbozaci', '2022-01-31 17:53:14', '2022-01-31 19:48:10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(58, '::1', 'ahmetbozaci', '2022-01-31 18:10:29', '2022-01-31 19:53:23', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(59, '::1', 'ahmetbozaci', '2022-01-31 20:10:41', '2022-01-31 20:10:41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(60, '::1', 'ahmetbozaci', '2022-01-31 22:20:42', '2022-02-01 00:07:04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(61, '::1', 'ahmetbozaci', '2022-02-01 00:21:05', '2022-02-01 00:21:05', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(62, '::1', 'ahmetbozaci', '2022-02-01 18:03:09', '2022-02-01 14:56:59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(63, '::1', 'ahmetbozaci', '2022-02-01 20:35:55', '2022-02-01 20:03:14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(64, '::1', 'ahmetbozaci', '2022-02-02 13:54:50', '2022-02-02 13:54:50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(65, '::1', 'ahmetbozaci', '2022-02-02 14:29:53', '2022-02-02 14:29:53', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(66, '::1', 'ahmetbozaci', '2022-02-02 14:38:54', '2022-02-02 14:38:54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(67, '::1', 'ahmetbozaci', '2022-02-02 12:58:47', '2022-02-02 14:57:38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(68, '::1', 'ahmetbozaci', '2022-02-03 13:35:59', '2022-02-02 15:24:03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(69, '::1', 'ahmetbozaci', '2022-02-03 13:54:16', '2022-02-03 15:36:06', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(70, '::1', 'ahmetbozaci', '2022-02-03 15:54:20', '2022-02-03 15:54:20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(71, '::1', 'ahmetbozaci', '2022-02-03 18:27:35', '2022-02-03 18:03:25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(72, '::1', 'ahmetbozaci', '2022-02-03 18:33:47', '2022-02-03 20:27:40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(73, '::1', 'ahmetbozaci', '2022-02-03 18:36:26', '2022-02-03 20:36:12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(74, '::1', 'ahmet', '2022-02-03 18:37:06', '2022-02-03 20:36:54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(75, '::1', '5', '2022-02-03 18:39:01', '2022-02-03 20:38:21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(76, '::1', 'ahmetbozaci', '2022-02-03 18:44:55', '2022-02-03 20:44:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(77, '::1', 'ahmetbozaci', '2022-02-03 18:46:15', '2022-02-03 20:45:54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(78, '::1', 'ahmetbozaci', '2022-02-03 18:57:08', '2022-02-03 20:52:46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(79, '::1', 'ahmetbozaci', '2022-02-03 20:57:18', '2022-02-03 20:57:18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(80, '::1', 'ahmetbozaci', '2022-02-03 19:01:04', '2022-02-03 20:59:08', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(81, '::1', 'ahmetbozaci', '2022-02-03 19:02:16', '2022-02-03 21:02:11', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(82, '::1', 'ahmetbozaci', '2022-02-03 21:02:21', '2022-02-03 21:02:21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(83, '::1', 'ahmetbozaci', '2022-02-03 21:12:57', '2022-02-03 21:12:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99'),
(84, '::1', 'ahmetbozaci', '2022-02-05 09:48:03', '2022-02-05 11:47:52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(85, '::1', 'ahmetbozaci', '2022-02-05 09:48:21', '2022-02-05 11:48:15', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(86, '::1', 'ahmetbozaci', '2022-02-05 09:50:51', '2022-02-05 11:48:30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(87, '::1', 'ahmetbozaci', '2022-02-05 09:52:33', '2022-02-05 11:51:03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(88, '::1', 'ahmetbozaci', '2022-02-05 09:56:13', '2022-02-05 11:53:25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(89, '::1', 'ahmetbozaci', '2022-02-05 09:58:26', '2022-02-05 11:58:12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(90, '::1', 'ahmetihsanbozaci', '2022-02-05 09:58:56', '2022-02-05 11:58:55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(91, '::1', 'ahmetbozaci', '2022-02-05 10:09:02', '2022-02-05 11:59:05', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(92, '::1', 'ahmetbozaci', '2022-02-05 12:09:36', '2022-02-05 12:09:36', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(93, '::1', 'ahmetbozaci', '2022-02-05 10:10:00', '2022-02-05 12:09:58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(94, '::1', 'ahmetbozaci', '2022-02-05 10:13:09', '2022-02-05 12:10:22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80'),
(95, '::1', 'ahmetbozaci', '2022-02-05 12:13:20', '2022-02-05 12:13:20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayit`
--
ALTER TABLE `kayit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `time_log`
--
ALTER TABLE `time_log`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayit`
--
ALTER TABLE `kayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `time_log`
--
ALTER TABLE `time_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
