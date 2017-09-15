-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 Eyl 2017, 10:39:05
-- Sunucu sürümü: 5.6.35
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `todolist`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profileImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placeOfBirth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customNote` longtext COLLATE utf8_unicode_ci NOT NULL,
  `totalPoint` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `profileImage`, `placeOfBirth`, `customNote`, `totalPoint`) VALUES
(1, 'Mustafa', 'Aksoy', 'default.jpg', 'Gebze', 'özel bir not varsa', 5),
(2, 'Ahmet', 'Yılmaz', 'ahmet.jpg', 'Darıca', 'asd', 3),
(3, 'Erdal', 'Onur', 'erdal.jpg', 'Merzifon', 'asdasdas', 2),
(4, 'Uğur', 'Yılmaz', 'default.jpg', 'Giresun', 'asdasdasd', 4),
(5, 'Kemal', 'Derme', 'kemal.jpg', 'Posof', '', 1),
(6, 'Leyla', 'Mecnun', 'leyla.jpg', 'Pendik', '', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `due_date` datetime NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `topics`
--

INSERT INTO `topics` (`id`, `name`, `due_date`, `create_date`) VALUES
(1, 'Doğal Sayılar ', '2017-09-16 09:00:00', '2017-09-15 00:00:00'),
(2, 'Zaman Ölçme', '2017-09-15 10:00:00', '2017-09-15 00:00:00'),
(3, 'Kesirler', '2017-09-15 11:00:00', '2017-09-15 00:00:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
