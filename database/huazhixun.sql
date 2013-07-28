-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 07 月 28 日 11:08
-- 服务器版本: 5.1.53
-- PHP 版本: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `huazhixun`
--

-- --------------------------------------------------------

--
-- 表的结构 `np_about`
--

CREATE TABLE IF NOT EXISTS `np_about` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `np_about`
--

INSERT INTO `np_about` (`aid`, `type`, `title`, `content`) VALUES
(1, '公司简介', '公司简介', '<p style="text-indent:2em;">圣利来集团是一家涉及多个行业的多元化集团，集团总部位于北京市海淀区，旗下分公司及业务涉及房地产开发及物业管理、经营性租赁、机械制造及印刷产品制造等。</p><p style="text-indent:2em;">集团各项业务均由专业独立公司运作，其中甘肃海天房地产开发有限公司成立于2000年9月，是经甘肃省住房和城乡建设厅核定的具有二级资质等级的房地产开发企业，注册资本2000万元，办公地址位于兰州市城关区张掖路87号中广大厦九层，办公场地面积达1300多平方米，经营范围主要为房地产开发、商品房销售。</p><p style="text-indent:2em;">滦县圣利来包装有限公司成立于2011年总投资3亿元，位于滦县经济开发区，占地78亩，年产各类高档彩色包装纸箱、纸盒8万只，主要以纸箱、纸盒、纸袋加工销售为主，纸制品、包装材料、建筑材料、装饰材料、五金、交电、办公用品批发零售为主营业务。公司自成立以来，已建成原料车间、包装车间、仓库车间、办公楼及职工公寓等配套设施，总建筑面积4.5万平方米。引进德国、台湾等地区先进的高速印刷机及其它配套设备，规模化、集约化，自动化的高档纸箱包装生产线，产品主要供应京津唐地区的大型包装用箱企业。项目建成后，可年创产值5亿元，在增值地方经济效益同时，还可有效带动包装、运输等相关行业的发展，具有良好的经济和社会效益。</p><p style="text-indent:2em;">北京圣利来租赁有限公司成立于2011年，经营事业初期提供企业设备租赁服务，中期在于多设据点并引进多样化财务金融服务，并期待能成为中国地区卓越之财务金融公司,以对中国未来经济发展做出贡献。</p><p style="text-indent:2em;">北京圣利丰投资有限公司是经国家工商行政管理部门批准的专业投资机构，于2011年北京注册成立，注册资金为仨仟万元。公司主要经营项目为：投资管理；房地产开发；专业承包；技术开发、技术转让；投资信息咨询（中介除外）；经济信息系咨询；会议服务；承办展览展示；组织文化艺术交流活动（演出除外）；企业形象策划；销售商品房、建筑材料、机械设备、五金、交电、文化体育用品（音像制品除外）。公司成立以来拥有稳定牢固的客户群体，秉承“诚信服务，信誉第一”的经营理念，以努力为客户提供优质、安全、快捷、便利的服务宗旨，在入市短短几年时间里已经成为业界的名牌企业。<br /></p>'),
(2, '荣誉资质', '荣誉资质', '<p>荣誉资质<br /></p>'),
(3, '联系我们', '联系我们', '<p>联系我们</p>'),
(4, '董事长简介', '董事长简介', '<p style="text-indent:2em;">董事长简介</p>'),
(5, '联系我们', '联系我们', '<p>联系我们</p><p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- 表的结构 `np_activity`
--

CREATE TABLE IF NOT EXISTS `np_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `add_time` int(10) unsigned NOT NULL,
  `index` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_activity`
--


-- --------------------------------------------------------

--
-- 表的结构 `np_admin_user`
--

CREATE TABLE IF NOT EXISTS `np_admin_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(40) NOT NULL,
  `salt` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `power` int(11) NOT NULL,
  `last_ip` varchar(48) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `np_admin_user`
--

INSERT INTO `np_admin_user` (`uid`, `username`, `password`, `salt`, `name`, `power`, `last_ip`) VALUES
(3, 'wangte', '7edec1ff2d4a904a4f19ce92cd648253', '422996', '王特', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `np_article`
--

CREATE TABLE IF NOT EXISTS `np_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `add_date` date NOT NULL,
  `add_time` int(11) NOT NULL,
  `add_user` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_article`
--


-- --------------------------------------------------------

--
-- 表的结构 `np_article_type`
--

CREATE TABLE IF NOT EXISTS `np_article_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `np_article_type`
--

INSERT INTO `np_article_type` (`tid`, `name`, `pid`) VALUES
(2, '讲师动态', 0);

-- --------------------------------------------------------

--
-- 表的结构 `np_attachment`
--

CREATE TABLE IF NOT EXISTS `np_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_size` int(11) NOT NULL,
  `path` varchar(150) NOT NULL,
  `is_image` tinyint(4) NOT NULL,
  `index` tinyint(4) NOT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_attachment`
--


-- --------------------------------------------------------

--
-- 表的结构 `np_config`
--

CREATE TABLE IF NOT EXISTS `np_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) CHARACTER SET utf8 NOT NULL,
  `value` varchar(500) CHARACTER SET utf8 NOT NULL,
  `is_json` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item` (`item`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `np_config`
--

INSERT INTO `np_config` (`id`, `item`, `value`, `is_json`) VALUES
(8, 'aa', 'aaa', 0),
(7, 'bb', '[1,2,3]', 1);

-- --------------------------------------------------------

--
-- 表的结构 `np_courses`
--

CREATE TABLE IF NOT EXISTS `np_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `professor` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `add_time` int(11) NOT NULL,
  `index` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_courses`
--


-- --------------------------------------------------------

--
-- 表的结构 `np_group`
--

CREATE TABLE IF NOT EXISTS `np_group` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_group`
--


-- --------------------------------------------------------

--
-- 表的结构 `np_index_img`
--

CREATE TABLE IF NOT EXISTS `np_index_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `path` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_index_img`
--


-- --------------------------------------------------------

--
-- 表的结构 `np_link`
--

CREATE TABLE IF NOT EXISTS `np_link` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `np_link`
--

INSERT INTO `np_link` (`lid`, `name`, `url`, `title`) VALUES
(3, '腾讯', 'http://www.qq.com/', '腾讯'),
(2, '百度', 'http://www.baidu.com/', '百度搜索'),
(4, '京东商城', 'http://www.jd.com/', '京东商城'),
(5, '淘宝网', 'http://www.taobao.com', '淘宝网');

-- --------------------------------------------------------

--
-- 表的结构 `np_project`
--

CREATE TABLE IF NOT EXISTS `np_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `add_time` int(11) NOT NULL,
  `index` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_project`
--


-- --------------------------------------------------------

--
-- 表的结构 `np_teacher`
--

CREATE TABLE IF NOT EXISTS `np_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `position` varchar(256) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `intro` text NOT NULL,
  `add_time` int(10) unsigned NOT NULL,
  `index` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `np_teacher`
--

