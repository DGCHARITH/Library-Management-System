-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Title` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Title`, `Author`, `Subject`, `Date`) VALUES
('Start Where You Are', 'Alice Walker', 'A Guide to Compassionate Living', '2007-08-01'),
('The Purpose-Driven Life', 'Rick Warren', 'What on Earth Am I Here For?', '2003-08-01'),
('Resisting Happiness', 'Matthev Kelly', 'A True Story about Why We Sabotage Ourselves', '2007-06-02'),
('Give and Take', 'Adam Grant', 'WHY HELPING OTHERS DRIVES OUR SUCCESS', '2001-08-22'),
('You Are Not So Smart', 'David Maraney', 'Why You Have Too Many Friends on Facebook, Why You', '2017-04-01'),
('Practical Ayurveda', 'Srinath varma', 'Find Out Who You Are and What You Need to Bring Ba', '2003-01-10'),
('Boundaries', 'John ', 'When to Say Yes, How to Say No to Take Control of ', '2013-10-11'),
('The Power of Now', 'Eckhart Tolle', 'A Guide to Spiritual Enlightenment', '2014-08-01'),
('Rich Dad Poor Dad', 'Robert T', 'Rich Dad Poor Dad', '2012-03-18'),
('Living in the Light', 'Shakti Guwan', 'A guide to personal transformation', '2007-08-01'),
('The Gifts of Imperfection', 'Brene Brown', 'Embrace Who You Are', '2007-12-10'),
('Call of the Wild', 'Jack London ', 'Call of the Wild', '2009-11-02'),
('The Intelligent Investor', 'Warren', 'The Intelligent Investor', '2005-05-10'),
('Think And Grow Rich', 'Nollen', 'Think And Grow Rich', '2006-03-14'),
('Zero to One', 'Peter Ali', 'Notes on Startups, or How to Build the Future', '2008-02-10'),
('Be Here Now', 'Maharaj', 'Open Your Mind to Spirituality', '2006-11-10'),
('How To Improve Memory', 'Bob ', 'The Ultimate Mind Power Manual?', '2005-06-12'),
('Power up Your Mind', 'Bill', 'Learn faster, work smarter', '2000-06-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
