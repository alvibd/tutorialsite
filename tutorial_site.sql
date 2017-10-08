-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2015 at 09:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
`category_id` int(200) NOT NULL,
  `category_name` char(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`) VALUES
(7, 'C'),
(8, 'C#'),
(9, 'JavaScript'),
(10, 'HTML5'),
(11, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_table`
--

CREATE TABLE IF NOT EXISTS `tutorial_table` (
`tutorial_id` int(255) NOT NULL,
  `category_id` int(200) NOT NULL,
  `tutorial_name` varchar(200) NOT NULL,
  `video_link` varchar(1000) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial_table`
--

INSERT INTO `tutorial_table` (`tutorial_id`, `category_id`, `tutorial_name`, `video_link`, `description`) VALUES
(10, 7, 'Introduction', '2NWeucMKrLI', NULL),
(11, 7, 'Setting Up Code Blocks', '3DeLiClDd04', ''),
(12, 7, 'How Computer Programs Work', 'iWx3yyFMWQA', ''),
(13, 7, 'Print Text on the Screen', 'oSpmApiUsHw', ''),
(14, 7, 'Comments', 'oX2FpFYXE38', ''),
(15, 7, 'Conversion Characters', 'To7WA4ijQQ0', ''),
(16, 7, 'Variables', 'k1ur8rX-DQQ', ''),
(17, 7, 'String Terminator', 'LEHaSSYreeo', ''),
(18, 7, 'I Need Arrays', '7F-Q2oVBYKk', ''),
(19, 7, 'Creating a Header File', '1EeetMPACMI', ''),
(20, 7, 'Getting Input with scanf', 'hSHFjPvqFjw', ''),
(21, 8, 'Introduction and Installing C# 2010', 'x_9lfHjYtVg', ''),
(22, 8, 'Changing Forms Properties', 'zUbVMdF_kU4', ''),
(23, 8, 'Showing MessageBoxes', 'glzUzy1C7IM', ''),
(24, 8, 'Variables', 'Em9VcqdGatg', ''),
(25, 8, 'Changing Properties With Code', 'x-OynOfFoA8', ''),
(26, 8, 'If Statements', 'QX-x-48xP5U', ''),
(27, 8, 'More on If Statements', 'PAwO1ZbvMI4', ''),
(28, 8, 'If Statements pt 3', 'i4nys8oPT_U', ''),
(29, 8, 'Switch Statements', 'uEnWW8ba-wI', ''),
(30, 8, 'Mathematical Operators', '2KG_ADNE4fg', ''),
(31, 9, 'Introduction to JavaScript', 'yQaAGmHNn9s', ''),
(32, 9, 'Comments and Statements', 'yUyJ1gcaraM', ''),
(33, 9, 'Variables', 'og4Zku5VVl0', ''),
(34, 9, 'Different Types of Variables', 'sY8qiSaAi9g', ''),
(35, 9, 'Using Variables with Strings', 'QLpghQ2MMfs', ''),
(36, 9, 'Functions', '5nuqALOHN1M', ''),
(37, 9, 'Using Parameters with Functions', '7i1f23AVsn4', ''),
(38, 9, 'Functions with Multiple Parameters', 'BgtdojEoWFI', ''),
(39, 9, 'The return Statement', 'AdQcd3sKGC8', ''),
(40, 9, 'Calling a Function From Another Function', '95mIis5M-gU', ''),
(41, 10, 'Introduction', 'Mp0f0zTPLec', ''),
(42, 10, 'Creating a Basic Template', 'qseNjA-73Fw', ''),
(43, 10, 'Setting up the body', 'eDR7zpVfX_4', ''),
(44, 10, 'Adding the Meat!', 'go5U9wfM9h4', ''),
(45, 10, 'Attribute Selectors', 'a5KD47HDRho', ''),
(46, 10, 'Introduction to pseudo-classes', '0pb81VdSO_E', ''),
(47, 10, 'negation pseudo-class', 'JaLebQ-QDVo', ''),
(48, 10, 'Sweet New CSS3 Selectors', 'tIznbrsfQZQ', ''),
(49, 10, 'Laying Out the Website', 'Q7eoOSZ7JdY', ''),
(50, 10, 'Starting the Styling', 'P71U-doyzNg', ''),
(52, 11, 'Introduction to PHP', 'iCUV3iv9xOs', ''),
(53, 11, 'Installing XAMPP Part 1', 'k6ZiPqsBvEQ', ''),
(54, 11, 'Installing XAMPP Part 2', 'F0epWxZDlOk', ''),
(55, 11, 'Creating Your First PHP File', '7NuTyB8Ypxc', ''),
(56, 11, 'Writing Your First PHP File', 'saxBXBb-f8c', ''),
(57, 11, 'The phpinfo Function', 'iMb-R6NSfmc', ''),
(58, 11, 'The php.ini File', 'Kqxq9Et4Dpg', ''),
(59, 11, 'Indentation', 'EsF2Sb3pf6w', ''),
(60, 11, 'echo', '7Dwsa7aWfN8', ''),
(61, 11, 'print', 'TI6mXu42L3U', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tutorial_table`
--
ALTER TABLE `tutorial_table`
 ADD PRIMARY KEY (`tutorial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
MODIFY `category_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tutorial_table`
--
ALTER TABLE `tutorial_table`
MODIFY `tutorial_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
