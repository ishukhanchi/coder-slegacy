-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 05:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coderslegacy2`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(3) NOT NULL,
  `que` varchar(500) COLLATE utf8_bin NOT NULL,
  `title` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `que`, `title`) VALUES
(1, 'Misha has a coupon with which she can do free shopping up to rs 2500/- only if the coupon code consists of 2 distinct letters alternatively. Misha tells you her coupon code, tell her if she is eligible for the offer or not.\r\nExample: coupon code: ababab output: eligible, coupon code : abcab output : ineligible.\r\n', 'Selection Statements'),
(2, 'Write a program to concatenate given integers and display the result. The number of integers which are to be concatenated are to be specified by the user. e.g. if two numbers entered by user are 55 & 66 then output should be 5566.', 'Concatenation'),
(3, 'Write a program which takes an integer and prints it in words.\r\nSample Input:\r\n557\r\nSample Output:\r\nFive hundred fifty seven\r\n', 'Switch Case'),
(4, 'You are given a string with k characters. Your task is to display and calculate the number of unique words (which when read from both the directions result in the same word) which can be formed by arbitrarily permuting the characters in the above string.\r\nSample Input:\r\nabcab\r\nSample Output\r\nThere are 2 strings possible : bacab abcba \r\n', 'Strings'),
(5, 'You are given a number.Use a function named superfunction() to output the sum of first n and last n digits of the number.\r\nSample Input:\r\n56655(the given number)\r\n2(value of n)\r\nSample Output:\r\n5+6+5+5=21\r\n', 'Functions'),
(6, 'You are given a binary tree, convert it into a singly linked list using post-order traversal.', 'Tree Traversal'),
(7, 'From a given n digit number, extract the digits from the odd places and find their sum. For example, 12345 is the digit, then output should be 1+3+5 = 9.', 'Loops'),
(8, 'You are given a linked list containing number. Write a program to arrange the numbers in such a way such that even numbers come first and odd numbers come after them in a sorted manner.\r\nSample Input:\r\n1 3 2 5 4 6\r\nSample Output:\r\n2 4 6 1 3 5\r\n', 'Sorting in Trees'),
(9, 'Write a program to check whether a given string when gets divided from middle results into two equal substrings or not. Example: gaga, xyzxy follow the property while abaabb does not.', 'String Comparison'),
(10, 'You are given a string with k distinct characters. Your task is \r\na) to reverse a substring from pth character to qth character (without using inbuilt functions) and display the string.\r\nSample Input:\r\nCupboard               (the string with distinct characters)\r\nb r                            (The pth and qth character)\r\nSample Output\r\nCupraobd\r\n', 'String Reversal'),
(22, 'Write a program which accepts date in the format dd/mm/yyyy and then a date 50 days after that.\r\nSample Input:\r\n01/03/2017\r\nSample Output:\r\n19/04/2017\r\n', 'Structures'),
(33, 'You are given a binary search tree, delete all the even numbers and then display the elements in tree form.', 'Binary Search'),
(44, 'You are given an array of integers S. If for every two integers in the array, there exists a third integer which is equal to the product of the two in the array, print yes else print no.\r\nSample Input\r\n1 2 3 6(Array)\r\nSample Output\r\nYes\r\n', 'Arrays'),
(55, 'You are given two numbers p and q. Write a program to calculate the sum of qth powers of all the numbers co prime with p which are < p.\r\nSample Input:\r\n4 3 (4 is value of p and 3 is value of q)\r\nSample output:\r\nNumbers co prime with 4 and less than 4 are 1 and 3, so sum = 13 +33 = 28 \r\n', 'If-Else'),
(66, 'Sita is entering information of students which contains name and roll number dynamically in her database. Suddenly, she doubts that she may have entered duplicate data and wants to delete the duplicate data present. But before deleting duplicate data she wants to see all the data she has entered and then delete the duplicates. Help her in doing so!', 'Linked List'),
(77, 'You are given a chess board having P x P cells,you need to place P spades on the board such that no spade attack on any other spade.', 'Matrices'),
(88, 'Akshay is running a program to calculate the factorial of a number. Now he wants find the factorial of ASCII value of different alphabets using the same function name. Help him do so!', 'Function Overloading'),
(99, 'Pritha has to keep record of the number of people enrolling for her event. However, she somehow forgets to enter the serial number of the people while entering the data. Design a program that will overlook her mistake and will keep a count of the number of people getting enrolled. (Hint: count the number of objects made).', 'Static Variables\r\n'),
(110, 'You have to accept the values from user and store it in a binary search tree and then output the sorted result. Note that user can input any type of value. Data type may be integer, float, character, double.', 'Generic Function');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userid` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET hp8 NOT NULL,
  `password` varchar(40) NOT NULL,
  `college` varchar(40) CHARACTER SET hp8 NOT NULL,
  `branch` varchar(25) CHARACTER SET hp8 NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) CHARACTER SET hp8 NOT NULL,
  `hash` int(50) NOT NULL,
  `active` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userid`, `name`, `password`, `college`, `branch`, `phone`, `email`, `hash`, `active`) VALUES
(1, 'aa', 'abc123', 'ccvt', 'upes', '9999999999', 'aa@gmail.com', 0, 0),
(28, 'xyz', 'abc123', 'ccvt', 'upes', '9999999999', 'xyz@gmail.com', 556, 0);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `qid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slink` varchar(50) NOT NULL,
  `language` varchar(30) NOT NULL,
  `answer` longtext NOT NULL,
  `Time_used` int(11) NOT NULL,
  `Memory` int(11) NOT NULL,
  `subtime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`qid`, `user_id`, `slink`, `language`, `answer`, `Time_used`, `Memory`, `subtime`) VALUES
(1, 12, 'https://code.hackerearth.com/00720dY', '', 'using namespace std;\r\n	#include<iostream>\r\n	int main()\r\n	{\r\n	    int a=5;\r\n	    int b=2;\r\n	    int c;\r\n	    c=a+b;\r\n	    cout<<c;\r\n	    return 0;\r\n	}\r\n	', 0, 64, '2017-07-13 16:02:23.864797'),
0:00:00.000000'),
(1, 2, 'https://code.hackerearth.com/ee710ce', 'C', '#include <stdio.h>\r\nint main()\r\n{\r\n   // printf() displays the string inside quotation\r\n   printf(\"Hello, World!\");\r\n   return 0;\r\n}\r\n	', 0, 64, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `dor` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `level` int(3) NOT NULL,
  `score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `dor`, `level`, `score`) VALUES
(1, 'aa@gmail.com', '0000-00-00 00:00:00.000000', 2, 0),

(28, 'xyz@gmail.com', '2017-07-17 20:18:29.241992', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD UNIQUE KEY `qid` (`qid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
