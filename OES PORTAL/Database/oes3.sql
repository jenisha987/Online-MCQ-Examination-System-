-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 06:47 PM
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
-- Database: `oes3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `mobile`, `email`, `password`, `profile`, `delete_status`) VALUES
(3, 'Khwopa', 'College', '1111111111', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'download (1).png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `branch` varchar(255) NOT NULL,
  `semester` int(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subjcode` varchar(255) NOT NULL,
  `assign_teacher` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`branch`, `semester`, `subject`, `subjcode`, `assign_teacher`, `id`) VALUES
('Computer', 5, 'Algorithm Analysis and Design', 'BEG372CO', 'Avijit', 1),
('Computer', 5, 'Numerical Methods', 'BEG371CO', 'Shiva Prasad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `r_id`, `username`, `password`) VALUES
(20, 46, '770346', 'surag'),
(22, 48, '770345', 'sumina'),
(23, 49, '770337', 'saragam'),
(24, 50, '770338', 'sarif'),
(26, 52, '770318', 'kritima'),
(27, 53, '770307', 'asmita'),
(28, 54, '770321', 'nekesh'),
(29, 55, '770315', 'jenisha'),
(30, 56, '770323', 'nischal'),
(31, 57, '770309', 'creation');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `branch` text NOT NULL,
  `sem` text NOT NULL,
  `subject` text NOT NULL,
  `question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `answer` text NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `branch`, `sem`, `subject`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `delete_status`) VALUES
(219, 'computer', '1', 'COMPUTER PROGRAMMING', 'Who is the father of C language?', 'Steve Jobs', 'James Gosling', 'Dennis Ritchie', 'Rasmus Lerdorf', 'option_c', 0),
(220, 'computer', '1', 'COMPUTER PROGRAMMING', 'Which of the following declaration is not supported by C language?', 'String str;', 'char *str;', 'float str = 3e2;', 'Both “String str;” and “float str = 3e2;”', 'option_a', 0),
(221, 'computer', '1', 'COMPUTER PROGRAMMING', 'What is an example of iteration in C?', 'for', 'while', ' do-while', 'all of the mentioned', 'option_d', 0),
(222, 'computer', '1', 'COMPUTER PROGRAMMING', 'Functions in C Language are always _________', 'Internal', 'External', 'Both Internal and External', 'External and Internal are not valid terms for functions', 'option_b', 0),
(223, 'computer', '1', 'COMPUTER PROGRAMMING', 'What is #include <stdio.h>?', 'Preprocessor directive', 'Inclusion directive', 'File inclusion directive', 'None of the mentioned', 'option_a', 0),
(224, 'computer', '5', 'COMPUTER PROGRAMMING', ' C preprocessors can have compiler specific features.', 'True', 'False', 'Depends on the standard', 'Depends on the platform', 'option_a', 0),
(226, 'computer', '1', 'COMPUTER PROGRAMMING', 'what is c?', 'cp', 'a', 'b', 'c', 'option_a', 0),
(227, 'computer', '5', 'NUMERICAL METHOD', 'Which of the following is an iterative method?', 'Gauss Seidel', 'Gauss Jordan', 'Factorization', 'Gauss Elimination', 'option_b', 0),
(228, 'computer', '5', 'NUMERICAL METHOD', 'Which of the following is also known as the Newton Raphson method?', 'Chord method', 'Tangent method', 'Diameter method', 'Secant method', 'option_b', 0),
(229, 'computer', '5', 'NUMERICAL METHOD', ' Matrix which does not have an inverse by solving it, is classified as which of the following?', 'singular matrix', 'non-singular matrix', 'linear matrix', ' unidentified matrix', 'option_a', 0),
(230, 'computer', '5', 'NUMERICAL METHOD', ' The Gauss Jordan method reduces a original matrix into a _______', 'Skew Hermitian matrix', 'Non-symmetric matrix', 'Identity matrix', 'Null matrix', 'option_c', 0),
(233, 'computer', '5', 'COMPUTER GRAPHICS', 'Which of the following is a Computer Graphics type?', 'Raster and Vector', 'Raster and Scalar', 'Scalar only', 'All of the above', 'option_a', 0),
(234, 'computer', '5', 'COMPUTER GRAPHICS', 'Which of the following is the purpose for using clipping in computer graphics?', 'copying', 'zooming', 'adding graphics', 'removing objects and lines', 'option_d', 0),
(235, 'computer', '5', 'COMPUTER GRAPHICS', 'Bitmap is a collection of ____________ that describes an image.', 'pixels', ' algorithms', 'bits', 'colors', 'option_a', 0),
(236, 'computer', '5', 'COMPUTER GRAPHICS', 'Which of the following is a primary output device of a graphics system?', 'Printer', 'Scanner', 'Video monitor', 'Neither Scanner nor Video monitor', 'option_c', 0),
(237, 'computer', '5', 'COMPUTER GRAPHICS', 'Which of the following operations can be used to zoom in or out around any axis on a three-dimensional object from its original position?', 'Rotation', ' Shearing', 'Scaling', 'Translation', 'option_c', 0),
(238, 'computer', '5', 'COMPUTER GRAPHICS', 'Which of the following defines a pixel mask?', 'A string containing 1 and 0', ' A string containing 0 and 0', 'A string containing only 0’s', 'A string containing only 1;s', 'option_a', 0),
(239, 'computer', '5', 'ALGORITHM ANALYSIS AND DESIGN', 'Dijkstra’s algorithm is used to solve __________  problems?', 'Network Lock', 'Single Source Shortest Path', 'All pair shortest path', 'Sorting', 'option_b', 0),
(240, 'computer', '5', 'ALGORITHM ANALYSIS AND DESIGN', 'Recursion is similar to which of the following?', 'switch case', 'loop', 'if-else', 'if elif else', 'option_b', 0),
(241, 'computer', '5', 'ALGORITHM ANALYSIS AND DESIGN', 'Which of the following problems can’t be solved using recursion?', 'factorial of a number', 'nth fibonacci number', 'length of a string', 'problems without base case', 'option_d', 0),
(242, 'computer', '5', 'ALGORITHM ANALYSIS AND DESIGN', 'Which of the following is also known as LCM?', 'lowest common divisor', 'least common multiple', 'lowest common measure', 'highest common multiple', 'option_b', 0),
(243, 'computer', '5', 'ALGORITHM ANALYSIS AND DESIGN', 'Which of the following case does not exist in complexity theory', 'Best case', 'Worst case', 'Average case', 'Null case', 'option_d', 0),
(244, 'computer', '5', 'ALGORITHM ANALYSIS AND DESIGN', 'The Knapsack problem where the objective function is to minimize the profit is ______\r\n', 'Greedy ', 'Dynamic 0 / 1 ', 'Back tracking ', 'Branch & Bound 0/1 ', 'option_d', 0),
(245, 'computer', '1', 'ENGINEERING MATHEMATICS-I', 'Which of the following is true?', 'Differentiability does not imply continuity', ' Differentiability implies continuity', 'Continuity implies differentiability', 'There is no relation between continuity and differentiable', 'option_b', 0),
(246, 'computer', '1', 'ENGINEERING MATHEMATICS-I', 'Which of the following is true about f(z)=z+iz?', 'Continuous and differentiable', 'Continuous but not differentiable', 'Neither continuous nor differentiable', 'Differentiable but not continuous', 'option_a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `username` text NOT NULL,
  `branch` text NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `cdate` date NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `gender`, `username`, `branch`, `mobile`, `email`, `password`, `cdate`, `delete_status`) VALUES
(1, 'Khwopa', 'College', '', 'admin', 'COMPUTER SCIENCE', '1111111111', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch` text NOT NULL,
  `sem` text NOT NULL,
  `subject` text NOT NULL,
  `attend_que` text NOT NULL,
  `obtained_marks` text NOT NULL,
  `exam_date` date NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user_id`, `branch`, `sem`, `subject`, `attend_que`, `obtained_marks`, `exam_date`, `delete_status`) VALUES
(48, 52, 'computer', '1', 'BASIC MATHEMATICS', '0', '0', '2024-02-28', 0),
(50, 52, 'computer', '1', 'COMPUTER PROGRAMMING', '5', '2', '2024-02-28', 0),
(53, 53, 'computer', '1', 'BASIC MATHEMATICS', '1', '1', '2024-02-28', 0),
(56, 50, 'computer', '1', 'BASIC MATHEMATICS', '1', '1', '2024-02-28', 0),
(57, 46, 'computer', '5', 'NUMERICAL METHOD', '5', '1', '2024-02-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `enroll` text NOT NULL,
  `sem` text NOT NULL,
  `branch` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `delete_status` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `gender`, `enroll`, `sem`, `branch`, `dob`, `email`, `mobile`, `address`, `delete_status`, `password`) VALUES
(46, 'Surag', 'Basukala', 'male', '770346', '5', 'computer', '2002-10-27', 'surag@gmail.com', '1111111111', 'Bhaktapur\n', 0, 'surag'),
(48, 'Sumina ', 'Awa', 'female', '770345', '5', 'computer', '0200-09-03', 'sumina@gmail.com', '4444444444', 'Banepa', 0, 'sumina'),
(49, 'Saragam', 'Adhikari', 'female', '770337', '1', 'computer', '2002-09-06', 'saragam@gmail.com', '9845632148', 'Kausaltar', 0, 'saragam'),
(50, 'Sarif', 'Tachamo', 'male', '770338', '1', 'computer', '2000-02-08', 'sarif@gmail.com', '1212121222', 'Bhaktapur', 0, ''),
(52, 'Kritima ', 'Shrestha', 'female', '770318', '1', 'computer', '2000-01-31', 'kri@gmail.com', '9812232344', 'Lalitpur', 0, 'kritima'),
(53, 'Asmita', 'Shrestha', 'female', '770307', '1', 'computer', '2001-02-06', 'asmita@gmail.com', '9875646896', 'Thimi', 0, 'asmita'),
(54, 'Nekesh', 'Koju', 'male', '770321', '5', 'computer', '2001-04-08', 'nekesh@gmail.com', '9875646687', 'Bhaktapur', 0, 'nekesh'),
(55, 'Jenisha ', 'Shrestha', 'female', '770315', '5', 'computer', '2002-07-09', 'jenisha@gmail.com', '9845632178', 'Kathmandu', 0, 'jenisha'),
(56, 'Nischal', 'Baidar', 'male', '770323', '5', 'computer', '2000-07-08', 'nischal@gmail.com', '9875646789', 'Banepa', 0, 'nischal'),
(57, 'Creation ', 'Pradhan', 'male', '770309', '5', 'computer', '2000-08-09', 'creation@gmail.com', '9812345784', 'Kathmandu', 0, 'creation');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `enroll` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `gender`, `enroll`, `branch`, `email`, `mobile`, `address`, `password`, `subject`) VALUES
(6, 'Shiva Prasad', 'Mahato', 'male', '01', 'computer', 'shiva@gmail.com', 1212122333, 'Gwarko', 'shiva', 'COMPUTER PROGRAMMING'),
(7, 'Reena ', 'Manandhar', 'female', '03', 'computer', 'reena@gmail.com', 2147483647, 'Banepa', 'reena', 'OBJECT ORIENTED PROGRAMMING'),
(8, 'Bikash', 'Chawal', 'male', '02', 'computer', 'bikash@gmail.com', 2147483647, 'Bhaktapur', 'bikash', 'NUMERICAL METHOD'),
(9, 'Avijit', 'Karn', 'male', '04', 'computer', 'avijit@gmail.com', 2147483647, 'Kathmandu', 'avijit', 'ALGORITHM ANALYSIS AND DESIGN'),
(10, 'Milan', 'Chikanbanjar', 'male', '05', 'computer', 'milan@gmail.com', 2147483647, 'Bhaktapur', 'milan', 'COMPUTER GRAPHICS'),
(11, 'Arjun ', 'Gaire', 'male', '06', 'computer', 'arjun@gmail.com', 2147483647, 'Bhaktapur', 'arjun', 'REASRCH METHODODLOGY'),
(12, 'Ram', 'Nakarmi', 'male', '07', 'computer', 'ram@gmail.com', 2147483647, 'Bhaktapur', 'ram', 'MICROPROCESSOR'),
(13, 'Keshav', 'Poudel', 'male', '08', 'civil', 'keshav@gmail.com', 2147483647, 'Kathmandu', 'keshav', 'ENGINEERING MATHEMATICS-I'),
(14, 'Nabraj', 'Budhathoki', 'male', '09', 'civil', 'nabraj@gmail.com', 2147483647, 'Kathmandu', 'nabraj', 'ENGLISH'),
(15, 'Migma', 'Joshi', 'female', '10', 'ec', 'migma@gmail.com', 2147483647, 'Lalitpur', 'migma', 'ELECTRONICS DEVICE AND CIRCUIT');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `id` int(11) NOT NULL,
  `r_id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`id`, `r_id`, `username`, `password`) VALUES
