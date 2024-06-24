-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Haz 2024, 21:00:18
-- Sunucu sürümü: 8.3.0
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `anket`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oykullananlar`
--

CREATE TABLE `oykullananlar` (
  `id` int UNSIGNED NOT NULL,
  `ipadresi` varchar(15) NOT NULL,
  `tarih` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `oykullananlar`
--

INSERT INTO `oykullananlar` (`id`, `ipadresi`, `tarih`) VALUES
(1, '127.0.0.1', 1718989790),
(2, '127.0.0.1', 1718989961),
(3, '127.0.0.1', 1718989970),
(4, '127.0.0.1', 1718990015),
(5, '127.0.0.1', 1718990050);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `oykullananlar`
--
ALTER TABLE `oykullananlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `oykullananlar`
--
ALTER TABLE `oykullananlar`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
