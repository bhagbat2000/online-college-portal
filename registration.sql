-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 07:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `correct`
--

CREATE TABLE `correct` (
  `username` varchar(100) NOT NULL,
  `qnum` int(255) NOT NULL,
  `ans` varchar(1000) NOT NULL,
  `answered` varchar(1000) NOT NULL DEFAULT 'no',
  `visited` varchar(1000) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `correct`
--

INSERT INTO `correct` (`username`, `qnum`, `ans`, `answered`, `visited`) VALUES
('Bhagbat', 1, '1', 'yes', 'yes'),
('Bhagbat', 2, '-11', 'yes', 'yes'),
('Bhagbat', 3, 'is the best policy', 'yes', 'yes'),
('Bhagbat', 4, '2', 'yes', 'yes'),
('Bhagbat', 5, '2 3 3', 'yes', 'yes'),
('nice', 1, '1', 'yes', 'yes'),
('nice', 2, '10', 'yes', 'yes'),
('nice', 3, 'Honesty\n', 'yes', 'yes'),
('nice', 4, 'No output', 'yes', 'yes'),
('nice', 5, ' 2 2 3', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `op1` varchar(1000) NOT NULL,
  `op2` varchar(1000) NOT NULL,
  `op3` varchar(1000) NOT NULL,
  `op4` varchar(1000) NOT NULL,
  `correct` varchar(1000) NOT NULL,
  `qnum` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `op1`, `op2`, `op3`, `op4`, `correct`, `qnum`) VALUES
(1, '    #include <stdio.h>\r\n    int main()\r\n    {\r\n        int c = 2 ^ 3;\r\n        printf(\"%d\\n\", c);\r\n    }', '8', '1', '9', '0', '1', 1),
(2, '    #include <stdio.h>\r\n    int main()\r\n    {\r\n        unsigned int a = 10;\r\n        a = ~a;\r\n        printf(\"%d\\n\", a);\r\n    }', '-9', '-10', '-11', '10', '-11', 2),
(3, '    #include <stdio.h>\r\n    int main()\r\n    {\r\n        if (7 & 8)\r\n        printf(\"Honesty\");\r\n            if ((~7 & 0x000f) == 8)\r\n                printf(\"is the best policy\\n\");\r\n    }', ' Honesty is the best policy', 'Honesty\r\n', 'is the best policy', 'No output', 'is the best policy', 3),
(4, '    #include <stdio.h>\r\n    int main()\r\n    {\r\n        int a = 2;\r\n        if (a >> 1)\r\n           printf(\"%d\\n\", a);\r\n    }', '0', '1', '2', 'No output', '2', 4),
(6, '    #include <stdio.h>\r\n    int main()\r\n    {\r\n        int a = 2;\r\n        if (a >> 1)\r\n           printf(\"%d\\n\", a);\r\n    }', ' 3 2 3', ' 2 2 3', '3 2 2', '2 3 3', '2 3 3', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staff` int(11) DEFAULT NULL,
  `exam` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `staff`, `exam`) VALUES
(0, 'jashwant', 'jpradhan@gmail.com', '8dca8373dc286a1ba3dbf5e82b694665', NULL, 1),
(0, 'soumyapasayat', 'srppasayat@gmail.com', 'srp1290', 1, 1),
(1, 'soumyapasayat', 'srppasayat@gmail.com', 'srp1290', 1, 1),
(0, 'jashwant', 'jpradhan@gmail.com', 'jashu', NULL, 1),
(0, 'nice', 'nice@gmail.com', 'nice', NULL, 0),
(0, 'srp', 'srp@gmail.com', 'srp', NULL, 0),
(0, 'Bhagbat', 'bhagbat@gmail.com', 'bhagbat', NULL, 0),
(0, 'Soumya Ranjan Pasayat', 'soumya9437647840@gmail.com', 'srp12390', NULL, 1),
(0, 'srpasayat', 'srp@gmail.com', 'srp', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
