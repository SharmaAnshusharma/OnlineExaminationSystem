-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 07:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', 'Anshu123@');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Contact`, `Message`) VALUES
(1, 'Anshu Sharma', 'anshusharma1298@gmail.com', '7007976332', 'hi'),
(2, 'Anshu Sharma', 'anshusharma1298@gmail.com', '7007976332', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `queanstable`
--

CREATE TABLE `queanstable` (
  `ID` int(11) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `option 1` varchar(100) NOT NULL,
  `option 2` varchar(100) NOT NULL,
  `option 3` varchar(100) NOT NULL,
  `option 4` varchar(100) NOT NULL,
  `rightAns` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queanstable`
--

INSERT INTO `queanstable` (`ID`, `Question`, `option 1`, `option 2`, `option 3`, `option 4`, `rightAns`, `Category`) VALUES
(1, 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', '150 meters', 'Aptitude'),
(2, 'A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:', '45 km/hr', '50 km/hr', '54 km/hr', '55 km/hr', '50 km/hr', 'Aptitude'),
(3, 'The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:', '200 m', '225 m', '245 m', '250 m', '245 m', 'Aptitude'),
(4, 'Two trains running in opposite directions cross a man standing on the platform in 27 seconds and 17 seconds respectively and they cross each other in 23 seconds. The ratio of their speeds is: ', '1 : 3', '3 : 2', '3 : 4', 'None of these', '3 : 2', 'Aptitude'),
(5, 'A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform? ', '120 m', '240 m', '300 m', 'None of these', '240 m', 'Aptitude'),
(6, 'The small child does whatever his father was done.', 'has done', 'did', 'does', 'had done', 'does', 'English'),
(7, 'There are not many men who are so famous that they are frequently referred to by their short names only', 'initials', 'signatures', 'pictures', 'middle names', 'initials', 'English'),
(8, 'The man to who I sold my house was a cheat.', 'to whom I sell', 'to who I sell', 'who was sold to', 'to whom I sold', 'to whom I sold', 'English'),
(9, 'They were all shocked at his failure in the competition.', 'were shocked at all', 'had all shocked at', 'had all shocked by', 'No correction required', 'No correction required', 'English'),
(10, 'He is too important for tolerating any delay.', 'to tolerate', 'to tolerating', 'at tolerating', 'with tolerating', 'to tolerate', 'English'),
(11, 'Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?', '(1/3)', '(1/8)', '(2/8)', '(1/16)', '(1/8)', 'Reasoning'),
(12, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '7', '10', '12', '13', '10', 'Reasoning'),
(13, 'Look at this series: 36, 34, 30, 28, 24, ... What number should come next?', '20', '22', '23', '26', '22', 'Reasoning'),
(14, 'Look at this series: 22, 21, 23, 22, 24, 23, ... What number should come next?', '22', '24', '25', '26', '25', 'Reasoning'),
(15, ' Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?', '12', '14', '27', '53', '14', 'Reasoning'),
(16, 'In a file contains the line \"I am a boy\r\n\" then on reading this line into the array str using fgets(). What will str contain?', '\"I am a boy\r\n\0\"', '\"I am a boy\r\0\"', '\"I am a boy\n\0\"', '\"I am a boy\"', '\"I am a boy\n\0\"', 'C Programming'),
(17, 'What is the purpose of \"rb\" in fopen() function used below in the code?\r\n\r\nFILE *fp;\r\nfp = fopen(\"source.txt\", \"rb\");\r\n', 'open \"source.txt\" in binary mode for reading', 'open \"source.txt\" in binary mode for reading and writing', 'Create a new file \"source.txt\" for reading and writing', 'None of above', 'open \"source.txt\" in binary mode for reading', 'C Programming'),
(18, 'What does fp point to in the program ?\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    FILE *fp;\r\n    fp=fopen(\"trial\", \"r\");\r\n    return 0;\r\n}\r\n', 'The first character in the file', 'A structure which contains a char pointer which points to the first character of a file.', 'The name of the file.', 'The last character in the file.', 'A structure which contains a char pointer which points to the first character of a file.', 'C Programming'),
(19, 'Which of the following operations can be performed on the file \"NOTES.TXT\" using the below code?\r\n\r\nFILE *fp;\r\nfp = fopen(\"NOTES.TXT\", \"r+\");\r\n', 'Reading', 'Writing', 'Appending', 'Read and Write', 'Read and Write', 'C Programming'),
(20, 'To print out a and b given below, which of the following printf() statement will you use?\r\n\r\n#include<stdio.h>\r\n\r\nfloat a=3.14;\r\ndouble b=3.14;\r\n', 'printf(\"%f %lf\", a, b);', 'printf(\"%Lf %f\", a, b);', 'printf(\"%Lf %Lf\", a, b);', 'printf(\"%f %Lf\", a, b);', 'printf(\"%f %lf\", a, b);', 'C Programming');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `No. of Question` int(11) NOT NULL,
  `Total Marks` int(11) NOT NULL,
  `Right Marks` int(50) NOT NULL,
  `Wrong Marks` int(50) NOT NULL,
  `Time` bigint(50) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`ID`, `Title`, `No. of Question`, `Total Marks`, `Right Marks`, `Wrong Marks`, `Time`, `Description`) VALUES
(6, 'Aptitude', 5, 5, 1, 1, 600, 'This is a aptitude Test'),
(8, 'English', 5, 5, 1, 1, 600, 'This is English Test'),
(9, 'Reasoning', 5, 5, 1, 0, 600, 'This is a Reasoning Test'),
(10, 'C Programming', 5, 5, 1, 0, 600, 'This is a C programming Test');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `Name`, `Email`, `Subject`, `Marks`) VALUES
(1, 'Anshu', 'anshusharma1298@gmail.com', 'Aptitude', 4),
(2, 'Rahul', 'r@gmail.com', 'Aptitude', 4),
(3, 'Anshu', 'anshusharma1298@gmail.com', 'English', 5),
(9, 'Anshu', 'anshusharma1298@gmail.com', 'Reasoning', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`ID`, `Email`) VALUES
(1, 'anshusharma1298@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(11) NOT NULL,
  `Test Heading` varchar(50) NOT NULL,
  `Test Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `Test Heading`, `Test Description`) VALUES
(1, 'General Test', 'Aptitude, Reasoning and English etc'),
(2, 'Technical Test', 'Database, Computer Network etc'),
(3, 'Programming Test', 'C, C++, Java,PHP etc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(5) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Confirm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `College`, `Contact`, `Email`, `Confirm`) VALUES
('Anshu', 'SRMU', 7007976332, 'anshusharma1298@gmail.com', 'Anshu123@'),
('Rahul', 'SRMU', 9044952700, 'r@gmail.com', 'rahul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `queanstable`
--
ALTER TABLE `queanstable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `queanstable`
--
ALTER TABLE `queanstable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
