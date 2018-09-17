-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 02:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_name` varchar(26) NOT NULL,
  `ad_pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `ad_pass`) VALUES
('ad11-1234', 'Ali khan', 'asdf1234');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `roll_no` varchar(10) NOT NULL,
  `class_Id` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`roll_no`, `class_Id`, `date`, `status`) VALUES
('p16-6069', '1A', '2018-05-03', 'A'),
('p16-6069', '1A', '2018-05-03', 'P'),
('P19-6015', '1A', '2018-05-03', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `class` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_sections`
--

INSERT INTO `class_sections` (`class`) VALUES
('1A'),
('2A');

-- --------------------------------------------------------

--
-- Table structure for table `class_teacher`
--

CREATE TABLE `class_teacher` (
  `class_ID` varchar(3) NOT NULL,
  `teach_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_teacher`
--

INSERT INTO `class_teacher` (`class_ID`, `teach_id`) VALUES
('1A', 't11-1123'),
('2A', 't11-1124');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `roll_no` varchar(12) NOT NULL,
  `class_ID` varchar(3) NOT NULL,
  `type` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`roll_no`, `class_ID`, `type`) VALUES
('123', '1A', 'student'),
('P19-6015', '1A', 'student'),
('P20-6005', '1A', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `roll_no` varchar(12) NOT NULL,
  `Sub_name` varchar(26) NOT NULL,
  `obt_marks` int(3) NOT NULL,
  `total_marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`roll_no`, `Sub_name`, `obt_marks`, `total_marks`) VALUES
('123', 'DBMS', 0, 0),
('1234', 'DBMS', 0, 0),
('P19-6015', 'DBMS', 35, 40);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` varchar(10) NOT NULL,
  `st_pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(16) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `st_pass`, `email`, `st_name`, `f_name`, `gender`, `contact`, `address`) VALUES
('123', '1234', '1A', 'Baboon', 'AHMAD', 'Male', '98008383', 'hhsadhsfhddsh'),
('1234', 'hahsajasj', 'tauqeer618@yahoo.com', 'nxnbcxzc', 'nxcnbcz', 'Female', '1231312', 'jjcdsajdsa'),
('p16-6069', '', '9191@nu.edu.pk', 'Muhammad HamZa', 'al habib', 'Female', '030034568', 'asdf- street 123'),
('P19-6015', 'yt1234', '1A', 'Ali Abbas Khan', 'Khan sb', 'Male', '03339174258', 'faisal abad'),
('P20-6005', 'mera123', '1A', 'abc', 'def', 'Male', '75675', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_name` varchar(26) NOT NULL,
  `cr_hours` int(1) NOT NULL,
  `sub_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_name`, `cr_hours`, `sub_id`) VALUES
('DBMS', 3, 113),
('OS', 3, 129);

-- --------------------------------------------------------

--
-- Table structure for table `takencoursebyteacher`
--

CREATE TABLE `takencoursebyteacher` (
  `id` int(11) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `takencoursebyteacher`
--

INSERT INTO `takencoursebyteacher` (`id`, `courseid`, `teacherid`) VALUES
(1, '4', 'te-123-1'),
(2, '8', 'te-123-1'),
(3, '1', 'te-124-1'),
(4, '2', 'te-124-1'),
(5, '18', 'te-125-1'),
(6, '19', 'te-125-1'),
(7, '11', 'te-125-1'),
(8, '24', 'te-126-1'),
(9, '23', 'te-126-1'),
(10, '22', 'te-126-1'),
(11, '4', 'te-124-1'),
(12, '5', 'te-123-1'),
(13, '6', 'te-125-1'),
(14, '7', 'te-127-1'),
(15, '9', 'te-127-1'),
(16, '10', 'te-127-1'),
(17, '17', 'te-125-1'),
(18, '16', 'te-125-1'),
(19, '15', 'te-125-1'),
(20, '14', 'te-126-1'),
(21, '13', 'te-126-1'),
(22, '12', 'te-126-1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teach_ID` varchar(12) NOT NULL,
  `teach_name` varchar(26) NOT NULL,
  `teach_pass` varchar(12) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email` varchar(26) NOT NULL,
  `address` varchar(40) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `Salary` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teach_ID`, `teach_name`, `teach_pass`, `phone_no`, `email`, `address`, `sex`, `Salary`) VALUES
