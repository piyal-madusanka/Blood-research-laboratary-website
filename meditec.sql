-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 09:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meditec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`id`, `username`, `email`, `password`) VALUES
(1, 'yasasri', 'yasasri@gmail.com', '1234'),
(2, 'ruwan', 'sandamal@gmail.com', '4567');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `destination`, `time`, `date`) VALUES
(1, '', 'kiralagolla , dambulla', ' 08:45', ' 2020-03-01'),
(2, '', '  dambulla', '08:45', 'date'),
(3, 'yasasri', '  nuwara', '02:03', '2020-01-01'),
(4, 'yasasri', '  galle', '02:03', '2020-01-01'),
(5, 'yasasri', '  galle', '13:00', '2020-01-01'),
(6, 'yasasri', '  kapuwaththa', '01:01', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `cryo_medi_history`
--

CREATE TABLE `cryo_medi_history` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `c_condition` varchar(250) NOT NULL,
  `c_symptoms` varchar(250) NOT NULL,
  `c_medication` varchar(250) NOT NULL,
  `c_allergies` varchar(250) NOT NULL,
  `c_tobbaco` varchar(250) NOT NULL,
  `c_alcohol` varchar(250) NOT NULL,
  `c_drugs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryo_medi_history`
--

INSERT INTO `cryo_medi_history` (`id`, `name`, `gender`, `c_condition`, `c_symptoms`, `c_medication`, `c_allergies`, `c_tobbaco`, `c_alcohol`, `c_drugs`) VALUES
(1, 'piyal madusanka', 'Male', 'no', 'no', 'no', 'no', 'no', 'not consume', 'no'),
(2, ' ', 'Male', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cryo_presev_user`
--

CREATE TABLE `cryo_presev_user` (
  `id` int(11) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `status` text NOT NULL,
  `alergies` text NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `weight` int(11) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `time` time NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryo_presev_user`
--

INSERT INTO `cryo_presev_user` (`id`, `nic`, `first_name`, `last_name`, `email`, `address`, `phone`, `status`, `alergies`, `blood_group`, `weight`, `destination`, `time`, `date`) VALUES
(1, '96', 'piyal', 'madusanka', 'nalakamax119@gmail.com', 'Alenegodayaaya, Kiralagolla, Dambuluoya', 757882954, 'single', 'no allergies', 'o+', 60, 'alen egoda yaaya , kiralagolla,dambuluoya, dambulla', '15:00:00', '2020-01-01'),
(2, '', 'dgb', 'gf', 'gfg@gmai.com', 'gh', 123, 'hg', 'hgh', 'hg', 0, 'hgh', '01:00:00', '2020-02-05'),
(3, '', 'rt', 'trt', 'a@gmail.com', 'Alenegodayaaya, Kiralagolla, Dambuluoya', 757882954, 'gh', 'hg', 'hg', 0, 'gfg', '01:59:00', '2020-02-05'),
(4, '', '', '', '', '', 0, 'cscs', 'csc', '', 0, 'Gampaha', '01:00:00', '2020-02-01'),
(5, '', '', '', '', '', 0, '', '', '', 0, 'Gampaha', '01:00:00', '2020-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_test_user`
--

CREATE TABLE `mobile_test_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `test` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_test_user`
--

INSERT INTO `mobile_test_user` (`id`, `name`, `email`, `address`, `phone`, `destination`, `time`, `date`, `price`, `test`) VALUES
(1, 'madushanka', 'm@gmail.com', 'Alenegodayaaya, Kiralagolla, Dambuluoya', '0757882954', NULL, NULL, NULL, 1500, 'volvo'),
(2, 'chamly', 'cccd', 'cc', 'cxc', '', '', '', 1500, 'volvo'),
(3, 'pramod', 'panadura', 'Alenegodayaaya, Kiralagolla, Dambuluoya', '0757882954', 'mathara', '01:00', '2020-02-03', 1500, 'volvo'),
(4, 'tharin', 'qwqw', 'qwqw', '0757882954', 'waligama', '01:00', '2020-02-03', 1500, 'volvo'),
(5, 'mathisha', 'nalakamax119@gmail.com', 'Alenegodayaaya, Kiralagolla, Dambuluoya', '0757882954', 'thekka waththa', '01:00', '2020-02-10', 1500, 'volvo'),
(6, 'dammika', 'dam@gmail.com', 'Alenegodayaaya, Kiralagolla, Dambuluoya', '0757882954', 'kakirawa', '01:00', '2020-02-04', 800, 'Creatinine');

-- --------------------------------------------------------

--
-- Table structure for table `sample_status`
--

CREATE TABLE `sample_status` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `container` varchar(100) NOT NULL,
  `remaining` varchar(100) NOT NULL,
  `tecnician` varchar(100) NOT NULL,
  `sample_date` varchar(100) NOT NULL,
  `recently` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_status`
--

INSERT INTO `sample_status` (`id`, `username`, `container`, `remaining`, `tecnician`, `sample_date`, `recently`) VALUES
(1, 'yasasri', 'bcan', '40', 'hj', '2021-03-01', 'gfgfgf');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`) VALUES
(1, '     Aerobic Culture & ABST - Urine(MSU)'),
(2, ' AFB/TB Smear Examination(Zienhl-Neelsen stain)'),
(3, 'ANA/ANF'),
(4, '   Anti Streptolysin "O" (ASO/ASLO) Titre'),
(5, '    APTT/PTTK'),
(6, ' Billirubin Direct     '),
(7, ' Billirubin Total'),
(8, '    Blood Urea Nitrogen(BUN)'),
(9, '                         \r\n                            Blood Grouping'),
(10, '  Blood Picture  '),
(11, ' CA 125'),
(12, ' Cloride'),
(13, '    \r\n                            Cholesterol,Total'),
(14, '   CK(CPK,Creatine kinase'),
(16, '    Creatinine'),
(15, '  CRP(C-Reactive Protein)'),
(17, '   Dengue NS1 Virus Antigen-ELISA'),
(18, '\r\n                            Dengue NS1 Virus Antigen-Rapid Test  '),
(19, '    EGFR(Estimated GFR)  '),
(20, '   Electrolytes-Serum (Na/K/Cl) '),
(21, ' \r\n                            ESR   '),
(22, '     \r\n                            FBP+ESR'),
(23, ' Ferritin '),
(24, '    Free T4 & TSH'),
(25, ' \r\n                           Free T4 (ft4)  '),
(19, '   Dengue NS1 Virus Antigen-ELISA'),
(19, '   Dengue NS1 Virus Antigen-ELISA'),
(26, '  Fructosamine '),
(27, 'FSH'),
(28, 'Full Blood Count(FBC)'),
(29, '    GGT(Gamma GT)'),
(30, 'Glucose,Fasting'),
(31, 'Glucose,Post Prandial(PPBS)'),
(26, '   Glucose, Random'),
(27, 'Haemoglobin'),
(28, '        HbA1c(Glycosylated Haemoglobin)-whole blood'),
(29, '  HBsAg - Rapid Test'),
(30, '  HCV Antibody-Rapid Test'),
(31, '     Hepatitis B Surface Antigen (HBsAG)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'yasasri', 'soisa', 'yasasri@gmail.com', '1234'),
(2, 'siba', 'appu', 's@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryo_medi_history`
--
ALTER TABLE `cryo_medi_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryo_presev_user`
--
ALTER TABLE `cryo_presev_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_test_user`
--
ALTER TABLE `mobile_test_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_status`
--
ALTER TABLE `sample_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `first_name_2` (`first_name`),
  ADD KEY `first_name` (`first_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cryo_medi_history`
--
ALTER TABLE `cryo_medi_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cryo_presev_user`
--
ALTER TABLE `cryo_presev_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mobile_test_user`
--
ALTER TABLE `mobile_test_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sample_status`
--
ALTER TABLE `sample_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
