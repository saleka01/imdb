-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 11:50 PM
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
-- Database: `imdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmek`
--

CREATE TABLE `filmek` (
  `film_id` int(12) NOT NULL,
  `film_nev` varchar(50) DEFAULT NULL,
  `ev` int(20) DEFAULT NULL,
  `film_ido` int(25) DEFAULT NULL,
  `rang` int(20) DEFAULT NULL,
  `rendezo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filmek`
--

INSERT INTO `filmek` (`film_id`, `film_nev`, `ev`, `film_ido`, `rang`, `rendezo`) VALUES
(1, 'The Innocents', 1958, 158, 1, 'Thomas Zane'),
(2, 'Lawrence of Arabia', 1961, 88, 5, 'Kovacs Kata'),
(3, 'The Deer  Hunter', 1962, 115, 4, 'Hulye Geza'),
(4, 'Amadeus', 1988, 158, 3, 'Kardos Peter'),
(5, 'Blade Runner', 1984, 77, 2, 'Gingl Zoltan'),
(6, 'Eyes Wide Shut', 1978, 66, 6, 'Salek'),
(7, 'The Usual Suspects', 1998, 108, 8, 'Vigh Nandi'),
(8, 'Chinatown', 1978, 113, 7, 'Kovacs Kata'),
(9, 'Boogie Nights', 2012, 106, 9, 'Thomas Zane'),
(10, 'Annie Hall', 2009, 105, 5, 'Nagy Mate'),
(11, 'Princess Mononoke', 1999, 113, 10, 'Csacsa'),
(12, 'The Shawshank Redemption', 1988, 102, 11, 'Macska Jozsef'),
(13, 'American Beauty', 2000, 142, 15, 'Eva Adam'),
(14, 'Good Will Hunting', 1998, 121, 18, 'Jezus Krisztus'),
(15, 'Deliverance', 1999, 126, 16, 'Kiss Roland'),
(16, 'Trainspotting', 1996, 120, 17, 'Fekete zsolt'),
(17, 'The Prestige', 1956, 98, 12, 'Thomas Black'),
(18, 'StarWars', 1978, 100, 13, 'Hajo Andras'),
(19, 'Donnie Darko', 1999, 65, 14, 'Jack Diaz'),
(20, 'Slumdog Millionaire', 2001, 98, 19, 'Denes Gabor'),
(21, 'Aliens', 1979, 135, 20, 'Kyle Rise'),
(22, 'Avatar', 2009, 156, 21, 'Magyar Jonas');

-- --------------------------------------------------------

--
-- Table structure for table `filmstudiok`
--

CREATE TABLE `filmstudiok` (
  `stud_id` int(12) NOT NULL,
  `studio_nev` varchar(50) NOT NULL,
  `cim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filmstudiok`
--

INSERT INTO `filmstudiok` (`stud_id`, `studio_nev`, `cim`, `email`) VALUES
(1, 'Parker, Hettinger and Runolfsdottir', '1045 Thompson Pass', 'pibeson0@xrea.com'),
(2, 'Parisian, Nicolas and Harber', '12781 Di Loreto Alley', 'mlook1@ted.com'),
(3, 'Littel LLC', '7337 Lindbergh Center', 'eblencoe2@cnet.com'),
(4, 'Walsh LLC', '746 Heath Lane', 'twoloschin3@google.it'),
(5, 'Tremblay-Flatley', '40 Lillian Court', 'alegrice4@phpbb.com'),
(6, 'Mertz and Sons', '555 Fairview Way', 'pkochl5@tripod.com'),
(7, 'Purdy, Macejkovic and Wiza', '7262 Warbler Pass', 'dfellgett6@accuweather.com'),
(8, 'Moen-Kuhlman', '17 Farwell Crossing', 'bstrangeway7@google.it'),
(9, 'Batz, Baumbach and Blick', '81 Ohio Street', 'psteenson8@usnews.com'),
(10, 'Tillman-Huels', '21 Mcguire Park', 'ckeemar9@howstuffworks.com'),
(11, 'Skiles-Paucek', '6 Hollow Ridge Crossing', 'pbaxandalla@merriam-webster.com'),
(12, 'Dooley, Gorczany and Schinner', '41136 Westend Road', 'cmitchellb@spiegel.de'),
(13, 'Kessler Inc', '902 Moose Court', 'whachettec@surveymonkey.com'),
(14, 'Haley LLC', '59509 Florence Drive', 'zkilfederd@pen.io'),
(15, 'Volkman, Batz and Walter', '69182 Sugar Lane', 'esteuarte@weather.com'),
(16, 'Spinka Group', '0860 Maple Drive', 'lpesf@yahoo.com'),
(17, 'Considine-Hickle', '5689 Gulseth Center', 'bbradockg@dmoz.org'),
(18, 'Gleichner-O\'Keefe', '1311 Pine View Parkway', 'sboultwoodh@webmd.com'),
(19, 'Klein-Bogan', '158 Blue Bill Park Point', 'mdabelli@ox.ac.uk'),
(20, 'Spencer LLC', '7470 Bartillon Court', 'gteodorskij@a8.net'),
(21, 'Champlin and Sons', '55 Monica Way', 'rstandidgek@infoseek.co.jp'),
(22, 'Harris-Johns', '4 Hagan Terrace', 'joldlandl@samsung.com');

-- --------------------------------------------------------

--
-- Table structure for table `szereples`
--

CREATE TABLE `szereples` (
  `sze_id` int(12) NOT NULL,
  `film_id` int(12) DEFAULT NULL,
  `stud_id` int(12) DEFAULT NULL,
  `szin_id` int(12) DEFAULT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `szereples`
--

INSERT INTO `szereples` (`sze_id`, `film_id`, `stud_id`, `szin_id`, `datum`) VALUES
(1, 1, 1, 1, '2019-05-15 13:21:24'),
(2, 2, 2, 2, '2019-03-27 14:33:42'),
(3, 3, 3, 3, '2019-07-21 10:37:57'),
(4, 4, 4, 4, '2019-06-28 19:39:04'),
(5, 5, 5, 5, '2019-10-27 04:13:29'),
(6, 6, 6, 6, '2019-10-31 11:10:42'),
(7, 7, 7, 7, '2019-07-23 12:20:16'),
(8, 8, 8, 8, '2019-06-26 05:33:06'),
(9, 9, 9, 9, '2019-05-10 18:44:33'),
(10, 10, 10, 10, '2019-06-11 11:32:43'),
(11, 11, 11, 11, '2019-11-13 08:44:13'),
(12, 12, 12, 12, '2019-08-14 07:19:11'),
(13, 13, 13, 13, '2019-09-29 10:37:21'),
(14, 14, 14, 14, '2019-04-20 22:38:14'),
(15, 15, 15, 15, '2019-07-09 05:43:30'),
(16, 16, 16, 16, '2019-01-15 22:43:30'),
(17, 17, 17, 17, '2019-10-22 20:14:40'),
(18, 18, 18, 18, '2019-10-08 04:06:07'),
(19, 19, 19, 19, '2019-09-01 20:35:27'),
(20, 20, 20, 20, '2019-09-16 08:25:14'),
(21, 21, 21, 21, '2019-04-09 04:18:53'),
(22, 22, 22, 22, '2019-04-28 21:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `szineszek`
--

CREATE TABLE `szineszek` (
  `szin_id` int(12) NOT NULL,
  `szin_neve` varchar(50) DEFAULT NULL,
  `eletkor` int(50) DEFAULT NULL,
  `nem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `szineszek`
--

INSERT INTO `szineszek` (`szin_id`, `szin_neve`, `eletkor`, `nem`) VALUES
(1, 'Emmalyn Balchin', 25, 'Female'),
(2, 'Tamarra Abbet', 59, 'Female'),
(3, 'Rosalyn Burkart', 32, 'Female'),
(4, 'Allyce Tolossi', 74, 'Female'),
(5, 'Belvia Redemile', 28, 'Female'),
(6, 'Barbara-anne Loudon', 58, 'Female'),
(7, 'Chaim Mapples', 37, 'Male'),
(8, 'Zacharia Cariss', 26, 'Male'),
(9, 'Bobbee Guillart', 62, 'Female'),
(10, 'Arman Barlthrop', 49, 'Male'),
(11, 'Harcourt Dumbelton', 48, 'Male'),
(12, 'Yule Veysey', 75, 'Male'),
(13, 'Caye Peskin', 59, 'Female'),
(14, 'Garrick Antham', 25, 'Male'),
(15, 'Nancee Passion', 24, 'Female'),
(16, 'Veradis Ridings', 51, 'Female'),
(17, 'Bailey Algeo', 68, 'Male'),
(18, 'Lisbeth Andrys', 52, 'Female'),
(19, 'Lorens Wolfit', 23, 'Male'),
(20, 'Maia Merriday', 73, 'Female'),
(21, 'Ware Aharoni', 45, 'Male'),
(22, 'Loralee Praill', 35, 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmek`
--
ALTER TABLE `filmek`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `filmstudiok`
--
ALTER TABLE `filmstudiok`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `szereples`
--
ALTER TABLE `szereples`
  ADD PRIMARY KEY (`sze_id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `stud_id` (`stud_id`),
  ADD KEY `szin_id` (`szin_id`);

--
-- Indexes for table `szineszek`
--
ALTER TABLE `szineszek`
  ADD PRIMARY KEY (`szin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmek`
--
ALTER TABLE `filmek`
  MODIFY `film_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `filmstudiok`
--
ALTER TABLE `filmstudiok`
  MODIFY `stud_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `szereples`
--
ALTER TABLE `szereples`
  MODIFY `sze_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `szineszek`
--
ALTER TABLE `szineszek`
  MODIFY `szin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `szereples`
--
ALTER TABLE `szereples`
  ADD CONSTRAINT `szereples_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `filmek` (`film_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `szereples_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `filmstudiok` (`stud_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `szereples_ibfk_3` FOREIGN KEY (`szin_id`) REFERENCES `szineszek` (`szin_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