('t11-1123', 'Ahmad', '1234', '3456987', 'ahmad@amail.com', '23- street, islamabad', 'M', 100212),
('t11-1124', 'Hamza', 't1234', '345926987', 'hamza@amail.com', '23- street, house# 11, islamabad', 'M', 22000),
('t12-4356', 'Hamza Ali', 'asdff', '09799', '1234@xyz.mail', 'asd gali 123', 'Male', 12345),
('t123-2221', 'hsjss', '1234', '929921921', '', 'my home sweert', '', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `teach_cources`
--

CREATE TABLE `teach_cources` (
  `Teach_ID` varchar(10) NOT NULL,
  `Sub_name` varchar(26) NOT NULL,
  `class_ID` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_cources`
--

INSERT INTO `teach_cources` (`Teach_ID`, `Sub_name`, `class_ID`) VALUES
('t11-1123', 'OS', '1A'),
('t11-1123', 'DBMS', '1A'),
('t12-4356', 'DBMS', '1A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user_name`, `password`, `type`) VALUES
('P19-6015', 'Ali Abbas', '1234', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD KEY `jdjsaj` (`class_Id`),
  ADD KEY `jjjjj` (`roll_no`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `class_teacher`
--
ALTER TABLE `class_teacher`
  ADD KEY `ssss` (`class_ID`),
  ADD KEY `mm` (`teach_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD KEY `hdsds` (`class_ID`),
  ADD KEY `nznx` (`roll_no`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`roll_no`,`Sub_name`),
  ADD KEY `f_k2` (`Sub_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_name`);

--
-- Indexes for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teach_ID`);

--
-- Indexes for table `teach_cources`
--
ALTER TABLE `teach_cources`
  ADD KEY `dsada` (`class_ID`),
  ADD KEY `sasa` (`Sub_name`),
  ADD KEY `saa` (`Teach_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendence`
--
ALTER TABLE `attendence`
  ADD CONSTRAINT `jdjsaj` FOREIGN KEY (`class_Id`) REFERENCES `class_sections` (`class`),
  ADD CONSTRAINT `jjjjj` FOREIGN KEY (`roll_no`) REFERENCES `student` (`roll_no`);

--
-- Constraints for table `class_teacher`
--
ALTER TABLE `class_teacher`
  ADD CONSTRAINT `mm` FOREIGN KEY (`teach_id`) REFERENCES `teacher` (`Teach_ID`),
  ADD CONSTRAINT `ssss` FOREIGN KEY (`class_ID`) REFERENCES `class_sections` (`class`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `hdsds` FOREIGN KEY (`class_ID`) REFERENCES `class_sections` (`class`),
  ADD CONSTRAINT `nznx` FOREIGN KEY (`roll_no`) REFERENCES `student` (`roll_no`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `f_k1` FOREIGN KEY (`roll_no`) REFERENCES `student` (`roll_no`),
  ADD CONSTRAINT `f_k2` FOREIGN KEY (`Sub_name`) REFERENCES `subjects` (`sub_name`);

--
-- Constraints for table `teach_cources`
--
ALTER TABLE `teach_cources`
  ADD CONSTRAINT `dsada` FOREIGN KEY (`class_ID`) REFERENCES `class_sections` (`class`),
  ADD CONSTRAINT `saa` FOREIGN KEY (`Teach_ID`) REFERENCES `teacher` (`Teach_ID`),
  ADD CONSTRAINT `sasa` FOREIGN KEY (`Sub_name`) REFERENCES `subjects` (`sub_name`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`uid`) REFERENCES `student` (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
