-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-15 11:55:13
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `cid` int(10) NOT NULL COMMENT '类别ID',
  `title` varchar(120) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `author` varchar(30) NOT NULL COMMENT '作者',
  `ord` int(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `clicks` int(10) NOT NULL DEFAULT '0' COMMENT '点击量',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示',
  `update_time` int(10) NOT NULL COMMENT '更新时间',
  `pass_time` int(10) NOT NULL COMMENT '发布时间',
  `top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '置顶',
  `good` tinyint(1) NOT NULL DEFAULT '0' COMMENT '加精',
  PRIMARY KEY (`aid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`aid`, `cid`, `title`, `content`, `author`, `ord`, `clicks`, `is_show`, `update_time`, `pass_time`, `top`, `good`) VALUES
(1, 5, 'HTML好啊!', 'HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!', 'alans', 0, 10000000, 1, 1465804730, 1465803054, 0, 0),
(2, 5, 'HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!', 'HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!', 'alan', 0, 200000, 1, 1465808922, 1465808922, 0, 0),
(3, 2, 'PHP好啊!', 'PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!', 'alan', 0, 0, 1, 1465808996, 1465808996, 0, 0),
(4, 1, 'HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!', 'HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!', 'alan', 0, 0, 1, 1465809092, 1465809092, 0, 0),
(5, 5, 'HTML好啊!', 'HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!HTML好啊!aaa', 'alan', 0, 0, 1, 1465810199, 1465809173, 0, 0),
(6, 6, '德媒：默克尔访华赞中德合作 称可保障德工作岗位啊啊啊哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈啊哈', '<p><img src="/ueditor/php/upload/image/20160615/1465955170132877.jpg"/></p><p>　　<strong>【环球网报道 记者 王莉兰】</strong><a href="http://country.huanqiu.com/france" target="_blank" title="法国"><strong>法国</strong></a><strong>国际广播电台6月14日报道称，</strong><a href="http://country.huanqiu.com/germany" target="_blank" title="德国"><strong>德国</strong></a><strong>总理默克尔访华期间，中德双方就进一步扩大双边合作达成了共识。6月14日，默克尔在沈阳表示，德中合作可保障德国的工作岗位。</strong></p><p><strong>　　据德国媒体报道，在13日于北京举行的中德政府磋商会议上，双方就扩大合作达成了共识，在经济、外交、卫生、农业等众多领域加强了合作，并强调了“相互投资对经济增长和就业的重要性”。在两国总理的见证下，双方签署了20多份合作文件。</strong></p><p><strong>　　14日，默克尔前往访华行程的最后一站沈阳。在参观中德合作企业华晨宝马车厂时，默克尔表示，德方愿加深与</strong><a href="http://country.huanqiu.com/china" target="_blank" title="中国"><strong>中国</strong></a><strong>的合作。她愿让人们清楚地看到，德国大中型企业在华作业的好处。德中合作可保障德国的工作岗位</strong>。</p><p><br/></p>', 'alan', 0, 0, 1, 1465962745, 1465954781, 1, 0),
(7, 11, 'PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!', '<p>PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!PHP好啊!</p>', 'alan', 0, 10, 1, 1465982383, 1465982366, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cate`
--

CREATE TABLE IF NOT EXISTS `cate` (
  `cid` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `pid` int(5) NOT NULL COMMENT '父类ID',
  `cate_name` varchar(100) NOT NULL COMMENT '栏目名称',
  `ord` int(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示',
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='栏目表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `cate`
--

INSERT INTO `cate` (`cid`, `pid`, `cate_name`, `ord`, `is_show`) VALUES
(1, 0, 'HTML', 0, 1),
(2, 0, 'PHP', 0, 1),
(3, 0, 'MySQL', 0, 1),
(4, 0, 'HTML5', 0, 1),
(5, 1, 'XHTML', 0, 1),
(6, 2, 'PHP函数', 0, 1),
(7, 2, 'PHP语法', 0, 1),
(8, 0, 'Linux', 0, 1),
(9, 0, 'ThinkPHP', 0, 1),
(10, 1, 'HTML4', 5, 1),
(11, 0, '神技能', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tid` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `tag_name` varchar(100) NOT NULL COMMENT '名称',
  `clicks` int(10) NOT NULL DEFAULT '0' COMMENT '点击数',
  `ord` int(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='标签表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tags`
--

INSERT INTO `tags` (`tid`, `tag_name`, `clicks`, `ord`, `is_show`) VALUES
(1, 'PHP', 5000, 0, 1),
(2, 'HTML', 0, 0, 1),
(3, 'Javascript', 0, 0, 1),
(4, 'JQuery', 0, 0, 1),
(5, 'PHP', 0, 0, 1),
(6, 'MySQL', 0, 0, 1),
(7, 'Linux', 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tags_article`
--

CREATE TABLE IF NOT EXISTS `tags_article` (
  `tid` int(10) NOT NULL COMMENT '标签ID',
  `aid` int(10) NOT NULL COMMENT '文章ID',
  KEY `tid` (`tid`,`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签文章关系表';

--
-- 转存表中的数据 `tags_article`
--

INSERT INTO `tags_article` (`tid`, `aid`) VALUES
(1, 5),
(1, 6),
(1, 7),
(2, 5),
(3, 5),
(3, 6),
(3, 7),
(6, 5),
(7, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
