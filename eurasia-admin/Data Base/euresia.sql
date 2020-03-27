-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 07:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `euresia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'eurasia', 'rashmi');

-- --------------------------------------------------------

--
-- Table structure for table `backingpaper`
--

CREATE TABLE `backingpaper` (
  `id` int(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `gsm` varchar(255) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backingpaper`
--

INSERT INTO `backingpaper` (`id`, `types`, `quantity`, `gsm`, `vendorname`, `rate`, `description`) VALUES
(11, '11111111111', '111111111', '11111111', '111111111', '11111111', '111111111'),
(12, '11111111', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cutpieces`
--

CREATE TABLE `cutpieces` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutpieces`
--

INSERT INTO `cutpieces` (`id`, `type`, `color`, `size`, `quantity`) VALUES
(193, 'Cotton', 'Black', '16*16', '100'),
(194, 'Cotton', 'Black', '', ''),
(195, 'Cotton', 'Black', '', ''),
(196, 'Cotton', 'Black', '', ''),
(197, 'Cotton', 'Black', '', ''),
(198, 'Cotton', 'Black', '16*16', '100'),
(199, 'Cotton', 'Black', '', ''),
(200, 'Cotton', 'Black', '', ''),
(201, 'Cotton', 'Black', '', ''),
(202, 'Cotton', 'Black', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id` int(255) NOT NULL,
  `item` varchar(5) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `fabcolor` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `uploadcad` varchar(255) NOT NULL,
  `uploadimg` varchar(255) NOT NULL,
  `threadcolor` varchar(255) NOT NULL,
  `threadcolor1` varchar(255) NOT NULL,
  `threadetails` varchar(255) NOT NULL,
  `threadetails1` varchar(255) NOT NULL,
  `piping` varchar(255) NOT NULL,
  `pipingdetails` varchar(255) NOT NULL,
  `pipingcolor` varchar(255) NOT NULL,
  `nostiches` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `date1` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `date2` date NOT NULL,
  `quantity1` varchar(255) NOT NULL,
  `tailor` varchar(255) NOT NULL,
  `date3` date NOT NULL,
  `quantity3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id`, `item`, `descrip`, `types`, `fabcolor`, `size`, `uploadcad`, `uploadimg`, `threadcolor`, `threadcolor1`, `threadetails`, `threadetails1`, `piping`, `pipingdetails`, `pipingcolor`, `nostiches`, `rate`, `date1`, `quantity`, `date2`, `quantity1`, `tailor`, `date3`, `quantity3`) VALUES
(204, 'd1', 'Testing', 'Cotton', 'Red', '100', '', '', 'Black', '', '', '', 'Yes', 'White', '', '200', '0.4', '0000-00-00', '', '2020-03-04', '0', 'Niranjan', '2020-03-04', '500'),
(205, 's2', 'Testing', 'Cotton', 'blue', '100', '', '', 'Black', '', '', '', 'Yes', '', '', '23230', '46.46', '0000-00-00', '', '2020-03-03', '0', 'Niranjan', '2020-03-03', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `embroidery`
--

CREATE TABLE `embroidery` (
  `id` int(255) NOT NULL,
  `designid` varchar(255) NOT NULL,
  `uploadcad` varchar(255) NOT NULL,
  `uploadimg` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `embroidery`
--

INSERT INTO `embroidery` (`id`, `designid`, `uploadcad`, `uploadimg`, `quantity`, `date`) VALUES
(1, '3', '', '', 111, '0000-00-00'),
(2, '1', '', '', 7767, '2019-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `fabricpiping`
--

CREATE TABLE `fabricpiping` (
  `id` int(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `descirption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fabricpiping`
--

INSERT INTO `fabricpiping` (`id`, `types`, `color`, `size`, `quantity`, `rate`, `descirption`) VALUES
(1, '11111111', '', '', '', '', ''),
(2, '723', '7878', '', '78787', '7878', '787878');

-- --------------------------------------------------------

--
-- Table structure for table `fabrics`
--

CREATE TABLE `fabrics` (
  `id` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `supplyid` varchar(255) NOT NULL,
  `companyid` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `gsm` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `norolls1` varchar(255) NOT NULL,
  `norolls` varchar(255) NOT NULL,
  `roll1` varchar(255) NOT NULL,
  `roll2` varchar(255) NOT NULL,
  `roll3` varchar(255) NOT NULL,
  `roll4` varchar(255) NOT NULL,
  `roll5` varchar(255) NOT NULL,
  `quantity1_1` varchar(255) NOT NULL,
  `quantity1_2` varchar(255) NOT NULL,
  `quantity1_3` varchar(255) NOT NULL,
  `quantity1_4` varchar(255) NOT NULL,
  `quantity1_5` varchar(255) NOT NULL,
  `size1_1` varchar(255) NOT NULL,
  `size1_2` varchar(255) NOT NULL,
  `size1_3` varchar(255) NOT NULL,
  `size1_4` varchar(223) NOT NULL,
  `size1_5` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fabrics`
--

INSERT INTO `fabrics` (`id`, `size`, `vendor`, `supplyid`, `companyid`, `types`, `quantity`, `color`, `rate`, `gsm`, `description`, `norolls1`, `norolls`, `roll1`, `roll2`, `roll3`, `roll4`, `roll5`, `quantity1_1`, `quantity1_2`, `quantity1_3`, `quantity1_4`, `quantity1_5`, `size1_1`, `size1_2`, `size1_3`, `size1_4`, `size1_5`) VALUES
(104, '1000', 'Amazon', 'f1', '12345', 'Cotton', '3000', 'Black', '200', '12345', 'Testing', '', '', '0', '0', '1000', '1000', '1000', '', '', '', '', '', '', '', '', '', ''),
(105, '200', 'Amazon', 'f2', '12345', 'Cotton', '4000', 'Black', '200', '12345', '', '', '', '1000', '1000', '500', '800', '700', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pipingfabric.php`
--

CREATE TABLE `pipingfabric.php` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pipingrope`
--

CREATE TABLE `pipingrope` (
  `id` int(255) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `quantitykg` varchar(255) NOT NULL,
  `quantitybundles` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pipingrope`
--

INSERT INTO `pipingrope` (`id`, `vendorname`, `quantitykg`, `quantitybundles`, `rate`, `description`) VALUES
(10, '111111', '1111', '1111111', '', '111111111'),
(11, '111111', '1111', '111', '', '1111111'),
(12, '111111', '', '', '', ''),
(13, '23', '2222', '2222', '222222', '2222'),
(14, '10001', '1111', '11111', '111111', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `item`, `quantity`, `size`, `rate`) VALUES
(3, '1234', '111', '111', 'defcd'),
(4, '1', '111', '', ''),
(5, '2', '2', '2', '222'),
(6, '333', '33333333333', '3333333333333', '333'),
(7, '66', '55', '55', '55');

-- --------------------------------------------------------

--
-- Table structure for table `stiching`
--

CREATE TABLE `stiching` (
  `id` int(255) NOT NULL,
  `designid` int(255) NOT NULL,
  `nostiches` int(255) NOT NULL,
  `date` date NOT NULL,
  `tailorname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stiching`
--

INSERT INTO `stiching` (`id`, `designid`, `nostiches`, `date`, `tailorname`) VALUES
(1, 3, 3, '0000-00-00', 'raja'),
(2, 7, 777, '2017-07-07', '777'),
(3, 8, 888, '2018-08-08', '888'),
(4, 1, 0, '0000-00-00', ''),
(5, 1, 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(255) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `vendorname`, `quantity`, `rate`, `description`) VALUES
(13, '111111', '1111111', '11111111', '1111111'),
(14, '', '', '', ''),
(15, 'qqqq', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tapes`
--

CREATE TABLE `tapes` (
  `id` int(255) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tapes`
--

INSERT INTO `tapes` (`id`, `vendorname`, `quantity`, `description`) VALUES
(27, '111111', '111', '11'),
(28, '111111', '111', '11111111');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(255) NOT NULL,
  `nothread` varchar(255) NOT NULL,
  `vendorname` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `nothread`, `vendorname`, `color`, `description`) VALUES
(11, '1111111', '11111111', '11111111', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `zipper`
--

CREATE TABLE `zipper` (
  `id` int(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `nopieces` varchar(255) NOT NULL,
  `westage` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipper`
--

INSERT INTO `zipper` (`id`, `supplier`, `nopieces`, `westage`, `rate`, `description`) VALUES
(10, '111111', '111', '1111', '1111', '1111'),
(11, '22222222', '22222222', '2222222', '22222222', '22222222222'),
(12, '1000', '111', '11111', '1111', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backingpaper`
--
ALTER TABLE `backingpaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutpieces`
--
ALTER TABLE `cutpieces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `embroidery`
--
ALTER TABLE `embroidery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabricpiping`
--
ALTER TABLE `fabricpiping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabrics`
--
ALTER TABLE `fabrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pipingfabric.php`
--
ALTER TABLE `pipingfabric.php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pipingrope`
--
ALTER TABLE `pipingrope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stiching`
--
ALTER TABLE `stiching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tapes`
--
ALTER TABLE `tapes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zipper`
--
ALTER TABLE `zipper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backingpaper`
--
ALTER TABLE `backingpaper`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cutpieces`
--
ALTER TABLE `cutpieces`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `embroidery`
--
ALTER TABLE `embroidery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fabricpiping`
--
ALTER TABLE `fabricpiping`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fabrics`
--
ALTER TABLE `fabrics`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `pipingfabric.php`
--
ALTER TABLE `pipingfabric.php`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pipingrope`
--
ALTER TABLE `pipingrope`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stiching`
--
ALTER TABLE `stiching`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tapes`
--
ALTER TABLE `tapes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `zipper`
--
ALTER TABLE `zipper`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