(4, 6, '01', 'shiva'),
(5, 7, '03', 'reena'),
(6, 8, '02', 'bikash'),
(7, 9, '04', 'avijit'),
(8, 10, '05', 'milan'),
(9, 11, '06', 'arjun'),
(10, 12, '07', 'ram'),
(11, 13, '08', 'keshav'),
(12, 14, '09', 'nabraj'),
(13, 15, '10', 'migma');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `size` text NOT NULL,
  `type` text NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `size`, `type`, `path`) VALUES
(1, '1.docx', '61162', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'C:\\xampp\\htdocs\\backend\\studyMaterial/1.docx'),
(2, 'M-2(2nd)May19(2).pdf', '182300', 'application/pdf', 'C:\\xampp\\htdocs\\backend\\studyMaterial/M-2(2nd)May19(2).pdf'),
(3, 'Math-2(2nd)Dec2018.pdf', '173552', 'application/pdf', 'C:\\xampp\\htdocs\\backend\\studyMaterial/Math-2(2nd)Dec2018.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` text NOT NULL,
  `pcode` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `address`, `city`, `state`, `pcode`, `email`, `mobile`, `password`, `profile`, `delete_status`) VALUES
(1, 'Aditya', 'Shinde', 'Nashik', 'Pimpalgaon', 'Maharashtra', '422209', 'vishalbidve1999@gmail.com', '9423979339', '12345678', 'dummy-profile-pic.png', 1),
(2, 'Rajesh', 'Nikam', 'Shivaji Nagar', 'Nashik', 'Maharashtra', '422011', 'rajeshvnikam@gmail.com', '9423979339', '12345678', 'download.png', 1),
(3, 'Shital', 'Ghangale', 'Sai Nagar', 'Nashik', 'Maharashtra', '422209', 'shital@gmail.com', '9423979339', '25d55ad283aa', 'download (1).png', 0),
(4, 'Ashwini', 'Mahale', 'Pimpalgaon', 'pimpalgaon', 'Maharashtra', '422209', 'ashwini@gmail.com', '9423979339', '25d55ad283aa400af464c76d713c07ad', 'download (1).png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  ADD CONSTRAINT `teacherlogin_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `teacher` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
