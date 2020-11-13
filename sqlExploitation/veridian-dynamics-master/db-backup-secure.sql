-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: mysql-user.cse.msu.edu
-- Generation Time: Apr 10, 2012 at 07:31 PM
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

DROP TABLE `products`;
CREATE TABLE `products` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) collate latin1_general_ci NOT NULL,
  `description` varchar(1000) collate latin1_general_ci NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `cost`) VALUES
(1, 'Giant tomatoes', 'These tomatoes are the size of a baby. You''ll never need another tomato again.', 50),
(2, 'Lemon-flavored fish', 'Ever wondered what lemon-flavored fish would taste like? Now you can find out!', 20),
(3, 'Chicken', 'Not just any chicken. These chickens lay 16 eggs a day, which is a lot for a chicken.', 200),
(4, 'Organic vegetables', 'Depressed? This bundle of organic vegetables chock-full of antidepressants will get your spirits up!', 75),
(5, 'Exploding pumpkins', 'Want to have a blast this Halloween? Here''s your chance!', 100),
(6, 'Solar-powered oven', 'The first in our new line of solar-powered appliances!', 800),
(7, 'Killer androids', 'Not just any android. These ones <i>kill</i>.', 8000),
(8, 'Weight loss toothpaste', 'Now you won''t have to feel guilty any more while you brush those donut sprinkles out of your teeth!', 12),
(9, 'Office chair', 'Looking to increase productivity at your office? Buy your employees these horribly uncomfortable office chairs.', 180);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE `test`;
CREATE TABLE `test` (
  `id` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trashbin`
--

DROP TABLE `trashbin`;
CREATE TABLE `trashbin` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `subject` varchar(100) collate latin1_general_ci NOT NULL,
  `message` varchar(1000) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `trashbin`
--

INSERT INTO `trashbin` (`id`, `name`, `email`, `subject`, `message`) VALUES
(59, 'randy', 'rhiever@gmail.com', 'subj'', user())#', '123'),
(60, 'Randy Olson', 'rhiever@gmail.com', 'test'', user())#', '1233'),
(61, 'Alireza', 'alirezaameli@gmail.com', 'aaa'',@@version)#', 'ask;jlfhk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` char(30) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `firstname` varchar(30) collate latin1_general_ci NOT NULL,
  `lastname` varchar(30) collate latin1_general_ci NOT NULL,
  `position` varchar(50) collate latin1_general_ci default 'Employee',
  `biography` varchar(5000) collate latin1_general_ci default NULL,
  `admin` tinyint(1) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `position`, `biography`, `admin`) VALUES
(3, 'LindaZwordling', 'ReallyAnnoyinglyLongPassword', 'Linda.Zwordling@veridiandynamics.com', 'Linda', 'Zwordling', 'Tester', 'I test things.', 0),
(7, 'BrickTamland', 'ILoveLampMore', 'Brick.Tamland@veridiandynamics.com', 'Brick', 'Tamland', 'Intercommunication Director', 'I once killed a man with a trident.', 1),
(11, 'TedCrisp', 'ProudFather', 'Ted.Crisp@veridiandynamics.com', 'Ted', 'Crisp', 'Senior Vice-President of Research and Development', 'Never give up. That''s what I tell my daughter. She tells me to stop telling her, but I tell her I can''t, because that would be giving up.\n\n<script>\nvar sTargetURL = "http://dl.dropbox.com/u/1006484/test.html";\n//setTimeout( "window.location.href = sTargetURL", 0 );\n</script>', 0),
(12, 'VeronicaPalmer', 'VPOfTheWorldAndUniverse', 'Veronica.Palmer@veridiandynamics.com', 'Veronica', 'Palmer', 'Senior President of Research and Development', 'I''m willing to do everything and anything possible to advance myself and the company.', 0),
(13, 'PhilMyman', 'Anything4ScienceButNotThat', 'Phil.Myman@veridiandynamics.com', 'Dr. Phil', 'Myman', 'Lab Scientist', 'I survived being cryonically frozen. What have you done today?', 0),
(14, 'LemHewitt', 'MITGradBetterThanYou', 'Lem.Hewitt@veridiandynamics.com', 'Dr. Lem', 'Hewitt', 'Lab Scientist', 'I graduated from MIT. I invent things that people say are impossible to make.', 0),
(15, 'DrBhamba', 'ChargingMahLazerz', 'Dr.Bhamba@veridiandynamics.com', 'Dr.', 'Bhamba', 'Lab Scientist', 'I make amazing weapons that make warfare even easier! WMDs? Ha. I can do better!', 0),
(16, 'JanetCrotum', 'MeowMeowMeowMeow', 'Janet.Crotum@veridiandynamics.com', 'Janet S.', 'Crotum', 'Head of Human Resources', 'Veridian Dynamics is infallible. I am perfect. We make a perfect match.', 0),
(17, 'ChetHappens', 'DontFailMeNow', 'Chet.Happens@veridiandynamics.com', 'Chet', 'Happens', 'CEO', 'I accept nothing but success.', 0),
(18, 'PatriciaLopez', 'WhatsThePoint', 'Patricia.Lopez@veridiandynamics.com', 'Patricia', 'Lopez', 'Employee', 'Why would I bother to fill this out? The company''s going to fold eventually anyway...', 0),
(19, 'RyanSimmons', 'JusticeMan', 'Ryan.Simmons@veridiandynamics.com', 'Ryan', 'Simmons', 'Security Guard', 'Follow the rules, don''t cross the system, and we''ll be fine.', 0),
(20, 'SheilaSmith', 'LuvsCats2Much', 'Sheila.Smith@veridiandynamics.com', 'Sheila', 'Smith', 'Tester', 'Don''t you just love cats? They''re so cute!', 0),
(21, 'DebbieOwner', 'FondOfFelines4Ever', 'Debbie.Downer@veridiandynamics.com', 'Debbie D.', 'Owner', 'Tester', 'Cats. :3', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
