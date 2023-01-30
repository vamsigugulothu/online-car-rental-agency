-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2023 at 03:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `added_cars`
--

CREATE TABLE `added_cars` (
  `car_id` varchar(255) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `car_number` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `rent` int(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `added_agency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `added_cars`
--

INSERT INTO `added_cars` (`car_id`, `car_model`, `car_number`, `capacity`, `rent`, `availability`, `added_agency`) VALUES
('123', 'Rolls Royce', '3243', 4, 3000, 'no', 'vamsinayak18@gmail.com'),
('63d4cc2cb9955', 'BMW', '3243', 4, 200, 'no', 'vamsinayak18@gmail.com'),
('63d4d1aead5b8', 'Lamborgini', 'AP3457', 2, 500, 'no', 'vamsinayak18@gmail.com'),
('63d4d1d4ba64f', 'Ferrari', 'AP3521', 4, 5000, 'no', 'vamsinayak18@gmail.com'),
('63d4d535f0bc4', 'Bugati', 'Ap3454', 4, 4000, 'no', 'vamsinayak18@gmail.com'),
('63d52f77981fa', 'New Car', 'KL4321', 10, 5000, 'no', 'vamsinayak18@gmail.com'),
('63d52fa227865', 'Thar', 'KL1214', 4, 2000, 'no', 'vamsinayak18@gmail.com'),
('63d5347b25ca3', 'Hemanths car', 'H2345', 3, 4000, 'no', 'hemanth@gmail.com'),
('63d5349087c2f', 'Hemanth New Car', 'H3H4', 4, 4000, 'no', 'hemanth@gmail.com'),
('63d606dc1fd1c', 'Maruti', 'AP9003', 4, 4000, 'no', 'hemanth@gmail.com'),
('63d6075dadaa0', 'New Car', 'sd4567', 4, 7000, 'no', 'hemanth@gmail.com'),
('63d6096ef03de', 'Car New', '12323', 4, 4000, 'no', 'hemanth@gmail.com'),
('63d61396e7068', 'My New car', 'AP4678', 3, 6000, 'yes', 'vamsi@gmail.com'),
('63d616258b710', 'Rolls Royce', 'AP8763', 5, 6000, 'yes', 'vamsi@gmail.com'),
('63d6163bbe939', 'Mahendra Thar', 'AP5678', 6, 10000, 'yes', 'vamsi@gmail.com'),
('63d64f8fd5757', 'Jeep', 'AP8796', 8, 5000, 'yes', 'hemanth@gmail.com'),
('63d65a06d822e', 'Car1', 'AP5678', 4, 45678, 'no', 'hemanth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `sno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_ques` varchar(255) NOT NULL,
  `security_ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`sno`, `email`, `password`, `security_ques`, `security_ans`) VALUES
(1, 'vamsinayak18@gmail.com', 'vamsig', 'Your Nickname', 'santa'),
(2, 'hemanth@gmail.com', 'hemanth', 'Your Nickname', 'tinku'),
(5, 'satish@gmail.com', 'satish', 'Your Nickname', 'sat'),
(6, 'vas@gmail.com', 'vamsig', 'Your Nickname', 'sant'),
(7, 'vs@gmail.com', 'vamsig', 'Your Nickname', 'santoor');

-- --------------------------------------------------------

--
-- Table structure for table `booked_cars`
--

CREATE TABLE `booked_cars` (
  `car_id` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `noof_days` int(255) NOT NULL,
  `booked_customer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_cars`
--

INSERT INTO `booked_cars` (`car_id`, `start_date`, `noof_days`, `booked_customer`) VALUES
('63d4d1aead5b8', '2023-01-28', 4, 'vamsi@learnyst.com'),
('63d4d1d4ba64f', '2023-01-27', 5, 'vamsi@learnyst.com'),
('63d4d535f0bc4', '2023-01-29', 3, 'vamsi@learnyst.com'),
('63d5347b25ca3', '2023-01-29', 3, 'hemanth@gmail.com'),
('123', '2023-01-09', 12, 'kumar980.satish@gmail.com'),
('63d4cc2cb9955', '2023-01-30', 45, 'kumar980.satish@gmail.com'),
('63d5349087c2f', '2023-01-30', 4, 'hemanth@gmail.com'),
('63d606dc1fd1c', '2023-01-30', 5, 'hemanth@gmail.com'),
('63d6075dadaa0', '2023-01-30', 4, 'hemanth@gmail.com'),
('63d6096ef03de', '2023-01-30', 4, 'hemanth@gmail.com'),
('63d52fa227865', '2023-01-30', 4, 'hemanth@gmail.com'),
('63d52f77981fa', '2023-01-30', 4, 'kumar980.satish@gmail.com'),
('63d65a06d822e', '2023-01-30', 5, 'hemanth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `sno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_ques` varchar(255) NOT NULL,
  `security_ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`sno`, `email`, `password`, `security_ques`, `security_ans`) VALUES
(1, 'vamsi@learnyst.com', 'Vamsi@789', 'Your Pet name', 'tommy'),
(2, 'hemanth@learnyst.com', 'heamnth', 'Your Nickname', 'timku'),
(3, 'hemanth@gmail.com', 'vamsig', 'Your Nickname', 'timku'),
(4, 'kumar980.satish@gmail.com', '1234', 'Your Nickname', 'kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
