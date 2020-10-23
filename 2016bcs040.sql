-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2016bcs040`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(14, 'lunch', 'time to eat', 1),
(18, '10:30 AM', 'tihjk', 1),
(19, '11:00 PM', 'time for a walk.', 1),
(20, 'sjelf', 'djflks', 1),
(21, '10:00 PM', 'time to eat.', 1),
(22, '10:00 PM', 'Time to eat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(5) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_brand` varchar(50) NOT NULL,
  `m_desc` text NOT NULL,
  `m_img` longtext NOT NULL,
  `m_price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_brand`, `m_desc`, `m_img`, `m_price`) VALUES
(2, 'Crocin', 'CK', 'Crocin is a carotenoid chemical compound that is found in the flowers crocus and gardenia. Crocin is the chemical primarily responsible for the color of saffron. Chemically, crocin is the diester formed from the disaccharide gentiobiose and the dicarboxylic acid crocetin.', 'images/crocin.jpg', 0),
(3, 'Olrivin', 'Otrivin', 'Xylometazoline, also spelled xylomethazoline, is a medication used to reduce symptoms of nasal congestion, allergic rhinitis, and sinusitis. Use is not recommended for more than seven days. Use is also not recommended in those less than three months of age and some say not less than 6 years of age.', 'images/o.jpg', 0),
(4, 'Dyclofenac', 'Voltaren', 'This viral fever medicine helps to reduce fever, inflammation, and pain. This three in one medicine is highly recommended among doctor for treating fever and pain caused due to viral infection. Its action is by inhibiting prostaglandins synthesis and COX-2 inhibitors. Each capsule consists of 100mg. Dosage is twice a day after food to prevent gastric irritation.', 'images/d.jpg', 0),
(1, 'Paracetamol', 'Voltaren', 'Paracetamol, also known as acetaminophen, is a medication used to treat pain and fever. It is typically used for mild to moderate pain relief. Evidence is mixed for its use to relieve fever in children. It is often sold in combination with other medications, such as in many cold medications', 'images/download.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`) VALUES
(7, 'sakshi jaiswal67', 'sakshigj', 'sakshi@123', 'Female', 'saksh@gmail.com', '79898788', 'Nanded');

-- --------------------------------------------------------

--
-- Table structure for table `yoga`
--

CREATE TABLE `yoga` (
  `yoga_id` int(10) NOT NULL,
  `yoga_name` varchar(50) NOT NULL,
  `yoga_desc` text NOT NULL,
  `yoga_img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yoga`
--

INSERT INTO `yoga` (`yoga_id`, `yoga_name`, `yoga_desc`, `yoga_img`) VALUES
(1, 'Trikonasana', 'Hip problems are routine among seniors. Trikonasana helps strengthen and stretch the hip region.\r\nIt helps regulate blood pressure, a common complaint amongst the elderly.', 'images/y1.jpg'),
(2, 'Katichakrasana', 'Katichakrasana (Standing spinal twist)\r\nHelps to keep the spine straight, preventing slouching.\r\nHelps strengthen the arm and leg muscles, ensuring that seniors are firm on their feet.', 'images/y2.jpg'),
(3, 'Badhakonasana', 'Badhakonasana (Butterfly Pose)\r\nHelps clear bowel movements, thus regulating digestion.\r\nStretches the thighs and knees, reducing joint stiffness and pain.\r\n ', 'images/y3.jpg'),
(4, 'Shishuasana', 'Shishuasana (Child Pose)\r\n \r\n\r\nCalms the nervous system.\r\nRelaxes the back, helping to relieve back aches.', 'images/y4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
