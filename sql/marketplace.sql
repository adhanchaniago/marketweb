-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 02:36 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marketdigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`, `level`) VALUES
(1, 'admin@marketdigital.co.id', '21232f297a57a5a743894a0e4a801fc3', 'admin', '5.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `app_screenshoot`
--

CREATE TABLE IF NOT EXISTS `app_screenshoot` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_screenshoot`
--

INSERT INTO `app_screenshoot` (`id`, `gambar`, `active`) VALUES
(1, 'Screenshot_2018-08-20_PT_Data_Binary_Sulution.jpg', 'active'),
(2, 'Screenshot_2018-08-20_Handri.png', ''),
(3, 'Screenshot_2018-08-20_SimpleAdmin_-_Responsive_Admin_Dashboard_Template.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `jumlah_komentar` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `tanggal`, `judul`, `keywords`, `description`, `author`, `foto`, `isi`, `jumlah_komentar`, `catagori`) VALUES
(5, '02-May-18, 4:32 am', 'Avent 1', 'Avent 2', 'Avent 2', 'infranetsystem.com', 'cppppp.JPG', '            <p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, blandit consequat lectus. Mauris \r\nnec scelerisque sapien. Donec tristique risus sapien, a dictum orci \r\naliquam et. Sed vitae arcu eget nibh mattis cursus at lobortis purus. \r\nVestibulum non rutrum neque, sit amet consequat purus. Quisque turpis \r\nnulla, tincidunt dictum massa a, feugiat interdum nisi.</p><p><br></p><p><br><img style="width: 640px;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAPAAA/+EDLWh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTQgNzkuMTUxNDgxLCAyMDEzLzAzLzEzLTEyOjA5OjE1ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozRkNFMzU3RDg2QUYxMUU1OEM4OENCQkI2QTc0MTkwRSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozRkNFMzU3Qzg2QUYxMUU1OEM4OENCQkI2QTc0MTkwRSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDEwNzlDODNCQThDMTFFMjg5NTlFMDAzODgzMjZDMkIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDEwNzlDODRCQThDMTFFMjg5NTlFMDAzODgzMjZDMkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoL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mhNky5fTkBYwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '0', 'Event Agustus'),
(6, '20-Aug-18, 11:36 am', 'Event2', 'Event2', 'Event2', 'infranetsystem.com', 'aplikasi_disabilitas.JPG', '<p>              \r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, blandit consequat lectus. Mauris \r\nnec scelerisque sapien. Donec tristique risus sapien, a dictum orci \r\naliquam et. Sed vitae arcu </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, blandit consequat lectus. Mauris \r\nnec scelerisque sapien. Donec tristique risus sapien, a dictum orci \r\naliquam et. Sed vitae arcu <br></p>', '0', 'Event Agustus'),
(7, '20-Aug-18, 11:40 am', 'Event 3', 'Event 3', 'Event 3', 'infranetsystem.com', 'home.PNG', '<p>              \r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, <br></p>', '0', 'Event Agustus');

-- --------------------------------------------------------

--
-- Table structure for table `catagori`
--

CREATE TABLE IF NOT EXISTS `catagori` (
  `id` int(11) NOT NULL,
  `catagori` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagori`
--

INSERT INTO `catagori` (`id`, `catagori`) VALUES
(5, 'Event Agustus');

-- --------------------------------------------------------

--
-- Table structure for table `cat_prod`
--

CREATE TABLE IF NOT EXISTS `cat_prod` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_prod`
--

INSERT INTO `cat_prod` (`id`, `nama`) VALUES
(1, 'Compro Basic'),
(2, 'Compro Advance'),
(3, 'Website');

-- --------------------------------------------------------

--
-- Table structure for table `deksripsi2`
--

CREATE TABLE IF NOT EXISTS `deksripsi2` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deksripsi2`
--

INSERT INTO `deksripsi2` (`id`, `gambar`, `title`, `deskripsi`) VALUES
(1, 'weblistdekstop.png', 'Kami Ahli dan Berpengalaman Pembuatan Dalam Website', '<p>Dalam pembuatan aplikasi website profesional, percayakanlah kepada kami.</p>\r\n\r\n<p>kami mempunyai beberapa refrensi design untuk menarik perhatian pengunjung untu betah dan pengunjung ingin kembali melihat website anda</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi1`
--

CREATE TABLE IF NOT EXISTS `deskripsi1` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi1`
--

INSERT INTO `deskripsi1` (`id`, `gambar`, `title`, `deskripsi`) VALUES
(1, 'Presentation_Paper.png', ' ', '<blockquote>\r\n<h2 style="font-style:italic;">Saat ini segala aktivitas semakin mudah dilakukan dengan smartphone.&nbsp;Bagi setiap orang yang melihat peluang dapat memanfaatkan era digital untuk meningkatkan Branding dan Omset.</h2>\r\n\r\n<h1>&nbsp;</h1>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `nama`, `link`) VALUES
(1, 'Android', 'https://google.com'),
(2, 'IOS', 'tps://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(2, 'Apakah Harga Aplikasi sudah termasuk pajak?', 'ya tentu saja, harga apliaksi termasuk pajak, dan kami kirmkan bukti potong pajaknya'),
(3, 'Apakah harga pembelian website termasuk domain dan hosting?', 'harga pembuatan website sudah termasuk domain dan hosting sebesar 1Gb/Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `heading`
--

CREATE TABLE IF NOT EXISTS `heading` (
  `id` int(11) NOT NULL,
  `background` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heading`
--

INSERT INTO `heading` (`id`, `background`, `title`, `deskripsi`) VALUES
(1, 'slider-bg-1.jpg', 'START YOUR DIGITAL PRODUCT', '<p>Company, Restourant, Hotel, Online Shop, Travel agent , Etc.....</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `copy_right` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo_browser` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `logo`, `facebook`, `twitter`, `instagram`, `alamat`, `hp`, `email`, `copy_right`, `title`, `logo_browser`) VALUES
(1, 'logo51.png', '#', '#', '#', 'Pamulang', '6281808784785', 'sales@marketdigital.co.id', 'Copyright © 2018 marketdigital.co.id |   All Rights Reserved   | design by handrisaeputra@gmail.com', 'MarketDigital.co.id', '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `id_forum` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `uniq` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mockup`
--

CREATE TABLE IF NOT EXISTS `mockup` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mockup`
--

INSERT INTO `mockup` (`id`, `gambar`, `judul`, `deskripsi`) VALUES
(1, 'mobile_responsive.png', 'RAGAM FITUR UNTUK MENGEMBANGKAN BISNIS ANDA', '<p>Fitur kami&nbsp;menjadi salah satu solusi bisnis terbaik Anda untuk memperluas pasar Anda dan meningkatkan penjualan Anda.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mockup_des`
--

CREATE TABLE IF NOT EXISTS `mockup_des` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mockup_des`
--

INSERT INTO `mockup_des` (`id`, `icon`, `judul`, `deskripsi`) VALUES
(1, 'date_range', 'EVENTS', '<p>Let your customers know your events so they can join and make your events merrier and brighter.</p>\r\n'),
(2, 'notifications', 'PUSH NOTIFICATION', '<p>You can inform your marketing programs, events, and activities direct to your customers. It&#39;s faster and easier, yet more effective and efficient. It&#39;s a powerful tool to retain your customers.</p>\r\n'),
(3, 'collections', 'GALLERIES', 'Let your customers know more about your company by seeing your real activities through photos.'),
(4, 'art_track', 'NEWS & ARTICLES', 'You can write news about your events and activities or just share some good articles to keep in touch with your customers.'),
(5, 'shopping_cart', 'SHOPPING CART', 'Your customer can shop anywhere, anytime. They just need to click the products or services they want, pay it, and it will be delivered to them. It is very convenient and saves a lot of time.'),
(6, 'payment', 'PAYMENT GATEWAY', 'It makes your business go faster, without any limitation. Your customers can buy your products or services right away. 24 hours a day, 7 days a week.');

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE IF NOT EXISTS `orderan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `orderan` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderan`
--

INSERT INTO `orderan` (`id`, `nama`, `email`, `hp`, `orderan`, `detail`, `waktu`, `member`) VALUES
(4, 'handri', 'handriiyekss@yahoo.com', '0818081231', 'Basic Advance Proffesional 1 2', 'gulgul', '18-Dec-18, 6:35 am', '');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `gambar`, `deskripsi`, `link`) VALUES
(23, 'cctv24jam.JPG', 'CCTV24JAM', 'http://cctv24jam.com/'),
(24, 'jualtoefl.JPG', 'Jual Toefl', 'http://jualtoefl.com/'),
(25, 'jpccargo.JPG', 'JPC Cargo', 'http://jpccargo.id'),
(26, 'hadizakaria.JPG', 'Hadi Zakaria', 'http://hadizakaria.com/'),
(27, 'indonesia-kompeten.JPG', 'Indonesia Kompeten', 'http://indonesia-kompeten.com'),
(28, 'infranetsystem.JPG', 'PT Infranet system', 'http://infranetsystem.com'),
(29, 'databinary.JPG', 'PT Data Binary Solution', 'http://databinary.co.id'),
(30, 'mj5event.JPG', 'PT. MJ5 Event', 'http://mj5event.com'),
(31, 'sedotwctangsel.JPG', 'SedotWCTangsel', 'https://sedotwctangsel.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `jumlah`, `ip`, `month`) VALUES
(1, '0', '', 'May'),
(2, '0', '', 'June'),
(3, '0', '', 'July'),
(4, '0', '', 'August'),
(5, '0', '', 'September'),
(6, '0', '', 'October'),
(7, '0', '', 'November'),
(8, '0', '', 'December');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `pesan` varchar(10000) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `hp`, `company`, `pesan`, `waktu`) VALUES
(1, '', '', '', '', '', '21-Jul-18, 8:48 pm'),
(2, 'Randy', 'Randy@TalkWithLead.com', '416-385-3200', 'TalkWithLead.com', 'Hi,\r\n\r\nMy name is Randy and I was looking at a few different sites online and came across your site starcompro.com.  I must say - your website is very impressive.  I found your website on the first page of the Search Engine. \r\n\r\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\r\n \r\nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \r\n\r\nTalkWithLead is a widget which captures a website visitor’s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website — while they''re hot!\r\n  \r\nTry the TalkWithLead Live Demo now to see exactly how it works.  Visit: https://www.talkwithlead.com/Contents/LiveDemo.aspx\r\n\r\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\r\n\r\nIf you would like to talk to me about this service, please give me a call.  We do offer a 14 days free trial.  \r\n\r\nThanks and Best Regards,\r\nRandy', '21-Jul-18, 8:50 pm'),
(3, 'GrantEpity', 'mariio_81@op.pl', 'https://0daymusic.org ', 'google', 'Hello, \r\nDownload Mp3 Scene Music Private FTP \r\nDance/House/Techno/Trance/Electro \r\n \r\nhttps://0daymusic.org \r\n \r\nPrivate FTP MP3/FLAC 1990-2018: \r\n \r\nPlan A: 20€ – 200GB – 30 Days \r\nPlan B: 45€ – 600GB – 90 Days \r\nPlan C: 80€ – 1500GB – 180 Days \r\n \r\nUpdated: 2018-07-03 FTP list txt \r\n \r\nBest regards, \r\nMark', '09-Aug-18, 7:14 pm');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `deskripsi`, `price`) VALUES
(1, 'Paket 1', '<ul>\r\n	<li>Android Phone</li>\r\n	<li>Ios Phone</li>\r\n	<li>News &amp; Article</li>\r\n	<li>Gallery</li>\r\n	<li>Company Profile</li>\r\n</ul>\r\n', '    3,5'),
(3, 'Paket 2', '<ul>\r\n	<li>Android Phone</li>\r\n	<li>Ios Phone</li>\r\n	<li>Sophing Chart</li>\r\n	<li>Payment Gateway</li>\r\n	<li>Push Notification</li>\r\n</ul>\r\n', '    12'),
(5, 'Paket 3', '<ul>\r\n	<li>Profile company</li>\r\n	<li>Event Website</li>\r\n	<li>Online Shop</li>\r\n	<li>Database Management System</li>\r\n	<li>Gallery</li>\r\n</ul>\r\n', '  400');

-- --------------------------------------------------------

--
-- Table structure for table `product_h`
--

CREATE TABLE IF NOT EXISTS `product_h` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_h`
--

INSERT INTO `product_h` (`id`, `title`, `deskripsi`) VALUES
(1, 'Product ', '<p>Percayakan kepada kami , untuk jasa yang kami tawarkan</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE IF NOT EXISTS `seo` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `tag` varchar(1000) NOT NULL,
  `id_halaman` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `description`, `keywords`, `author`, `tag`, `id_halaman`) VALUES
(1, 'jasa marketing digital jakarta', 'jasa marketing digital jakarta', 'marketdigital.co.id', 'jasa marketing digital jakarta', '1');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `gambar`, `title`, `deskripsi`) VALUES
(1, 'service-2.jpg', '1) PICK A CATEGORY', '<p>No matter what your business is, we&#39;ve designed to get you up and running in minutes.</p>\r\n'),
(2, 'service-4.jpg', '2) BUILD YOUR APP IN MINUTES', '<p>Our user-friendly platform offers everything you need to build a feature-rich application without writing any single line of code.</p>\r\n'),
(3, 'service-5.jpg', '3) PUBLISH AND MANAGE', '<p>We publish your application for the world to see and let you make updates any time.</p>\r\n'),
(4, 'service-8.jpg', '4) Let''s Promotion Your Apps', '<p>&nbsp;Let&#39;s Promotion Your Apps, to your partners, employe, end etc</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `work_h`
--

CREATE TABLE IF NOT EXISTS `work_h` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_h`
--

INSERT INTO `work_h` (`id`, `title`, `deskripsi`) VALUES
(1, 'SIMPLE STEPS TO BUILD YOUR APP', '<p>.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_screenshoot`
--
ALTER TABLE `app_screenshoot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagori`
--
ALTER TABLE `catagori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_prod`
--
ALTER TABLE `cat_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deksripsi2`
--
ALTER TABLE `deksripsi2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskripsi1`
--
ALTER TABLE `deskripsi1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heading`
--
ALTER TABLE `heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq` (`uniq`);

--
-- Indexes for table `mockup`
--
ALTER TABLE `mockup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mockup_des`
--
ALTER TABLE `mockup_des`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_h`
--
ALTER TABLE `product_h`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_h`
--
ALTER TABLE `work_h`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `app_screenshoot`
--
ALTER TABLE `app_screenshoot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `catagori`
--
ALTER TABLE `catagori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cat_prod`
--
ALTER TABLE `cat_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `deksripsi2`
--
ALTER TABLE `deksripsi2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deskripsi1`
--
ALTER TABLE `deskripsi1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `heading`
--
ALTER TABLE `heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mockup`
--
ALTER TABLE `mockup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mockup_des`
--
ALTER TABLE `mockup_des`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_h`
--
ALTER TABLE `product_h`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `work_h`
--
ALTER TABLE `work_h`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
