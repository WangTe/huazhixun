-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 07 月 28 日 09:25
-- 服务器版本: 5.5.8
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `np_activity`
--

INSERT INTO `np_activity` (`id`, `name`, `photo`, `content`, `add_time`, `index`) VALUES
(1, 'MTP经理人管理才能发展培训', '/upload/20130728/13749927474580.jpg', '', 1374992747, 1),
(2, '人事干部能力提升与管理探讨', '/upload/20130728/13749928886727.jpg', '', 1374992888, 1),
(3, '团队情绪与压力管理', '/upload/20130728/13749932469287.jpg', '', 1374993246, 1),
(4, '团队沟通', '/upload/20130728/13749933272501.jpg', '', 1374993327, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `np_article`
--

INSERT INTO `np_article` (`aid`, `type`, `title`, `content`, `add_date`, `add_time`, `add_user`) VALUES
(1, 2, '卓越班组建设与班组长胜任素质能力提升项目课程设置（暂定）', '0', '2013-07-28', 1374988912, 'wangte'),
(2, 2, '解决问题高手的7个步骤', '0', '2013-07-28', 1374989055, 'wangte'),
(3, 2, '从专业到管理的四项修炼', '0', '2013-07-28', 1374989081, 'wangte'),
(4, 2, '卓越经理人的八项修炼（MTP）', '0', '2013-07-28', 1374989111, 'wangte'),
(5, 2, '课程体系介绍', '0', '2013-07-28', 1374989145, 'wangte'),
(6, 2, '销售管理三步上篮（通用版1天）', '', '2013-07-28', 1374989197, 'wangte'),
(7, 2, '顾问式销售技巧（1天公开课丰满版）', '0', '2013-07-28', 1374989230, 'wangte'),
(8, 2, '基于阳光心态的企业归属和团队信任再造', '0', '2013-07-28', 1374989266, 'wangte');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `np_courses`
--

INSERT INTO `np_courses` (`id`, `type`, `name`, `photo`, `professor`, `content`, `add_time`, `index`) VALUES
(1, '团队协作与执行', '《塑造团队高效执行力》', '/upload/20130728/13749948276454.png', '王大泓', '', 1374988229, 1),
(2, '管理沟通', '《深度管理沟通》', '', '杨帆', '', 1374988349, 0),
(3, '团队建设与管理', '《卓越团队建设与管理升级》', '', '辰辉', '', 1374988449, 0),
(4, '企业执行', '《企业卓越执行力塑造》', '', '杨帆', '', 1374988516, 0),
(5, '领导力', '《管理者卓越领导力》', '/upload/20130728/13749924498215.jpg', '杨帆', '', 1374989430, 1),
(6, '应变与管理', '《企业应变策略与管理模式升级》', '/upload/20130728/13749922507358.png', '杨帆', '', 1374989498, 1),
(7, '授权与激励', '《授权与激励》', '/upload/20130728/13749921587744.jpg', '杨帆', '', 1374989563, 1),
(8, '领导力', '《组织卓越领导力建设》', '/upload/20130728/13749897129827.jpg', '王大泓', '', 1374989712, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `np_project`
--

INSERT INTO `np_project` (`id`, `name`, `photo`, `content`, `add_time`, `index`) VALUES
(1, '电话销售训练', '/upload/20130728/13749905857497.jpg', '', 1374990073, 1),
(2, '顾问式销售', '/upload/20130728/13749905086943.png', '', 1374990107, 1),
(3, '人力资本管理', '/upload/20130728/13749904476317.png', '', 1374990177, 1),
(4, '企业卓越绩效管理', '/upload/20130728/13749902851618.png', '', 1374990217, 1),
(5, '客户经理的沟通与谈判', '', '', 1375001176, 0),
(6, '支行卓越团队建设与人本激励', '', '', 1375001241, 0),
(7, '第五级班组建设与管理模式', '', '', 1375001349, 0),
(8, '班组建设与班组长管理能力提升', '', '', 1375001382, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `np_teacher`
--

INSERT INTO `np_teacher` (`id`, `name`, `photo`, `position`, `quality`, `intro`, `add_time`, `index`) VALUES
(1, '杨帆', '/upload/20130728/1374985394521.png', '资深企业管理专家', '北大经济学院  特聘讲师\r\n北大政府管理学院  特聘讲师\r\n清华职业经理人训练中心  特聘讲师', '', 1374985394, 1),
(2, '辰辉', '/upload/20130728/13749861188605.jpg', '资深企业管理咨询顾问', '清华同方  销售经理\r\n韩国三星  人力资源管理部门', '', 1374986118, 1),
(3, '艾志鹏', '/upload/20130728/13749872034932.jpg', '人力资源管理实战专家', '资深企业管理咨询顾问\r\n三一重工集团\r\n葵花药业集团', '', 1374987203, 1),
(4, '王大泓', '/upload/20130728/1374990857677.jpg', '中国国家职业教育网特聘专家', '全国高企委职业教育专业委员会  特聘专家\r\n清华大学职业经理人教育中心  特聘讲师\r\n北京大学  客座教授', '', 1374987562, 1),
(5, '温耀南', '/upload/20130728/13749960935742.jpg', '尚德机构金牌讲师', '清华大学金融理财班  特聘讲师\r\n科特勒营销机构    特聘讲师\r\n', '', 1374996093, 1),
(6, '李刚', '/upload/20130728/13749965104608.jpg', 'EMBA班特聘讲师', '华润集团  副总经理\r\nSCANWELL集团  人力资源部经理\r\nSHANGRILA酒店管理集团  人力资源部总监', '', 1374996510, 1),
(7, '王健勇', '/upload/20130728/13749979837213.jpg', '中国传媒大学总裁班', '中国人民大学博士\r\n中国光大银行   培训指导 ', '', 1374997983, 1);
