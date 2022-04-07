-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 07:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attack`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_time` varchar(20) NOT NULL,
  `user_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `user_id`, `password`, `signup_time`, `user_ip`) VALUES
(1, 'admin@gmail.com', 'sds', '123456@', '2022:04:03 18:23:22', ''),
(2, 'admiccvn@gmail.com', 'sdsv 44t46', '123456@6454grre', '2022:04:03 22:29:23', ''),
(3, 'admiccvn@gmail.com', 'sdsv 44t46', '$2y$10$894uTigNjVsnCWXRQxFmi.X4TUIgWLntEhWeKMj5Y6olqCWkG.j8a', '2022:04:03 23:01:47', ''),
(4, 'adsmin@gmail.com', 'aZa', '$2y$10$9WDLzCfwTFVjKeu7GzQ4zuJGAc89TPrFS/JDNYaL5vTFqHUA807di', '2022:04:03 23:25:48', ''),
(5, 'adfghgmin@gmail.com', ',v', '$2y$10$7RF3eNf09Z8qB/6cwYLz9.2.LvxPyIJ70T8d2WEWhIebBQQRTRo6C', '2022:04:04 10:47:28', ''),
(6, 'admina@gmail.com', 'admina', '$2y$10$uQuV4F80k0LYuDAI5akS4.QLHuyXiOL2U37diSs8Jbkh9weiaFK4K', '2022:04:04 11:01:06', ''),
(7, 'admina@gmail.com', 'admina', '$2y$10$0E6Xwnfd4dltnbV48IZb4OUXXlIiqF/q6NmL3tJA1gZ2QYVsnzgfq', '2022:04:05 11:29:21', ''),
(8, 'adminaa@gmail.com', 'adminaa', '$2y$10$BM4fWINvfGDzIfi1.QAdtu5dYCSQRmM4oU47lIyL.oEyXKyg2Nne6', '2022:04:05 11:44:07', ''),
(9, 'adminaa@gmail.com', '&lt;script', '$2y$10$SvHj9NwZASvM5HA8vnaZz.5z4TTeiyOzrJiFyi/Do96GYHCuAJ1gm', '2022:04:05 11:45:12', ''),
(10, 'admincgfaa@gmail.com', '&lt;script', '$2y$10$aEDne8R51N7qxjuvoyh4i.rWiANnA/a9FKXQuL95h1GA9HpUaAjqC', '2022:04:05 12:08:32', '::1'),
(11, 'saffron@gmai.com', '&lt;script', '$2y$10$D4ONg4zk.6baLzCYPf6KI.ojJF7CPuCuyTmMBnS.x/5qOAKNa88xa', '2022:04:05 12:11:33', '192.168.0.204'),
(12, 'admin@simail.com', 'adminsa', '$2y$10$kpNCvgy6PXNSZ.11ufSjgewkCu4LRtpu/tNrUZxtppuDJcLpPbrJe', '2022:04:05 13:55:50', '::1'),
(13, 's21@hmail.com', 'ws', '$2y$10$9RK16FC0sIq3gIxnQgSdUerE1GVZ/DE.bRYpVSyRgm2EwsX7h0nSC', '2022:04:05 14:07:26', '::1'),
(14, 's21@hmail.com', 'ws', '$2y$10$z31UZiOcGAWZqKsht/EYNOVtQbLgbBqOGqi4y4Tns6mKdnD4OihGW', '2022:04:05 14:16:00', '::1'),
(15, 'adminsa007@gmail.com', 'adminsa007', '$2y$10$0ztza5Z88G3DqTNxKu0Qyej4osyGGBIgyIkrhgWQlgMYMf20TAhh6', '2022:04:05 14:16:36', '::1'),
(16, 'adminsa008@gmail.com', 'adminsa008', '$2y$10$4Fol8aBYv.LFd1XERvjTreg7IAre.xzwt5X2FMJqCLK/U5bQKV..m', '2022:04:05 14:18:51', '::1'),
(17, 'adminjhgzaq@gmail.co', 'admina', '$2y$10$Hrc5Rn8D5V.AkISCUmTMxOPIJcoapEfLQ7RE6XM.0zd/xkJ4H4T8C', '2022:04:05 16:56:33', '::1'),
(18, 'chad@gmail.com', 'chad', '$2y$10$vsyPWzDilByRTnS7/gnlwOb/04CRqadRbv91C/krROazKv6DzjKou', '2022:04:05 16:57:15', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
