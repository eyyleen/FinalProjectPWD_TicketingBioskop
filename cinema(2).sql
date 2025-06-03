-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jun 2025 pada 16.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieName` varchar(100) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  `movieID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `movieID`) VALUES
(22, 'The Lego Movie', 'vip-hall', 'imax', '13-3', '18-00', 'Kareem', 'Ahmed', '01589965', NULL),
(67, 'The Lego Movie', 'main-hall', '2d', '13-3', '12-00', 'haha', 'ahaha', '08215666766', NULL),
(68, ' Pengabdi Setan', 'main-hall', '3d', '13-3', '12-00', 'bukit', 'bukit', '08215666766', NULL),
(69, 'Qarmat Bitamrmat  ', 'main-hall', 'imax', '15-3', '12-00', '2131', 'sada', '0821213312', NULL),
(72, 'Pengepungan di Bukit Duri', 'vip-hall', '3d', '14-3', '15-00', 'zikri', 'zikri', '0821213312', NULL),
(74, 'Qarmat Bitamrmat  ', 'main-hall', '2d', '14-3', '18-00', 'Zikri', 'Pes', '08215666766', NULL),
(75, 'The Lego Movie', 'vip-hall', '7d', '13-3', '18-00', 'Juna', 'juna', '08215666766', NULL),
(79, 'The Lego Movie', 'main-hall', '2d', '12-3', '09-00', 'Juna', 'Zikri', '082312131', NULL),
(80, 'Megalodon: The Frenzy', 'main-hall', '2d', '13-3', '12-00', 'Juna', 'juna', '012312312312', NULL),
(81, ' Pengabdi Setan', 'main-hall', '7d', '15-3', '15-00', 'Ikram', 'Paishal', '021231232', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`, `userID`) VALUES
(1, 'Ahmed', 'Ali', 'Ahmed@mail.com', 'Hello first', NULL),
(5, 'Juna', 'Purba', 'juna17@gmail.com', 'Good Game', NULL),
(6, 'Juna', 'Purba', 'pes@gmail.com', 'Kurang Bagus', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(2, 'movie-poster-2.jpg', 'Qarmat Bitamrmat  ', 'Comedy', 110, '2018-10-18', 'Assad Fouladkar', 'Ahmed Adam, Bayyumy Fouad, Salah Abdullah , Entsar, Dina Fouad '),
(3, 'well.jpeg', 'The Lego Movie', 'Animation, Action, Adventure', 110, '2014-02-07', 'Phil Lord, Christopher Miller', 'Chris Pratt, Will Ferrell, Elizabeth Banks'),
(4, 'wool.jpeg', 'Nadi Elregal Elserri ', 'Comedy', 105, '2019-01-23', ' Ayman Uttar', 'Karim Abdul Aziz, Ghada Adel, Maged El Kedwany, Nesreen Tafesh, Bayyumy Fouad, Moataz El Tony '),
(5, 'movie-thumb-5.jpg', 'VICE', 'Biography, Comedy, Drama', 132, '2018-12-25', 'Adam McKay', 'Christian Bale, Amy Adams, Steve Carell'),
(6, 'movie-thumb-6.jpg', 'The Vanishing', 'Crime, Mystery, Thriller', 107, '2019-01-04', 'Kristoffer Nyholm', 'Gerard Butler, Peter Mullan, Connor Swindells'),
(18, 'img/jum.jpeg', 'JUMBO', 'Education, Eagle Kids', 102, '2025-02-05', 'Ariel Noah', 'Angga Yunanda'),
(20, 'img/c.jpeg', 'VENOM', 'Aksi/Fiksi', 122, '2018-06-05', 'Ruben Fleischar', 'Tom Hardy'),
(22, 'img/duri.jpeg', 'Pengepungan di Bukit Duri', 'Thriller, Action', 118, '2025-05-04', 'Joko Anwar', 'Joko Anwar'),
(24, 'img/a.jpg', 'Spiderman', 'Action', 120, '2013-04-03', 'Mayday Parker', 'Mayday Parker'),
(26, 'img/pe.jpeg', ' Pengabdi Setan', 'Horror, Triller', 150, '2021-02-04', 'Tara Basro', 'Bront Palarae'),
(28, 'meg.jpeg', 'Megalodon: The Frenzy', 'Adventure, Horror', 80, '2023-04-02', 'Brendan Petrizzo', 'Bill Hanstock-Ryan Ebert-MarcGottlieb'),
(29, 'dino.jpg', 'Jurassic World', 'Adventure, Horror', 124, '2015-06-12', '	 Frank Marshall-Patrick Crowley', '	 Chris Pratt - Bryce Dallas Howard');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paymenttable`
--

CREATE TABLE `paymenttable` (
  `paymentID` int(11) NOT NULL,
  `bookingID` int(11) DEFAULT NULL,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `paymentStatus` varchar(20) DEFAULT 'Pending',
  `paymentTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paymenttable`
--

INSERT INTO `paymenttable` (`paymentID`, `bookingID`, `paymentMethod`, `paymentStatus`, `paymentTime`, `userID`) VALUES
(30, 61, 'Bank Transfer', 'Pending', '2025-06-03 06:59:47', NULL),
(31, 62, 'Bank Transfer', 'Paid', '2025-06-03 07:00:04', NULL),
(32, 63, 'E-Wallet', 'Pending', '2025-06-03 07:22:56', NULL),
(33, 64, 'Bank Transfer', 'Paid', '2025-06-03 07:46:54', NULL),
(34, 65, 'Credit Card', 'Paid', '2025-06-03 07:48:17', NULL),
(44, 75, 'Bank Transfer', 'Paid', '2025-06-03 13:02:10', NULL),
(45, 76, 'Bank Transfer', 'Pending', '2025-06-03 12:24:37', NULL),
(46, 77, 'E-Wallet', 'Pending', '2025-06-03 12:33:05', NULL),
(47, 78, 'E-Wallet', 'Pending', '2025-06-03 12:52:46', NULL),
(48, 79, 'ewallet', 'Paid', '2025-06-03 13:02:12', NULL),
(49, 80, 'cod', 'Paid', '2025-06-03 14:02:01', NULL),
(50, 81, 'Bank Transfer', 'Paid', '2025-06-03 14:02:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `role`) VALUES
(1, 'zikri@gmail.com', 'juna', '$2y$10$fHN7lcn0zdUmfR1dywox9uEy.YKqGxMAr9qiISI/DCErUewhFZf9W', 'user'),
(2, 'juna@gmail.com', 'juna', '$2y$10$kAuJBgM36jbyUef6tESY4ed1ztmx3zPIAOOXzfjuVdIWsY8fB14kG', 'user'),
(3, 'momo@gmail.com', 'momo', '$2y$10$coQD0f1q/PDLjbxQNmJwCO3WfWoDng19yZZNVr2FL0v7HrdEZiLgy', 'admin'),
(4, 'mama@gmail.com', 'mama', '$2y$10$9cV/WbyNwEbk/u7/xKJYGecRq/VD27SmXX1y7/K1SlmJ3EsRGMncO', 'user'),
(5, 'joko@gmail.com', 'joko@gmail.com', '$2y$10$WMLP2pS1L3Ifssk4ZhEVn.mOKtVIFU2Z3HBUzuBX9s2Ib2ZMvyWX2', 'admin'),
(6, 'jaka@gmail.com', 'jaka', '$2y$10$i9S8PdcE0PFmu/nelPruHOYi2r1ccS.KO6g2iP16HfWOTk9lupZES', 'user'),
(7, 'nama@gmail.com', 'nama', '$2y$10$NphXKxtg4DpdkHKvg6fRFepNrmFwI2.O44v9leMM6.MZaMqpnKc.a', 'user'),
(8, 'juna17@gmail.com', 'juna', '$2y$10$eQGDXo9FE9Hmr8T4fUhswey6rx5bn0L/JAMV/IeeqQrHqL1DI5Pfq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`),
  ADD KEY `fk_movie` (`movieID`);

--
-- Indeks untuk tabel `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`),
  ADD KEY `fk_feedback_user` (`userID`);

--
-- Indeks untuk tabel `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- Indeks untuk tabel `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `fk_payment_user` (`userID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD CONSTRAINT `fk_movie` FOREIGN KEY (`movieID`) REFERENCES `movietable` (`movieID`);

--
-- Ketidakleluasaan untuk tabel `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD CONSTRAINT `fk_feedback_user` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD CONSTRAINT `fk_payment_user` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
