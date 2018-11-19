-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2018 at 04:38 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cms_admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `userid` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(200) NOT NULL,
  `last_visit` datetime DEFAULT NULL,
  `last_visit_ip` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `roleid` int(11) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `is_admin` int(11) DEFAULT '0',
  `is_active` int(11) DEFAULT '1',
  `def_storeid` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1498 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`userid`, `user_name`, `password`, `email`, `gender`, `dob`, `phone`, `last_visit`, `last_visit_ip`, `created_date`, `created_by`, `modified_by`, `modified_date`, `roleid`, `last_name`, `first_name`, `is_admin`, `is_active`, `def_storeid`) VALUES
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '', '0000-00-00', '', '2018-11-18 06:02:01', '::1', '2015-01-29 15:10:34', NULL, NULL, NULL, 1, 'System', 'Administrator', 1, 1, NULL),
(5, 'chetra', '202cb962ac59075b964b07152d234b70', 'eing.chetra@gmail.com', '', '0000-00-00', '', '2018-11-18 06:02:01', '::1', '2015-02-02 17:26:36', NULL, NULL, NULL, 2, 'eing', 'chetra', 0, 0, NULL),
(1497, 'store', 'e10adc3949ba59abbe56e057f20f883e', 'store@green.com', '', '0000-00-00', '', '2018-11-18 06:02:01', '::1', '2015-06-26 08:10:54', NULL, NULL, NULL, 21, 'Green', 'Store', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('e271cd942aa5be7a46a82493a7c4cea8', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.3', 1542517984, 'a:13:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"4";s:9:"user_name";s:5:"admin";s:8:"password";s:32:"202cb962ac59075b964b07152d234b70";s:6:"roleid";s:1:"1";s:9:"last_name";s:6:"System";s:10:"first_name";s:13:"Administrator";s:10:"last_visit";s:19:"2018-11-18 04:36:48";s:13:"last_visit_ip";s:3:"::1";s:9:"moduleids";a:7:{i:0;a:1:{s:8:"moduleid";s:2:"12";}i:1;a:1:{s:8:"moduleid";s:2:"11";}i:2;a:1:{s:8:"moduleid";s:1:"7";}i:3;a:1:{s:8:"moduleid";s:1:"1";}i:4;a:1:{s:8:"moduleid";s:2:"18";}i:5;a:1:{s:8:"moduleid";s:2:"19";}i:6;a:1:{s:8:"moduleid";s:2:"20";}}s:12:"ModuleInfors";a:7:{i:12;a:4:{s:8:"moduleid";s:2:"12";s:11:"module_name";s:6:"Banner";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:11;a:4:{s:8:"moduleid";s:2:"11";s:11:"module_name";s:7:"Article";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:7;a:4:{s:8:"moduleid";s:1:"7";s:11:"module_name";s:4:"Menu";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:1;a:4:{s:8:"moduleid";s:1:"1";s:11:"module_name";s:7:"Setting";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:18;a:4:{s:8:"moduleid";s:2:"18";s:11:"module_name";s:8:"Property";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:19;a:4:{s:8:"moduleid";s:2:"19";s:11:"module_name";s:12:"Propery Type";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}i:20;a:4:{s:8:"moduleid";s:2:"20";s:11:"module_name";s:17:"Property Location";s:8:"sort_mod";N;s:12:"mod_position";s:1:"2";}}s:10:"PageInfors";a:7:{i:12;a:2:{i:69;a:14:{s:6:"pageid";s:2:"69";s:9:"page_name";s:11:"Banner List";s:4:"link";s:20:"setup/setupads/index";s:8:"moduleid";s:2:"12";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-02-05 23:16:13";s:4:"icon";s:7:"fa-bars";}i:70;a:14:{s:6:"pageid";s:2:"70";s:9:"page_name";s:14:"Add New Banner";s:4:"link";s:18:"setup/setupads/add";s:8:"moduleid";s:2:"12";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2016-02-05 23:15:42";s:4:"icon";s:7:"fa-bars";}}i:11;a:2:{i:65;a:14:{s:6:"pageid";s:2:"65";s:9:"page_name";s:12:"Article List";s:4:"link";s:13:"article/index";s:8:"moduleid";s:2:"11";s:5:"order";s:1:"4";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 16:46:23";s:4:"icon";s:7:"fa-bars";}i:66;a:14:{s:6:"pageid";s:2:"66";s:9:"page_name";s:15:"Add New Article";s:4:"link";s:11:"article/add";s:8:"moduleid";s:2:"11";s:5:"order";s:1:"5";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 16:47:08";s:4:"icon";s:7:"fa-bars";}}i:7;a:4:{i:63;a:14:{s:6:"pageid";s:2:"63";s:9:"page_name";s:13:"Category List";s:4:"link";s:10:"menu/index";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"10";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 15:53:36";s:4:"icon";s:7:"fa-bars";}i:64;a:14:{s:6:"pageid";s:2:"64";s:9:"page_name";s:16:"Add New Category";s:4:"link";s:8:"menu/add";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"11";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-09-11 15:53:58";s:4:"icon";s:7:"fa-bars";}i:75;a:14:{s:6:"pageid";s:2:"75";s:9:"page_name";s:12:"Add New Menu";s:4:"link";s:12:"category/add";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"12";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2017-12-22 13:42:09";s:4:"icon";s:7:"fa-bars";}i:76;a:14:{s:6:"pageid";s:2:"76";s:9:"page_name";s:9:"Menu List";s:4:"link";s:14:"category/index";s:8:"moduleid";s:1:"7";s:5:"order";s:2:"13";s:9:"is_insert";s:2:"11";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2017-12-22 13:42:54";s:4:"icon";s:7:"fa-bars";}}i:1;a:4:{i:5;a:14:{s:6:"pageid";s:1:"5";s:9:"page_name";s:4:"Page";s:4:"link";s:12:"setting/page";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"0";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 17:00:01";s:4:"icon";s:9:"fa-file-o";}i:6;a:14:{s:6:"pageid";s:1:"6";s:9:"page_name";s:12:"User Profile";s:4:"link";s:12:"setting/user";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"0";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:56:20";s:4:"icon";s:7:"fa-user";}i:7;a:14:{s:6:"pageid";s:1:"7";s:9:"page_name";s:9:"User Role";s:4:"link";s:12:"setting/role";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:57:09";s:4:"icon";s:7:"fa-user";}i:8;a:14:{s:6:"pageid";s:1:"8";s:9:"page_name";s:11:"Role Access";s:4:"link";s:18:"setting/permission";s:8:"moduleid";s:1:"1";s:5:"order";N;s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"0";s:7:"is_show";s:1:"0";s:8:"is_print";s:1:"0";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2015-02-05 16:56:46";s:4:"icon";s:9:"fa-wrench";}}i:18;a:2:{i:78;a:14:{s:6:"pageid";s:2:"78";s:9:"page_name";s:16:"Add New Property";s:4:"link";s:21:"property/property/add";s:8:"moduleid";s:2:"18";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2018-11-18 04:36:42";s:4:"icon";s:7:"fa-bars";}i:79;a:14:{s:6:"pageid";s:2:"79";s:9:"page_name";s:13:"Property List";s:4:"link";s:23:"property/property/index";s:8:"moduleid";s:2:"18";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2018-11-18 04:36:26";s:4:"icon";s:7:"fa-bars";}}i:19;a:2:{i:80;a:14:{s:6:"pageid";s:2:"80";s:9:"page_name";s:21:"Add New Property Type";s:4:"link";s:25:"property/propertytype/add";s:8:"moduleid";s:2:"19";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2018-11-18 06:01:16";s:4:"icon";s:7:"fa-bars";}i:81;a:14:{s:6:"pageid";s:2:"81";s:9:"page_name";s:18:"Property Type List";s:4:"link";s:27:"property/propertytype/index";s:8:"moduleid";s:2:"19";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2018-11-18 06:00:59";s:4:"icon";s:7:"fa-bars";}}i:20;a:2:{i:82;a:14:{s:6:"pageid";s:2:"82";s:9:"page_name";s:25:"Add New Property Location";s:4:"link";s:29:"property/propertylocation/add";s:8:"moduleid";s:2:"20";s:5:"order";s:1:"0";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2018-11-18 06:01:37";s:4:"icon";s:7:"fa-bars";}i:83;a:14:{s:6:"pageid";s:2:"83";s:9:"page_name";s:22:"Property Location List";s:4:"link";s:31:"property/propertylocation/index";s:8:"moduleid";s:2:"20";s:5:"order";s:1:"1";s:9:"is_insert";s:1:"1";s:9:"is_update";s:1:"1";s:9:"is_delete";s:1:"1";s:7:"is_show";s:1:"1";s:8:"is_print";s:1:"1";s:9:"is_export";s:1:"1";s:10:"created_by";s:1:"1";s:12:"created_date";s:19:"2018-11-18 06:01:53";s:4:"icon";s:7:"fa-bars";}}}s:10:"PageAction";a:7:{i:12;a:2:{i:69;s:1:"1";i:70;s:1:"1";}i:11;a:2:{i:65;s:1:"1";i:66;s:1:"1";}i:7;a:4:{i:63;s:1:"1";i:64;s:1:"1";i:75;s:1:"1";i:76;s:1:"1";}i:1;a:4:{i:5;s:1:"1";i:6;s:1:"1";i:7;s:1:"1";i:8;s:1:"0";}i:18;a:2:{i:78;s:1:"1";i:79;s:1:"1";}i:19;a:2:{i:80;s:1:"1";i:81;s:1:"1";}i:20;a:2:{i:82;s:1:"1";i:83;s:1:"1";}}}');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_item`
--

CREATE TABLE `dashboard_item` (
  `dashid` int(11) NOT NULL,
  `dash_item` varchar(255) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `link_pageid` int(11) DEFAULT NULL,
  `is_show` int(11) NOT NULL DEFAULT '1',
  `block` varchar(255) DEFAULT NULL COMMENT 'left_top,left_bottom'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dashboard_item`
--

INSERT INTO `dashboard_item` (`dashid`, `dash_item`, `moduleid`, `link_pageid`, `is_show`, `block`) VALUES
(1, 'Student', 3, 10, 1, 'top_left');

-- --------------------------------------------------------

--
-- Table structure for table `site_profile`
--

CREATE TABLE `site_profile` (
  `id` int(11) unsigned NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `weixin` varchar(255) DEFAULT NULL,
  `date_post` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_profile`
--

INSERT INTO `site_profile` (`id`, `site_name`, `address`, `phone`, `email`, `facebook`, `google_plus`, `youtube`, `twitter`, `linkedin`, `weixin`, `date_post`, `is_active`) VALUES
(1, '855 solution', '418Eo+E1, Phlauv 358, Sangkat Chbar Ampov, Khan Chbar Ampov , Phnom Penh.', '015 871 787 / 092 226 133', 'info@855solution.com', 'https://www.facebook.com/%E1%9E%93%E1%9E%B6%E1%9E%99%E1%9E%80%E1%9E%8A%E1%9F%92%E1%9E%8B%E1%9E%B6%E1%9E%93%E1%9E%9C%E1%9E%B7%E1%9E%91%E1%9F%92%E1%9E%99%E1%9E%BB%E1%9E%91%E1%9E%B6%E1%9E%80%E1%9F%8B%E1%9E%91%E1%9E%84-112512662798448/', 'https://plus.google.com/117575618297062468775', '', 'https://twitter.com/Kimhay98Kh', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE `tblarticle` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `article_title_kh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content_kh` text CHARACTER SET utf8,
  `content` text CHARACTER SET utf8,
  `is_active` int(1) DEFAULT NULL,
  `is_marguee` int(1) DEFAULT '0',
  `meta_keyword` text CHARACTER SET utf8,
  `meta_desc` text CHARACTER SET utf8,
  `location_id` int(11) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `article_date` date DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblbanner`
--

CREATE TABLE `tblbanner` (
  `banner_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `banner_location` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `orders` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `post_code` varchar(55) NOT NULL,
  `tel` varchar(55) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `preferred_time` varchar(255) NOT NULL,
  `how_know_us` varchar(255) NOT NULL,
  `purchase` varchar(55) NOT NULL,
  `register_client` varchar(55) NOT NULL,
  `distributor` varchar(55) NOT NULL,
  `other` varchar(55) NOT NULL,
  `region` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `gallery_type` int(1) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `home` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbllayout`
--

CREATE TABLE `tbllayout` (
  `layout_id` int(11) NOT NULL,
  `layout_name` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllayout`
--

INSERT INTO `tbllayout` (`layout_id`, `layout_name`, `is_active`) VALUES
(1, 'Full Layout', 1),
(2, 'Grid Layout', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE `tbllocation` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL,
  `location_name_kh` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`location_id`, `location_name`, `is_active`, `location_name_kh`) VALUES
(17, 'main', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmenus`
--

CREATE TABLE `tblmenus` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `description` text,
  `lineage` varchar(255) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `layout_id` int(11) DEFAULT NULL,
  `modified_by` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `menu_name_kh` varchar(255) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `menu_type` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmenus`
--

INSERT INTO `tblmenus` (`menu_id`, `menu_name`, `description`, `lineage`, `parentid`, `level`, `order`, `is_active`, `created_date`, `created_by`, `layout_id`, `modified_by`, `modified_date`, `menu_name_kh`, `article_id`, `location_id`, `menu_type`) VALUES
(84, 'k', NULL, '84', 0, 0, 1, 1, NULL, NULL, 1, NULL, NULL, 'k', 0, 17, '17');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `menu_id` int(11) NOT NULL,
  `content_desc` text CHARACTER SET utf8 NOT NULL,
  `content_bottom` text NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproperty`
--

CREATE TABLE `tblproperty` (
  `pid` int(10) NOT NULL,
  `type_id` int(10) DEFAULT NULL,
  `agent_id` int(10) DEFAULT NULL,
  `lp_id` int(10) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `story` varchar(250) DEFAULT NULL,
  `p_type` varchar(250) DEFAULT NULL,
  `floor` int(10) DEFAULT NULL,
  `landsize` varchar(250) DEFAULT NULL,
  `housesize` varchar(250) DEFAULT NULL,
  `direction` varchar(250) DEFAULT NULL,
  `bedroom` varchar(150) DEFAULT NULL,
  `bathroom` varchar(150) DEFAULT NULL,
  `livingroom` int(10) DEFAULT NULL,
  `kitchen` varchar(150) DEFAULT NULL,
  `dinning_room` varchar(150) DEFAULT NULL,
  `furniture` varchar(50) DEFAULT NULL,
  `air_conditional` varchar(50) DEFAULT NULL,
  `parking` int(10) DEFAULT NULL,
  `pool` varchar(50) DEFAULT NULL,
  `gym` varchar(10) DEFAULT NULL,
  `steamandsouna` varchar(50) DEFAULT NULL,
  `garden` varchar(50) DEFAULT NULL,
  `balcony` varchar(50) DEFAULT NULL,
  `terrace` varchar(50) DEFAULT NULL,
  `elevator` varchar(50) DEFAULT NULL,
  `stairs` varchar(50) DEFAULT NULL,
  `img_source` text,
  `contact` int(10) DEFAULT NULL,
  `commision` varchar(50) DEFAULT NULL,
  `address` text,
  `advantage` text,
  `contact_owner` varchar(50) DEFAULT NULL,
  `ownername` varchar(150) DEFAULT NULL,
  `remark` text,
  `email_owner` varchar(250) DEFAULT NULL,
  `service_provided` varchar(250) DEFAULT NULL,
  `description` text,
  `p_status` int(1) DEFAULT NULL,
  `p_location` varchar(250) DEFAULT NULL,
  `add_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpropertylocation`
--

CREATE TABLE `tblpropertylocation` (
  `propertylocationid` int(10) NOT NULL,
  `locationname` varchar(250) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `note` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblpropertytype`
--

CREATE TABLE `tblpropertytype` (
  `typeid` int(10) NOT NULL,
  `typename` varchar(250) DEFAULT NULL,
  `type_note` text,
  `type_status` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpropertytype`
--

INSERT INTO `tblpropertytype` (`typeid`, `typename`, `type_note`, `type_status`) VALUES
(1, 'Apartment', 'new for apartment', 1),
(2, 'Villa', 'new for villar', 1),
(3, 'Condo', 'condo', 1),
(4, 'Flat', 'flat', 1),
(5, 'Land', 'land', 1),
(6, 'Biulding', '', 1),
(7, 'Office Space', '', 1),
(8, 'Warehouse', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `z_blog`
--

CREATE TABLE `z_blog` (
  `site_show_blogid` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_blog`
--

INSERT INTO `z_blog` (`site_show_blogid`, `description`) VALUES
(1, 'Menu Top'),
(2, 'Menu Left'),
(3, 'Menu Buttom'),
(4, 'Hot Product'),
(5, 'Menu Right');

-- --------------------------------------------------------

--
-- Table structure for table `z_currency`
--

CREATE TABLE `z_currency` (
  `curid` int(11) NOT NULL,
  `currcode` varchar(255) DEFAULT NULL,
  `curr_name` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `ex_rate` double DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_currency`
--

INSERT INTO `z_currency` (`curid`, `currcode`, `curr_name`, `symbol`, `is_default`, `ex_rate`, `country`) VALUES
(1, 'USD', 'US Dollars', '$', 1, 1, 'US');

-- --------------------------------------------------------

--
-- Table structure for table `z_module`
--

CREATE TABLE `z_module` (
  `moduleid` int(11) NOT NULL,
  `module_name` varchar(255) DEFAULT NULL,
  `sort_mod` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `mod_position` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_module`
--

INSERT INTO `z_module` (`moduleid`, `module_name`, `sort_mod`, `order`, `is_active`, `mod_position`) VALUES
(1, 'Setting', NULL, 0, 1, '2'),
(7, 'Menu', NULL, NULL, 1, '2'),
(10, 'Product', NULL, NULL, 0, '2'),
(11, 'Article', NULL, NULL, 1, '2'),
(12, 'Banner', NULL, NULL, 1, '2'),
(13, 'Contact', NULL, NULL, 0, '2'),
(18, 'Property', NULL, NULL, 1, '2'),
(19, 'Propery Type', NULL, NULL, 1, '2'),
(20, 'Property Location', NULL, NULL, 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `z_page`
--

CREATE TABLE `z_page` (
  `pageid` int(11) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `moduleid` int(11) DEFAULT '1',
  `order` int(11) DEFAULT NULL,
  `is_insert` int(11) DEFAULT NULL,
  `is_update` int(11) DEFAULT NULL,
  `is_delete` int(11) DEFAULT NULL,
  `is_show` int(11) DEFAULT NULL,
  `is_print` int(11) DEFAULT NULL,
  `is_export` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `icon` varchar(255) DEFAULT 'fa-bars',
  `alias` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_page`
--

INSERT INTO `z_page` (`pageid`, `page_name`, `link`, `moduleid`, `order`, `is_insert`, `is_update`, `is_delete`, `is_show`, `is_print`, `is_export`, `created_by`, `created_date`, `is_active`, `icon`, `alias`) VALUES
(5, 'Page', 'setting/page', 1, NULL, 0, 1, 0, 1, 1, 0, 1, '2015-02-05 17:00:01', 1, 'fa-file-o', NULL),
(6, 'User Profile', 'setting/user', 1, NULL, 1, 1, 1, 1, 0, 0, 1, '2015-02-05 16:56:20', 1, 'fa-user', NULL),
(7, 'User Role', 'setting/role', 1, NULL, 1, 1, 1, 1, 1, 1, 1, '2015-02-05 16:57:09', 1, 'fa-user', NULL),
(8, 'Role Access', 'setting/permission', 1, NULL, 1, 1, 0, 0, 0, 1, 1, '2015-02-05 16:56:46', 1, 'fa-wrench', NULL),
(57, 'Shipping Company', 'shipping/shipping', 11, 1, 1, 1, 1, 1, 1, 1, 1, '2015-06-29 11:21:45', 0, 'fa-bars', NULL),
(58, 'Product List', 'product/product', 7, 7, 1, 1, 1, 1, 1, 1, 1, '2015-07-10 13:47:35', 0, 'fa-bars', NULL),
(59, 'Stock In/Out', 'product/stockmove', 7, 8, 1, 1, 1, 1, 1, 1, 1, '2015-07-15 12:04:46', 0, 'fa-bars', NULL),
(54, 'Category', 'stock/category', 7, 6, 1, 1, 1, 1, 1, 1, 1, '2015-06-17 07:53:19', 0, 'fa-bars', 'category.html'),
(55, 'Store', 'store', 10, 0, 1, 1, 1, 1, 1, 1, 1, '2015-06-26 08:04:07', 0, 'fa-bars', NULL),
(56, 'Setup List', 'setup/csetup', 11, 0, 1, 1, 1, 1, 1, 1, 1, '2015-06-27 12:11:58', 0, 'fa-bars', NULL),
(60, 'Slide Show', 'slideshow/SlideShow', 7, 9, 1, 1, 1, 1, 1, 1, 1, '2015-07-17 08:19:12', 0, 'fa-bars', NULL),
(61, 'Setup Ads', 'setup/SetupAds', 11, 2, 1, 1, 1, 1, 1, 1, 1, '2015-08-04 03:00:11', 0, 'fa-bars', NULL),
(62, 'Setup Country', 'setup/country', 11, 3, 1, 1, 1, 1, 1, 1, 1, '2015-08-21 16:25:39', 0, 'fa-bars', NULL),
(63, 'Category List', 'menu/index', 7, 10, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 15:53:36', 1, 'fa-bars', NULL),
(64, 'Add New Category', 'menu/add', 7, 11, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 15:53:58', 1, 'fa-bars', NULL),
(65, 'Article List', 'article/index', 11, 4, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 16:46:23', 1, 'fa-bars', NULL),
(66, 'Add New Article', 'article/add', 11, 5, 1, 1, 1, 1, 1, 1, 1, '2015-09-11 16:47:08', 1, 'fa-bars', NULL),
(67, 'Product List', 'product/index', 10, 1, 1, 1, 1, 1, 1, 1, 1, '2015-09-12 17:10:07', 1, 'fa-bars', NULL),
(68, 'Add New Products', 'product/add', 10, 2, 1, 1, 1, 1, 1, 1, 1, '2015-09-12 17:10:46', 1, 'fa-bars', NULL),
(69, 'Banner List', 'setup/setupads/index', 12, 0, 1, 1, 1, 1, 1, 1, 1, '2016-02-05 23:16:13', 1, 'fa-bars', NULL),
(70, 'Add New Banner', 'setup/setupads/add', 12, 1, 1, 1, 1, 1, 1, 1, 1, '2016-02-05 23:15:42', 1, 'fa-bars', NULL),
(71, 'Contact List', 'article/contact_list', 13, 0, 1, 1, 1, 1, 1, 1, 1, '2015-09-15 14:32:25', 1, 'fa-bars', NULL),
(75, 'Add New Menu', 'category/add', 7, 12, 1, 1, 1, 1, 1, 1, 1, '2017-12-22 13:42:09', 1, 'fa-bars', NULL),
(76, 'Menu List', 'category/index', 7, 13, 11, 1, 1, 1, 1, 1, 1, '2017-12-22 13:42:54', 1, 'fa-bars', NULL),
(77, 'Module', 'setting/module', 1, 0, 1, 1, 1, 1, 1, 1, 1, '2018-11-17 11:53:41', 0, 'fa-bars', NULL),
(78, 'Add New Property', 'property/property/add', 18, 0, 1, 1, 1, 1, 1, 1, 1, '2018-11-18 04:36:42', 1, 'fa-bars', NULL),
(79, 'Property List', 'property/property/index', 18, 1, 1, 1, 1, 1, 1, 1, 1, '2018-11-18 04:36:26', 1, 'fa-bars', NULL),
(80, 'Add New Property Type', 'property/propertytype/add', 19, 0, 1, 1, 1, 1, 1, 1, 1, '2018-11-18 06:01:16', 1, 'fa-bars', NULL),
(81, 'Property Type List', 'property/propertytype/index', 19, 1, 1, 1, 1, 1, 1, 1, 1, '2018-11-18 06:00:59', 1, 'fa-bars', NULL),
(82, 'Property Location', 'property/propertylocation/add', 20, 0, 1, 1, 1, 1, 1, 1, 1, '2018-11-18 06:14:32', 1, 'fa-bars', NULL),
(83, 'Property Location List', 'property/propertylocation/index', 20, 1, 1, 1, 1, 1, 1, 1, 1, '2018-11-18 06:01:53', 1, 'fa-bars', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_role`
--

CREATE TABLE `z_role` (
  `roleid` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_role`
--

INSERT INTO `z_role` (`roleid`, `role`, `is_admin`, `is_active`) VALUES
(1, 'Administrators', 1, 1),
(2, 'Teachers', NULL, 0),
(3, 'Sponsors', NULL, 0),
(4, 'Doctors', NULL, 0),
(5, 'Students', NULL, 0),
(6, 'Parents', NULL, 0),
(8, 'Socials', NULL, 0),
(9, 'www', NULL, 0),
(10, 'asd', NULL, 0),
(11, 'testing', NULL, 0),
(12, 'testing-2a', NULL, 0),
(13, 'testing-3', NULL, 0),
(14, 'testine-4', NULL, 0),
(15, 'Pedagogy Staff', NULL, 0),
(16, 'Human Resource', NULL, 0),
(17, 'Health', NULL, 0),
(18, 'Study Office', NULL, 0),
(19, 'VTC Officier', NULL, 0),
(20, 'Product Posting', NULL, 0),
(21, 'Store Managment', NULL, 0),
(22, 'Product Authorization', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `z_role_module_detail`
--

CREATE TABLE `z_role_module_detail` (
  `mod_rol_id` int(11) NOT NULL,
  `roleid` int(11) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_role_module_detail`
--

INSERT INTO `z_role_module_detail` (`mod_rol_id`, `roleid`, `moduleid`, `order`) VALUES
(114, 1, 12, NULL),
(113, 1, 11, NULL),
(112, 1, 7, NULL),
(111, 1, 1, NULL),
(115, 1, 18, NULL),
(116, 1, 19, NULL),
(117, 1, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_role_page`
--

CREATE TABLE `z_role_page` (
  `role_page_id` int(11) NOT NULL,
  `roleid` int(11) DEFAULT NULL,
  `pageid` int(11) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `is_read` int(1) DEFAULT '1',
  `is_insert` int(1) DEFAULT '1',
  `is_delete` int(1) DEFAULT '1',
  `is_update` int(1) DEFAULT '1',
  `is_print` int(1) DEFAULT '1',
  `is_export` int(1) DEFAULT '1',
  `is_import` int(1) DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_role_page`
--

INSERT INTO `z_role_page` (`role_page_id`, `roleid`, `pageid`, `moduleid`, `created_date`, `created_by`, `is_read`, `is_insert`, `is_delete`, `is_update`, `is_print`, `is_export`, `is_import`) VALUES
(17, 17, 24, 7, '2015-03-19 02:18:59', '1', 1, 1, 1, 1, 1, 1, 1),
(26, 17, 25, 7, '2015-06-18 21:15:05', '1', 1, 1, 1, 1, 1, 1, 1),
(27, 17, 26, 7, '2015-04-20 10:57:34', '1', 1, 1, 1, 1, 1, 1, 1),
(28, 17, 27, 7, '2015-04-20 10:57:45', '1', 1, 1, 1, 1, 1, 1, 1),
(29, 17, 28, 7, '2015-04-20 10:57:55', '1', 1, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `dashboard_item`
--
ALTER TABLE `dashboard_item`
  ADD PRIMARY KEY (`dashid`);

--
-- Indexes for table `site_profile`
--
ALTER TABLE `site_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblarticle`
--
ALTER TABLE `tblarticle`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbllayout`
--
ALTER TABLE `tbllayout`
  ADD PRIMARY KEY (`layout_id`);

--
-- Indexes for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tblmenus`
--
ALTER TABLE `tblmenus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tblproperty`
--
ALTER TABLE `tblproperty`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tblpropertylocation`
--
ALTER TABLE `tblpropertylocation`
  ADD PRIMARY KEY (`propertylocationid`);

--
-- Indexes for table `tblpropertytype`
--
ALTER TABLE `tblpropertytype`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `z_blog`
--
ALTER TABLE `z_blog`
  ADD PRIMARY KEY (`site_show_blogid`);

--
-- Indexes for table `z_currency`
--
ALTER TABLE `z_currency`
  ADD PRIMARY KEY (`curid`);

--
-- Indexes for table `z_module`
--
ALTER TABLE `z_module`
  ADD PRIMARY KEY (`moduleid`);

--
-- Indexes for table `z_page`
--
ALTER TABLE `z_page`
  ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `z_role`
--
ALTER TABLE `z_role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `z_role_module_detail`
--
ALTER TABLE `z_role_module_detail`
  ADD PRIMARY KEY (`mod_rol_id`);

--
-- Indexes for table `z_role_page`
--
ALTER TABLE `z_role_page`
  ADD PRIMARY KEY (`role_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1498;
--
-- AUTO_INCREMENT for table `dashboard_item`
--
ALTER TABLE `dashboard_item`
  MODIFY `dashid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_profile`
--
ALTER TABLE `site_profile`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblarticle`
--
ALTER TABLE `tblarticle`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbllayout`
--
ALTER TABLE `tbllayout`
  MODIFY `layout_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tblmenus`
--
ALTER TABLE `tblmenus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblproperty`
--
ALTER TABLE `tblproperty`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpropertylocation`
--
ALTER TABLE `tblpropertylocation`
  MODIFY `propertylocationid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpropertytype`
--
ALTER TABLE `tblpropertytype`
  MODIFY `typeid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `z_blog`
--
ALTER TABLE `z_blog`
  MODIFY `site_show_blogid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `z_currency`
--
ALTER TABLE `z_currency`
  MODIFY `curid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `z_module`
--
ALTER TABLE `z_module`
  MODIFY `moduleid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `z_page`
--
ALTER TABLE `z_page`
  MODIFY `pageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `z_role`
--
ALTER TABLE `z_role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `z_role_module_detail`
--
ALTER TABLE `z_role_module_detail`
  MODIFY `mod_rol_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `z_role_page`
--
ALTER TABLE `z_role_page`
  MODIFY `role_page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;