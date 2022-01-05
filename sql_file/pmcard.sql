-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 08:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `machine_code_db`
--

CREATE TABLE `machine_code_db` (
  `id` int(11) NOT NULL,
  `machine_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machine_code_db`
--

INSERT INTO `machine_code_db` (`id`, `machine_code`) VALUES
(4, 'SD3210');

-- --------------------------------------------------------

--
-- Table structure for table `machine_part_db`
--

CREATE TABLE `machine_part_db` (
  `id` int(11) NOT NULL,
  `machine_part_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machine_part_db`
--

INSERT INTO `machine_part_db` (`id`, `machine_part_name`) VALUES
(3, 'Gyártó');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_electric_db`
--

CREATE TABLE `mechanic_electric_db` (
  `id` int(11) NOT NULL,
  `mech_elec` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mechanic_electric_db`
--

INSERT INTO `mechanic_electric_db` (`id`, `mech_elec`) VALUES
(1, 'Mechanikus'),
(2, 'Elektromos');

-- --------------------------------------------------------

--
-- Table structure for table `namelist_db`
--

CREATE TABLE `namelist_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `card_number` int(5) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `namelist_db`
--

INSERT INTO `namelist_db` (`id`, `name`, `username`, `password`, `card_number`, `rank`) VALUES
(1, 'Tóth György', 'Drageron', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', 12345, 5),
(5, 'János', 'testuser', '12345', 12345, 6),
(6, 'lófasz', 'testuser', '1234', 12424, 2);

-- --------------------------------------------------------

--
-- Table structure for table `parts_db`
--

CREATE TABLE `parts_db` (
  `id` int(11) NOT NULL,
  `parts_name` varchar(100) NOT NULL,
  `article_number` int(15) NOT NULL,
  `mpn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts_db`
--

INSERT INTO `parts_db` (`id`, `parts_name`, `article_number`, `mpn`) VALUES
(3, 'Csapágy', 1022324, '02402401103');

-- --------------------------------------------------------

--
-- Table structure for table `pmcardmain_db`
--

CREATE TABLE `pmcardmain_db` (
  `id` int(11) NOT NULL,
  `pm_id` varchar(255) NOT NULL,
  `session_name` varchar(255) NOT NULL,
  `bd_pf` int(11) NOT NULL,
  `mech_elec` int(11) NOT NULL,
  `machine_code` int(11) NOT NULL,
  `date` date NOT NULL,
  `shift` int(11) NOT NULL,
  `operating_hour` int(30) NOT NULL,
  `sku_code` int(15) NOT NULL,
  `machine_part` int(11) NOT NULL,
  `parts` int(11) NOT NULL,
  `pictures` varchar(20) NOT NULL,
  `error_description` text NOT NULL,
  `repair_description` text NOT NULL,
  `made_repair` int(11) NOT NULL,
  `stop_start` time NOT NULL,
  `repair_start` time NOT NULL,
  `repair_end` time NOT NULL,
  `stop_length` time DEFAULT NULL,
  `repair_length` time DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pmcardmain_db`
--

INSERT INTO `pmcardmain_db` (`id`, `pm_id`, `session_name`, `bd_pf`, `mech_elec`, `machine_code`, `date`, `shift`, `operating_hour`, `sku_code`, `machine_part`, `parts`, `pictures`, `error_description`, `repair_description`, `made_repair`, `stop_start`, `repair_start`, `repair_end`, `stop_length`, `repair_length`, `category`) VALUES
(51, '', '', 1, 1, 4, '2022-01-01', 1, 2147483647, 1231234124, 3, 3, '31ed9-teszt.png', '<p>\n	dfsdfsdfdsf</p>\n', '<p>\n	sdfdsfdsfdsf</p>\n', 1, '15:22:00', '15:24:00', '15:28:00', NULL, NULL, NULL),
(52, '', '', 1, 1, 4, '2022-01-01', 1, 314241, 12323213, 3, 3, '55f05-teszt.png', '<p>\n	dssdfsdf</p>\n', '<p>\n	dfsdfdsffd</p>\n', 1, '15:50:00', '17:44:00', '21:44:00', NULL, NULL, NULL),
(53, '2022010172799', '', 1, 1, 4, '2022-01-01', 1, 2147483647, 1231234124, 3, 3, '', 'cvnxnvcxn', 'cvncxnvcxn', 1, '22:36:00', '22:38:00', '23:36:00', NULL, NULL, NULL),
(54, '2022010172799', '', 1, 1, 4, '2022-01-01', 1, 2147483647, 1231234124, 3, 3, '', 'cvnxnvcxn', 'cvncxnvcxn', 1, '22:36:00', '22:38:00', '23:36:00', NULL, NULL, NULL),
(55, '2022010172799', '', 1, 1, 4, '2022-01-01', 1, 2147483647, 1231234124, 3, 3, '', 'cvnxnvcxn', 'cvncxnvcxn', 1, '22:36:00', '22:38:00', '23:36:00', NULL, NULL, NULL),
(56, '2022010172799', '', 1, 1, 4, '2022-01-01', 1, 2147483647, 1231234124, 3, 3, '', 'cvnxnvcxn', 'cvncxnvcxn', 1, '22:36:00', '22:38:00', '23:36:00', NULL, NULL, NULL),
(57, '2022010172799', '', 1, 1, 4, '2022-01-01', 1, 2147483647, 1231234124, 3, 3, '', 'cvnxnvcxn', 'cvncxnvcxn', 1, '22:36:00', '22:38:00', '23:36:00', NULL, NULL, NULL),
(58, '2022010172799', '', 1, 1, 4, '2022-01-01', 1, 2147483647, 1231234124, 3, 3, '', 'cvnxnvcxn', 'cvncxnvcxn', 1, '22:36:00', '22:38:00', '23:36:00', NULL, NULL, NULL),
(59, '2022010198101', '', 1, 1, 4, '2021-12-31', 1, 1234567, 12323213, 3, 3, '', 'yxvyxv', 'yxvxyv', 1, '23:00:00', '23:01:00', '23:04:00', NULL, NULL, NULL),
(60, '2022010339579', '', 1, 1, 4, '2022-01-03', 1, 2147483647, 1231234124, 3, 3, '', 'sdadg', 'adsgadsg', 1, '20:17:00', '20:19:00', '21:16:00', NULL, NULL, NULL),
(61, '2022010351946', 'Tóth György', 1, 1, 4, '2022-01-03', 1, 1234567, 1231234124, 3, 3, '', 'xvycvxcv', 'xcvcxv', 1, '20:20:00', '20:22:00', '02:18:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pmcardtype_db`
--

CREATE TABLE `pmcardtype_db` (
  `id` int(11) NOT NULL,
  `bd_pf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pmcardtype_db`
--

INSERT INTO `pmcardtype_db` (`id`, `bd_pf`) VALUES
(1, 'Géptörés'),
(2, 'Folyamathiba');

-- --------------------------------------------------------

--
-- Table structure for table `ranks_category`
--

CREATE TABLE `ranks_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ranks_category`
--

INSERT INTO `ranks_category` (`id`, `category`) VALUES
(1, 'Basic'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `ranks_db`
--

CREATE TABLE `ranks_db` (
  `id` int(11) NOT NULL,
  `rank_name` varchar(100) NOT NULL,
  `rank_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ranks_db`
--

INSERT INTO `ranks_db` (`id`, `rank_name`, `rank_category`) VALUES
(1, 'Operátor', 1),
(2, 'Gépmester', 1),
(3, 'Műszakvezető', 2),
(4, 'Maintenance lead', 2),
(5, 'Process lead', 2),
(6, 'Line lead', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shift_db`
--

CREATE TABLE `shift_db` (
  `id` int(11) NOT NULL,
  `shiftcode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shift_db`
--

INSERT INTO `shift_db` (`id`, `shiftcode`) VALUES
(1, 'Délelött'),
(2, 'Délután'),
(3, 'Éjszaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `machine_code_db`
--
ALTER TABLE `machine_code_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machine_part_db`
--
ALTER TABLE `machine_part_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanic_electric_db`
--
ALTER TABLE `mechanic_electric_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namelist_db`
--
ALTER TABLE `namelist_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rank_index` (`rank`);

--
-- Indexes for table `parts_db`
--
ALTER TABLE `parts_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmcardmain_db`
--
ALTER TABLE `pmcardmain_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pmcardmain_index` (`id`),
  ADD KEY `bd_pf_index` (`bd_pf`),
  ADD KEY `mech_elec_index` (`mech_elec`),
  ADD KEY `machine_code_index` (`machine_code`),
  ADD KEY `shift_index` (`shift`),
  ADD KEY `machine_part_index` (`machine_part`),
  ADD KEY `made_repair_index` (`made_repair`),
  ADD KEY `parts_index` (`parts`),
  ADD KEY `bd_pf` (`bd_pf`);

--
-- Indexes for table `pmcardtype_db`
--
ALTER TABLE `pmcardtype_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranks_category`
--
ALTER TABLE `ranks_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_indey` (`id`);

--
-- Indexes for table `ranks_db`
--
ALTER TABLE `ranks_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rank_category_index` (`rank_category`) USING BTREE;

--
-- Indexes for table `shift_db`
--
ALTER TABLE `shift_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `machine_code_db`
--
ALTER TABLE `machine_code_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `machine_part_db`
--
ALTER TABLE `machine_part_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mechanic_electric_db`
--
ALTER TABLE `mechanic_electric_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `namelist_db`
--
ALTER TABLE `namelist_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parts_db`
--
ALTER TABLE `parts_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pmcardmain_db`
--
ALTER TABLE `pmcardmain_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pmcardtype_db`
--
ALTER TABLE `pmcardtype_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ranks_category`
--
ALTER TABLE `ranks_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ranks_db`
--
ALTER TABLE `ranks_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shift_db`
--
ALTER TABLE `shift_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `namelist_db`
--
ALTER TABLE `namelist_db`
  ADD CONSTRAINT `namelist_db_ibfk_1` FOREIGN KEY (`rank`) REFERENCES `ranks_db` (`id`);

--
-- Constraints for table `pmcardmain_db`
--
ALTER TABLE `pmcardmain_db`
  ADD CONSTRAINT `pmcardmain_db_ibfk_1` FOREIGN KEY (`shift`) REFERENCES `shift_db` (`id`),
  ADD CONSTRAINT `pmcardmain_db_ibfk_2` FOREIGN KEY (`mech_elec`) REFERENCES `mechanic_electric_db` (`id`),
  ADD CONSTRAINT `pmcardmain_db_ibfk_3` FOREIGN KEY (`bd_pf`) REFERENCES `pmcardtype_db` (`id`),
  ADD CONSTRAINT `pmcardmain_db_ibfk_4` FOREIGN KEY (`machine_code`) REFERENCES `machine_code_db` (`id`),
  ADD CONSTRAINT `pmcardmain_db_ibfk_5` FOREIGN KEY (`parts`) REFERENCES `parts_db` (`id`),
  ADD CONSTRAINT `pmcardmain_db_ibfk_6` FOREIGN KEY (`machine_part`) REFERENCES `machine_part_db` (`id`),
  ADD CONSTRAINT `pmcardmain_db_ibfk_7` FOREIGN KEY (`made_repair`) REFERENCES `namelist_db` (`id`);

--
-- Constraints for table `ranks_db`
--
ALTER TABLE `ranks_db`
  ADD CONSTRAINT `ranks_db_ibfk_1` FOREIGN KEY (`rank_category`) REFERENCES `ranks_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
