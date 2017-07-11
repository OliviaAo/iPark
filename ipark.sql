-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-05-24 16:30:47
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipark`
--

-- --------------------------------------------------------

--
-- 表的结构 `parkinglot`
--

CREATE TABLE IF NOT EXISTS `parkinglot` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `spacenum` int(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `community` varchar(20) NOT NULL,
  `distance` float NOT NULL,
  `price` varchar(20) NOT NULL,
  `pic` varchar(30) NOT NULL COMMENT 'picture'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `parkinglot`
--

INSERT INTO `parkinglot` (`id`, `name`, `spacenum`, `country`, `province`, `city`, `district`, `block`, `community`, `distance`, `price`, `pic`) VALUES
(1, '深圳大学', 500, '中国', '广东省', '深圳市', '南山区', '南海大道', '深圳大学', 0, '5元(首时),之后1元/h', ''),
(2, '深圳高职院', 200, '中国', '广东省', '深圳市', '南山区', '留仙大道', '深圳高职院', 0, '5元(首时),之后1元/h', ''),
(3, '松坪山公园', 100, '中国', '广东省', '深圳市', '南山区', '科苑路', '松坪山公园', 0, '15元/h', ''),
(4, '深圳南山书城', 200, '中国', '广东省', '深圳市', '南山区', '文心二路', '南山书城', 0, '5元(首时),之后1元/h', ''),
(5, '佳嘉豪苑', 300, '中国', '广东省', '深圳市', '南山区', '海德一道', '佳嘉豪苑', 0, '15元(首时),之后1元/h', ''),
(6, '碧海天家园', 200, '中国', '广东省', '深圳市', '南山区', '南商路', '碧海天家园', 0, '5元(首时),之后1元/h', ''),
(7, '粤海综合市场', 50, '中国', '广东省', '深圳市', '南山区', '龙城路', '粤海综合市场', 0, '免费', ''),
(8, '卫生监管所', 100, '中国', '广东省', '深圳市', '南山区', '南商路', '卫生监管所', 0, '5元(首时),之后1元/h', '');

-- --------------------------------------------------------

--
-- 表的结构 `spaces`
--

CREATE TABLE IF NOT EXISTS `spaces` (
  `spid` int(10) NOT NULL,
  `plid` int(10) NOT NULL,
  `spstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `spaces`
--

INSERT INTO `spaces` (`spid`, `plid`, `spstatus`) VALUES
(1, 1, 0),
(2, 1, 1),
(3, 1, 0),
(4, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parkinglot`
--
ALTER TABLE `parkinglot`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
 ADD PRIMARY KEY (`spid`,`plid`), ADD KEY `FK_SP` (`plid`);

--
-- 限制导出的表
--

--
-- 限制表 `spaces`
--
ALTER TABLE `spaces`
ADD CONSTRAINT `FK_SP` FOREIGN KEY (`plid`) REFERENCES `parkinglot` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
