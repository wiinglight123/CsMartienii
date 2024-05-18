-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 19, 2024 la 12:45 AM
-- Versiune server: 10.4.32-MariaDB
-- Versiune PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `football_club`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'Meci de fotbal', 'Vă anunțăm că duminică, la ora 17:00, va avea loc un meci de fotbal între echipa noastra si FC Seminte de Dovleac. Vă așteptăm cu drag să ne susțineți', '2024-05-15 16:26:49'),
(19, 'Înscrieri noi', 'Facem cunoscut că începând de luni, încep înscrierile pentru noile echipe de juniori. Vă rugăm să vă prezentați la sediul clubului pentru mai multe de', '2024-05-15 16:28:15'),
(20, 'Sponsori căutați', 'Suntem în căutare de sponsori pentru a sprijini activitățile noastre sportive. Dacă sunteți interesat să ne susțineți, vă rugăm să ne contactați pentr', '2024-05-15 16:28:29'),
(21, 'Turneu de baschet', 'Echipa noastră de baschet participă la un turneu regional în acest weekend. Vă invităm să veniți să ne susțineți la meciuri și să ne trimiteți gânduri', '2024-05-15 16:28:58');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `echipa` varchar(20) DEFAULT NULL,
  `img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `position`, `created_at`, `echipa`, `img`) VALUES
(10, 'Aaron Jayden', 'Atacant', '2024-05-18 12:57:07', 'Fotbal Masculin', 'Images/AaronJayden.jpg'),
(12, 'Ava Hughes', 'Atacant', '2024-05-18 13:10:29', 'Fotbal Feminin', 'Images/AvaHughes.jpg'),
(13, 'Ana Ross', 'Mijlocas', '2024-05-18 13:10:37', 'Fotbal Feminin', 'Images/AnaRoss.jpg'),
(14, 'Callum Hayden', 'Fundas', '2024-05-18 13:10:49', 'Fotbal Masculin', 'Images/CallumHayden.jpg'),
(15, 'Carra Small', 'Mijlocas', '2024-05-18 13:11:01', 'Fotbal Feminin', 'Images/CarraSmall.jpg'),
(16, 'Drink Water', 'Fundas', '2024-05-18 13:11:10', 'Fotbal Masculin', 'Images/DrinkWater.jpg'),
(17, 'Elliot Connor', 'Fundas', '2024-05-18 13:11:20', 'Fotbal Masculin', 'Images/ElliotConnor.jpg'),
(18, 'Jack Palmer', 'Atacant', '2024-05-18 13:11:30', 'Fotbal Masculin', 'Images/JackPalmer.jpg'),
(19, 'James Cannon', 'Mijlocas', '2024-05-18 13:11:41', 'Fotbal Masculin', 'Images/JamesCannon.jpg'),
(20, 'Kerren Davies', 'Atacant', '2024-05-18 13:11:50', 'Fotbal Feminin', 'Images/KerrenDavies.jpg'),
(21, 'Luke Evans', 'Mijlocas', '2024-05-18 13:11:58', 'Fotbal Masculin', 'Images/LukeEvans.jpg'),
(22, 'Mark Lainton', 'Portar', '2024-05-18 13:12:17', 'Fotbal Masculin', 'Images/MarkLainton.jpg'),
(23, 'McScott', 'Portar', '2024-05-18 13:12:27', 'Fotbal Masculin', 'Images/McScott.jpg'),
(24, 'Sam Fletcher', 'Atacant', '2024-05-18 13:12:37', 'Fotbal Masculin', 'Images/SamFletcher.jpg'),
(26, 'Max Butler', 'Mijlocas', '2024-05-18 13:24:18', 'Fotbal Masculin', 'Images/MaxButler.jpg'),
(27, 'Jake Nicholas', 'Fundas', '2024-05-18 13:44:37', 'Fotbal Juniori', 'Images/JakeNicholas.jpg'),
(34, 'Matei', 'Portar', '2024-05-18 22:33:56', 'Juniori', 'Images/Matei.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'user', 'password123', '2024-05-01 18:31:58'),
(3, 'Radu', 'ceva', '2024-05-01 18:54:34');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pentru tabele `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
