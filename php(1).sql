-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-09 16:00:16
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- 表的结构 `yewu`
--

CREATE TABLE IF NOT EXISTS `yewu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `zhonglei` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `complain` text NOT NULL,
  `management` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `yewu`
--

INSERT INTO `yewu` (`id`, `name`, `address`, `phone`, `zhonglei`, `level`, `content`, `complain`, `management`) VALUES
(1, '吴东元', '河南省', 2147483647, '出差', '着急', '向枪机啊', '', '网上办理'),
(2, '代凡棋', '四川省', 123456789, '出差', '着急', '铁脑壳', '', '网上办理'),
(3, '玩该院', '东湾', 2147483647, '出差', '着急', '啊实打实大师', '', '网上办理'),
(4, '严涵', '闹洞房', 2147483647, '出差', '着急', '奥会计师的开始', '', '网上办理'),
(5, '海鹏', '闹市发动机', 34654646, '出差', '着急', 'AADFJPO', '', '网上办理'),
(6, '', '', 0, '出差', '着急', '', '', '网上办理');

-- --------------------------------------------------------

--
-- 表的结构 `zhuce`
--

CREATE TABLE IF NOT EXISTS `zhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `xing` varchar(5) CHARACTER SET utf8 NOT NULL,
  `phone` int(11) NOT NULL,
  `qq` int(12) NOT NULL,
  `section` varchar(10) CHARACTER SET utf8 NOT NULL,
  `complaintitle` varchar(50) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `repairtitle` varchar(122) CHARACTER SET utf8 NOT NULL,
  `repaircontent` varchar(122) CHARACTER SET utf8 NOT NULL,
  `username` varchar(10) CHARACTER SET utf8 NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `zhuce`
--

INSERT INTO `zhuce` (`id`, `name`, `email`, `xing`, `phone`, `qq`, `section`, `complaintitle`, `content`, `repairtitle`, `repaircontent`, `username`, `password`) VALUES
(10, '吴东元', '704692139@qq.com', '男', 2147483647, 0, 'ni ', 'ni ', '0', '', '', 'bill', 'e10adc3949ba59abbe56e057f20f883e'),
(11, '吴东元', '464646846@qq.com', '男', 2147483647, 0, 'qdf', '$(complaintitle)', '0', '', '', 'nafanlong', 'e10adc3949ba59abbe56e057f20f883e'),
(12, '吴东元', '464646846@qq.com', '男', 2147483647, 0, 'qdf', '你说的', '0', '', '', 'nafanlong', 'e10adc3949ba59abbe56e057f20f883e'),
(16, '', '', '', 0, 0, '', '', '', '', '', '', ''),
(17, '', '', '', 0, 0, '', '上单', '上单', '', '', '', ''),
(18, '', '', '', 0, 0, '', '服务态度不好', '物流管理人员的服务态度不好！', '', '', '', ''),
(22, 'bill', '', '', 0, 0, '', '', '', '', '', '', ''),
(23, 'bill', '', '', 0, 0, '', '', '', ' 水电费水电费水电费', '书上都是但是但是多', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
