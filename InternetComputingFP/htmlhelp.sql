-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 04:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htmlhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `FirstName`, `LastName`, `Email`) VALUES
('HTML_HOST', 'HTML_PASSWORD', 'HTML', 'help', 'HTMLhelp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Question` varchar(5000) DEFAULT NULL,
  `Choice1` varchar(255) DEFAULT NULL,
  `Choice2` varchar(255) DEFAULT NULL,
  `Choice3` varchar(255) DEFAULT NULL,
  `Choice4` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Question`, `Choice1`, `Choice2`, `Choice3`, `Choice4`, `Answer`) VALUES
('What does HTML5 stand for?', 'HyperText Markup Language 5', 'HighTechnical Markup Language 5', 'HyperText Making Language 5', 'HighText Makeup Language 5', 'HyperText Markup Language 5'),
('What is the first element in an HTML5 document?', 'head', 'title', '!DOCTYPE html', 'body', '!DOCTYPE html'),
('Which of the following is an example of a start and end tag?', 'htmlhtml', '/html html', '/html /html', 'html /html', 'html /html'),
('What element is used to create links in an html file?', 'a', 'link', 'website', 'URL', 'a'),
('What element can be used if a browser is not able to render an image within the image tag?', 'text', 'alt', 'p', 'img', 'alt'),
('How do you use an ampersand in a paragraph tag? You can ignore the parentheses', '&', 'amp', '(&)amp', 'There is no way', '(&)amp'),
('What does the action element assuming it is a URL link do in a form tag?', 'Does nothing', 'Copy the link in your browser', 'Deletes the link from your browser', 'Takes you to the link', 'Takes you to the link'),
('What attribute forces the user to enter a value before submitting the form?', 'required', 'forced', 'needed', 'essential', 'required'),
('The inline style of CSS declares an individual element’s format using what HTML5 attribute?', 'CSS', 'style', 'class', 'id', 'style'),
('How do you embed styling to a tag with an id attribute of “test”?', '.test{...}', 'test{...}', '#test{...}', '&test{...}', '#test{...}'),
('Where do you place the style tag in an HTML file to embed CSS in your document?', 'body', 'title', 'p', 'head', 'head'),
('Which of the following styling attributes is for relative length measurements?', 'in (inches)', 'px (pixels)', 'cm (centimeters)', 'pt (points)', 'px (pixels)'),
('Can you link an external style sheet?', 'Yes', 'No', 'Maybe', 'Never', 'Yes'),
('What type of text can you apply the text shadow effect to?', 'paragraphs', 'any', 'headings', 'forms', 'any'),
('What does CSS3 stand for?', 'Clean Style Sheets 3', 'Cascading Style Sheets 3', 'Compliment Styling Sheets 3', 'Constructing Style Sheets 3', 'Cascading Style Sheets 3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `FirstName`, `LastName`, `Email`, `Address`) VALUES
('test', '$2y$10$DDQUJlxtcNPbvPKLSe0CFejka7ijteuWZrwNrRl1Nq0FMsFma7xW6', 'test', 'test', 'test@gmail.com', 'test, test, test 12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
