-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2021 at 01:53 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `closeday`
--

CREATE TABLE `closeday` (
  `ID` int(11) NOT NULL,
  `totalsales` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custemers`
--

CREATE TABLE `custemers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custemers`
--

INSERT INTO `custemers` (`id`, `name`, `address`, `comment`) VALUES
(11, 'Mumo', '90300', 'sadfghjkj,nfm,,,fh,fgh,g'),
(12, 'Kim John Un', 'Pyonyang, S-Korea', 'zdfgj hk,jjklhkkhgkj'),
(13, 'John Doe', '90300 857787', 'asfsebsntrhmjtykyuil,i');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `date` varchar(111) NOT NULL,
  `category` text NOT NULL,
  `amount` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `date`, `category`, `amount`, `comment`) VALUES
(2, '2020-04-19', 'Lunch', 50, 'fghfghfg'),
(7, '13-11-2020', 'Lunch', 50, 'fdfbsbsdbsdbsdbsdbsdbsd'),
(8, '13-11-2020', 'Shop Repairs', 500, 'fdfsdfbsdrfbnsd');

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `name`) VALUES
(1, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(8) NOT NULL,
  `member_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `member_password` varchar(64) NOT NULL,
  `member_email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_password`, `member_email`) VALUES
(1, 'Admin', '$2y$10$tW.9UDzqxoCB8iU3pPfOLOjKgDNQPU7xgTEc/5/XGg3XF0Ak4ntj6', 'hastingsmumo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `misc`
--

CREATE TABLE `misc` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `name` text NOT NULL,
  `details` text NOT NULL,
  `status` text NOT NULL,
  `reply` text NOT NULL,
  `replyname` text NOT NULL,
  `sstat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `detail`, `status`) VALUES
(3, 'Cheque', 'Recieved'),
(4, 'Cash', 'ref');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `cartegory` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `supplier` text NOT NULL,
  `qty` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `cartegory`, `price`, `cost`, `supplier`, `qty`, `status`) VALUES
(1, '13331120330133001133', 'ORDINARY NAILS 1INCH', 'Nails', '140', 100, 'Sawla', 132, 'Available'),
(3, '20181120181118291118', 'Superglue', 'Glue', '30', 15, 'Sawla', 8, 'Available'),
(6, '680053', 'Bed Bolts and Washers', 'Nuts and Bolts', '40', 40, 'Sawla', 47, 'Available'),
(7, '2454545', 'United paints White 1/2', 'Wall Paint', '150', 90, 'Taj Hardware', 5, 'Available'),
(8, '78574864', 'United paints White 1ltr', 'Wall Paint', '300', 150, 'Taj Hardware', 9, 'Available'),
(10, '5252424', 'United paints White 1/4', 'Wall Paint', '75', 50, 'Taj Hardware', 3, 'Available'),
(11, '2606012106120621106', 'Thinner 5ltr', 'Wall Paint', '750', 350, 'Sawla', 0, 'Out of Stoke'),
(12, '745753', 'Thinner 1ltr', 'Wall Paint', '200', 155, 'Sawla', 2, 'Available'),
(13, '64545343', 'White Spirit 1/2ltr', 'Wall Paint', '250', 75, 'Sawla', 0, 'Out of Stoke'),
(15, '78577856', 'Turpentine 1/2ltr', 'Wall Paint', '100', 60, 'Sawla', 24, 'Available'),
(16, '78578578', 'Turpentine 5ltr', 'Wall Paint', '850', 550, 'Sawla', 1, 'Available'),
(17, '', 'nyumba 2M', 'Iron Sheet', '500', 0, 'Select Item Supplier', 20, 'Available'),
(18, '', 'nyumba 2.5m', 'Iron Sheet', '600', 0, 'Select Item Supplier', 40, 'Available'),
(19, '', 'nyumba 3M', 'Iron Sheet', '700', 0, 'Select Item Supplier', 29, 'Available'),
(20, '2636012136123621136', 'NYUMBA RIDGES', 'Iron Sheet', '180', 120, 'Hari Krupa', 0, 'Out of Stoke'),
(21, '01231220230223291223', 'DUMUZAS 2M', 'Iron Sheet', '550', 0, 'Taj Hardware', 12, 'Available'),
(22, '10221220221222381222', 'DUMUZAS 2.5M', 'Iron Sheet', '650', 0, 'Taj Hardware', 71, 'Available'),
(23, '29301120300430401130', 'DUMUZAS 3M', 'Iron Sheet', '750', 0, 'Taj Hardware', 22, 'Available'),
(24, '29171120170417411117', 'DUMUZAS RIDGES', 'Iron Sheet', '230', 0, 'Taj Hardware', 23, 'Available'),
(25, '13101120100110031110', 'COLOURED SHEETS 2M', 'Iron Sheet', '750', 0, 'Hari Krupa', 0, 'Out of Stoke'),
(26, '2613012113121322113', 'COLOURED SHEETS 2.5M', 'Iron Sheet', '900', 0, 'Sellect Product Supplier', 0, 'Available'),
(27, '', 'COLOURED SHEETS 3M', 'Iron Sheet', '1080', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(28, '', 'COLOURED RIDGES', 'Iron Sheet', '400', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(29, '', 'WIRE MESH Hg', 'Wire Mesh', '750', 0, 'Select Item Supplier', 8, 'Available'),
(30, '20081120081108381108', 'WIRE MESH Mg', 'Wire Mesh', '400', 0, 'Taj Hardware', 24, 'Available'),
(32, '22261120260426001126', '5 FT', 'CHAIN LINK', '2400', 0, 'Taj Hardware', 2, 'Available'),
(34, '20121120121112341112', '7 FT', 'CHAIN LINK', '3360', 2500, 'Sawla', 12, 'Available'),
(35, '22001120000400001100', '8 FT', 'CHAIN LINK', '3840', 0, 'Taj Hardware', 1, 'Available'),
(36, '', 'BARBED WIRE 610M', 'CHAIN LINK', '4200', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(37, '20001120001100351100', 'BARBED WIRE 480M', 'CHAIN LINK', '3800', 0, 'Sawla', 12, 'Available'),
(38, '', 'PPR pipes 20MM', 'Plumping Tools and Equipment', '300', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(39, '', 'PPR pipes 25MM', 'Plumping Tools and Equipment', '450', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(40, '', 'PPR pipes 32MM', 'Plumping Tools and Equipment', '600', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(41, '', 'PVC water-pipes 1.25 inch', 'Plumping Tools and Equipment', '380', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(42, '', 'PVC water-pipes 1.5 inch', 'Plumping Tools and Equipment', '450', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(43, '', 'PVC water-pipes 2 inch', 'Plumping Tools and Equipment', '600', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(44, '', 'PVC water-pipes 3 inch', 'Plumping Tools and Equipment', '1200', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(45, '', 'PVC waste Elbow 2 inch', 'Plumping Tools and Equipment', '90', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(46, '', 'PVC waste Elbow 3 inch', 'Plumping Tools and Equipment', '150', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(47, '', 'PVC waste Elbow 4 inch', 'Plumping Tools and Equipment', '300', 0, 'Select Item Supplier', 3, 'Available'),
(48, '', 'PVC waste Tee 2 inch', 'Plumping Tools and Equipment', '150', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(49, '', 'PVC waste Tee 3 inch', 'Plumping Tools and Equipment', '250', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(50, '', 'PVC waste Tee 4 inch', 'Plumping Tools and Equipment', '350', 0, 'Select Item Supplier', 3, 'Available'),
(51, '', 'PVC waste Tee 1.25 inch', 'Plumping Tools and Equipment', '60', 0, 'Select Item Supplier', 6, 'Available'),
(52, '', 'PVC waste Tee 1.5 inch', 'Plumping Tools and Equipment', '80', 0, 'Select Item Supplier', 2, 'Available'),
(53, '', 'PVC waste plug 1.25 inch', 'Plumping Tools and Equipment', '60', 0, 'Select Item Supplier', 6, 'Available'),
(54, '', 'PVC waste plug 1.5 inch', 'Plumping Tools and Equipment', '90', 0, 'Select Item Supplier', 4, 'Available'),
(55, '', 'PVC waste plug 2 inch', 'Plumping Tools and Equipment', '120', 0, 'Select Item Supplier', 3, 'Available'),
(56, '', 'PVC waste plug 3 inch', 'Plumping Tools and Equipment', '150', 0, 'Select Item Supplier', 2, 'Available'),
(57, '', 'PVC waste plug 4 inch', 'Plumping Tools and Equipment', '180', 0, 'Select Item Supplier', 7, 'Available'),
(58, '', 'INSPECTION  BENT 4 INCH', 'Plumping Tools and Equipment', '450', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(59, '', 'MAGIC CONNECTOR ', 'Plumping Tools and Equipment', '600', 0, 'Select Item Supplier', 2, 'Available'),
(60, '', 'GLITTINGS PVC', 'Plumping Tools and Equipment', '50', 0, 'Select Item Supplier', 92, 'Available'),
(61, '', 'GLITTINGS (Aluminium)', 'Plumping Tools and Equipment', '50', 0, 'Select Item Supplier', 25, 'Available'),
(62, '', 'EMULSION 20LTR', 'Wall Paint', '1700', 0, 'Select Item Supplier', 10, 'Available'),
(63, '', 'EMULSION 10LTR', 'Wall Paint', '900', 0, 'Select Item Supplier', 10, 'Available'),
(64, '', 'EMULSION 4LTR', 'Wall Paint', '450', 0, 'Select Item Supplier', 5, 'Available'),
(65, '20171120171117331117', 'GLOSS PAINT 20LTR', 'Wall Paint', '3500', 2600, 'Crown premium Paint', 12, 'Available'),
(66, '', 'GLOSS PAINT 4LTR', 'Wall Paint', '750', 0, 'Select Item Supplier', 20, 'Available'),
(67, '', 'GLOSS PAINT 1LTR', 'Wall Paint', '300', 0, 'Select Item Supplier', 47, 'Available'),
(68, '', 'GLOSS PAINT 0.5LTR', 'Wall Paint', '180', 0, 'Select Item Supplier', 20, 'Available'),
(69, '', 'GLOSS PAINT 0.25LTR', 'Wall Paint', '100', 0, 'Select Item Supplier', 15, 'Available'),
(70, '', 'TARPENTINE 5TR', 'Wall Paint', '750', 0, 'Select Item Supplier', 1, 'Available'),
(71, '', 'TURPENTINE 1LTR', 'Wall Paint', '200', 0, 'Select Item Supplier', 10, 'Available'),
(72, '', 'TURPENTINE 0.5LTR', 'Wall Paint', '150', 0, 'Select Item Supplier', 10, 'Available'),
(73, '', 'STD THINNER 5LTR ', 'Wall Paint', '1500', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(74, '', 'STD THINNER 1LTR ', 'Wall Paint', '300', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(75, '', 'STD THINNER 0.5 LTR ', 'Wall Paint', '150', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(76, '', 'PREMIUM PUTTY', 'Select Item Cartegory', '100', 0, 'Select Item Supplier', 20, 'Available'),
(77, '20081120081108361108', 'PVC POLYTHENE 1000G', 'Select Item Cartegory', '100', 0, 'Taj Hardware', 240, 'Available'),
(78, '', 'PVC POLYTHENE 500G', 'Select Item Cartegory', '250', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(79, '', 'WEIGHING SCALE HANSON 100KG ', 'Select Item Cartegory', '2400', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(80, '', 'WEIGHING SCALE HANSHA 100KG ', 'Select Item Cartegory', '2000', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(81, '', 'WEIGHING SCALE ZING', 'Select Item Cartegory', '8000', 0, 'Select Item Supplier', 0, 'Out of Stoke'),
(89, '4564564', 'SPARKO GRAY ADHESIVE 200G', 'Construction tools & Materials', '300', 150, 'Select Item Supplier', 15, 'Available'),
(91, '01122002432912', 'Prunning Saw', '34', '650', 250, 'Taj Hardware', 15, 'Available'),
(92, '01122002243112', 'Shovel', '38', '450', 300, 'Taj Hardware', 12, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `Product_Category`
--

CREATE TABLE `Product_Category` (
  `id` int(11) NOT NULL,
  `category_description` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product_Category`
--

INSERT INTO `Product_Category` (`id`, `category_description`, `status`) VALUES
(1, 'Glue', 'Available'),
(31, 'Oil', 'Available'),
(32, 'Cement', 'Available'),
(33, 'Wall Paint', 'Available'),
(34, 'Construction tools & Materials', 'Available'),
(35, 'Plumping Tools and Equipment', 'Available'),
(36, 'Nuts and Bolts', 'Available'),
(37, 'Nails', 'Available'),
(38, 'Garden Tools', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `Product_Quantity`
--

CREATE TABLE `Product_Quantity` (
  `product_name` int(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product_Quantity`
--

INSERT INTO `Product_Quantity` (`product_name`, `qty`, `status`) VALUES
(121, 22, 'Available'),
(122, 24, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL DEFAULT current_timestamp(),
  `cart_details` text NOT NULL,
  `qty` varchar(110) NOT NULL,
  `refno` text NOT NULL,
  `pmeth` text NOT NULL,
  `mpesacode` text NOT NULL,
  `total` text NOT NULL,
  `slpn` text NOT NULL,
  `customer` text NOT NULL,
  `pno` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id`, `date`, `cart_details`, `qty`, `refno`, `pmeth`, `mpesacode`, `total`, `slpn`, `customer`, `pno`, `status`) VALUES
(273, '11/ 30/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->								 			', '1', '301120-10113111', 'Cash', 'null', '550', 'Admin', 'Walk-in Customer', '', 'Paid'),
(274, '11/ 30/ 2020', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1.5 | Subtotal:210.00  |   <-------------->																																	 |  Item name: Bed Bolts and Washers | Price: 40.00 | Qty:4 | Subtotal:160.00  |   <-------------->								 			', '2', '301120-10113311', 'M-pesa', 'MH5G3TR4N5P3#', '370', 'Admin', 'Walk-in Customer', '', 'Paid'),
(275, '12/ 01/ 2020', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1 | Subtotal:140.00  |   <-------------->																																	 |  Item name: Superglue | Price: 30.00 | Qty:1 | Subtotal:30.00  |   <-------------->								 			', '2', '011220-10123912', 'Cash', 'null', '170', 'Admin', 'Walk-in Customer', '', 'Paid'),
(276, '12/ 01/ 2020', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1 | Subtotal:140.00  |   <-------------->																																	 |  Item name: Superglue | Price: 30.00 | Qty:1 | Subtotal:30.00  |   <-------------->								 			', '2', '011220-10124012', 'Cash', 'null', '170', 'Admin', 'Walk-in Customer', '', 'Paid'),
(277, '12/ 01/ 2020', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1 | Subtotal:140.00  |   <-------------->																																	 |  Item name: Superglue | Price: 30.00 | Qty:1 | Subtotal:30.00  |   <-------------->								 			', '2', '011220-11121112', 'Cash', 'null', '170', 'Admin', 'Walk-in Customer', '', 'Paid'),
(285, '12/ 01/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->								 			', '1', '011220-01122712', 'Cash', 'null', '550', 'Mark Khan', 'Walk-in Customer', '', 'Paid'),
(288, '12/ 01/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->								 			', '1', '011220-02122812', 'M-pesa', 'IH0V5B64GKP3#', '550', 'Admin', 'Walk-in Customer', '', 'Paid'),
(289, '12/ 01/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:4 | Subtotal:2,200.00  |   <-------------->																																	 |  Item name: DUMUZAS 2.5M | Price: 650.00 | Qty:5 | Subtotal:3,250.00  |   <-------------->																																	 |  Item name: DUMUZAS RIDGES | Price: 230.00 | Qty:4 | Subtotal:920.00  |   <-------------->								 			', '3', '011220-02123612', 'M-pesa', 'S3EFG6JHK24J', '6370', 'Markhan', 'Walk-in Customer', '', 'Paid'),
(290, '12/ 06/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->								 			', '1', '061220-01124312', 'M-pesa', 'DH7GHJYU7MO45', '550', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(291, '12/ 07/ 2020', '																														 |  Item name: BARBED WIRE 610M | Price: 4,200.00 | Qty:1 | Subtotal:4,200.00  |   <-------------->								 			', '1', '071220-09125212', 'M-pesa', 'G42#UHT9KJ$HFS', '4200', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(292, '12/ 07/ 2020', '																														 |  Item name: BARBED WIRE 610M | Price: 4,200.00 | Qty:1 | Subtotal:4,200.00  |   <-------------->								 			', '1', '071220-09125212', 'M-pesa', 'G42#UHT9KJ$HFS', '4200', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(293, '12/ 10/ 2020', '																														 |  Item name: DUMUZAS 2.5M | Price: 650.00 | Qty:1 | Subtotal:650.00  |   <-------------->								 			', '1', '101220-12124012', 'M-pesa', 'SFGRFTHT5J35', '650', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(294, '12/ 10/ 2020', '																														 |  Item name: Superglue | Price: 30.00 | Qty:1 | Subtotal:30.00  |   <-------------->																																	 |  Item name: Bed Bolts and Washers | Price: 40.00 | Qty:1 | Subtotal:40.00  |   <-------------->								 			', '2', '101220-12124112', 'Cash', 'null', '70', 'Admin', 'Walk-in Customer', 'null', 'Paid'),
(296, '12/ 10/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->																																	 |  Item name: DUMUZAS RIDGES | Price: 230.00 | Qty:1 | Subtotal:230.00  |   <-------------->								 			', '2', '101220-12125112', 'M-pesa', 'S3EFG6JHK24J', '780', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(297, '12/ 10/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->																																	 |  Item name: DUMUZAS RIDGES | Price: 230.00 | Qty:1 | Subtotal:230.00  |   <-------------->								 			', '2', '101220-12125212', 'M-pesa', 'DH7GHJYU7MO45', '780', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(298, '12/ 10/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->																																	 |  Item name: DUMUZAS RIDGES | Price: 230.00 | Qty:1 | Subtotal:230.00  |   <-------------->								 			', '2', '101220-12125712', 'M-pesa', 'G42#UHT9KJ$HFS', '780', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(303, '12/ 17/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->								 			', '1', '171220-03125812', 'M-pesa', 'MH5G3TR4N5P3#', '550', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(304, '01/ 01/ 2121', '																														 |  Item name: DUMUZAS 3M | Price: 750.00 | Qty:1 | Subtotal:750.00  |   <-------------->								 			', '1', '010121-0101191', 'M-pesa', 'MH5G3TR4N5P3#', '750', 'Admin', 'Walk-in Customer', '0724562314', 'Paid to collect'),
(305, '01/ 01/ 2121', '																														 |  Item name: DUMUZAS 3M | Price: 750.00 | Qty:1 | Subtotal:750.00  |   <-------------->								 			', '1', '010121-0101191', 'M-pesa', 'MH5G3TR4N5P3#', '750', 'Admin', 'Walk-in Customer', '0724562314', 'Paid to collect'),
(306, '01/ 02/ 2121', '																														 |  Item name: Thinner 5ltr | Price: 750.00 | Qty:1 | Subtotal:750.00  |   <-------------->								 			', '1', '020121-1101211', 'M-pesa', 'MH5G3TR4N5P3#', '750', 'Admin', 'Walk-in Customer', '0724562314', 'Paid to collect'),
(307, '01/ 03/ 2121', '																														 |  Item name: NYUMBA RIDGES | Price: 180.00 | Qty:5 | Subtotal:900.00  |   <-------------->								 			', '1', '030121-1201151', 'Cash', 'Cash', '900', 'Markhan', 'Walk-in Customer', 'Null', 'Paid'),
(308, '01/ 03/ 2121', '																														 |  Item name: NYUMBA RIDGES | Price: 180.00 | Qty:1 | Subtotal:180.00  |   <-------------->								 			', '1', '030121-1201161', 'Cash', 'Cash', '180', 'Markhan', 'Walk-in Customer', 'Null', 'Not Paid'),
(309, '01/ 04/ 2121', '																														 |  Item name: nyumba 3M | Price: 700.00 | Qty:1 | Subtotal:700.00  |   <-------------->								 			', '1', '040121-0201531', 'M-pesa', 'MRJ443HS432DJ', '700', 'Admin', 'Walk-in Customer', '01113356334', 'Paid'),
(310, '01/ 06/ 2121', '																														 |  Item name: United paints White 1/2 | Price: 150.00 | Qty:1 | Subtotal:150.00  |   <-------------->								 			', '1', '060121-0801491', 'Cash', 'null', '150', 'me', 'Walk-in Customer', '0790714621', 'Not Paid'),
(311, '01/ 07/ 2121', '																														 |  Item name: Superglue | Price: 30.00 | Qty:1 | Subtotal:30.00  |   <-------------->								 			', '1', '070121-0901341', 'M-pesa', 'MRJ443HS432DJ', '30', 'Admin', 'Walk-in Customer', '01113356334', 'Paid'),
(312, '01/ 26/ 2121', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1 | Subtotal:140.00  |   <-------------->								 			', '1', '260121-1201251', 'Cash', 'null', '140', 'Admin', 'Walk-in Customer', '0724562314', 'Paid'),
(313, '01/ 29/ 2121', '																														 |  Item name: Superglue | Price: 30.00 | Qty:1 | Subtotal:30.00  |   <-------------->								 			', '1', '290121-1201061', 'Cash', 'null', '30', 'Admin', 'Walk-in Customer', '0790714621', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `saved_cart`
--

CREATE TABLE `saved_cart` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `cart_details` text NOT NULL,
  `refno` text NOT NULL,
  `slpasn` text NOT NULL,
  `total` text NOT NULL,
  `status` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session_activity_log`
--

CREATE TABLE `session_activity_log` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `info` text NOT NULL,
  `status` text NOT NULL,
  `sid` text NOT NULL,
  `user_name` text NOT NULL,
  `account_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_activity_log`
--

INSERT INTO `session_activity_log` (`id`, `date`, `info`, `status`, `sid`, `user_name`, `account_type`) VALUES
(7, 'Tue, 01 Dec 2020 14:13:41 +0100', 'Markhan', 'Loged in', '15', 'Markhan', 'Cashier'),
(8, 'Tue, 01 Dec 2020 14:20:28 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(9, 'Tue, 01 Dec 2020 14:20:48 +0100', 'Successfuly', 'Loged out', '1', 'Admin', 'Administrator'),
(10, 'Tue, 01 Dec 2020 14:22:03 +0100', 'Successfuly', 'Loged in', '15', 'Markhan', 'Cashier'),
(11, 'Tue, 01 Dec 2020 14:25:39 +0100', 'Successfuly', 'Loged out', '15', 'Markhan', 'Cashier'),
(12, 'Tue, 01 Dec 2020 14:27:38 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(13, 'Tue, 01 Dec 2020 14:34:25 +0100', 'Successfuly', 'Loged out', '1', 'Admin', 'Administrator'),
(14, 'Tue, 01 Dec 2020 14:35:09 +0100', 'Successfuly', 'Loged in', '15', 'Markhan', 'Cashier'),
(15, 'Tue, 01 Dec 2020 14:37:40 +0100', 'Successfuly', 'Loged out', '15', 'Markhan', 'Cashier'),
(16, 'Tue, 01 Dec 2020 14:39:19 +0100', 'Successfuly', 'Loged in', '15', 'Markhan', 'Cashier'),
(17, 'Tue, 01 Dec 2020 14:42:33 +0100', 'Paid', 'Sales record updated', '289', 'Markhan', 'Cashier'),
(18, 'Sun, 06 Dec 2020 13:37:19 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(19, 'Mon, 07 Dec 2020 09:51:43 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(20, 'Mon, 07 Dec 2020 09:51:43 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(21, 'Mon, 07 Dec 2020 09:51:43 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(22, 'Thu, 10 Dec 2020 12:38:14 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(23, 'Wed, 16 Dec 2020 11:04:18 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(24, 'Wed, 16 Dec 2020 11:04:18 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(25, 'Thu, 17 Dec 2020 13:32:56 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(26, 'Thu, 17 Dec 2020 13:45:53 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(27, 'Thu, 17 Dec 2020 14:37:45 +0100', 'Successfuly', 'Loged out', '1', 'Admin', 'Administrator'),
(28, 'Thu, 17 Dec 2020 14:38:10 +0100', 'Successfuly', 'Loged in', '15', 'Markhan', 'Cashier'),
(29, 'Thu, 17 Dec 2020 14:38:37 +0100', 'Successfuly', 'Loged out', '15', 'Markhan', 'Cashier'),
(30, 'Thu, 17 Dec 2020 14:38:44 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(31, '12/ 17/ 2020', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1 | Subtotal:140.00  |   <-------------->								 			', 'Deleted Sale Order', '302', 'johndoe', 'Administrator'),
(32, '12/ 17/ 2020', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1 | Subtotal:140.00  |   <-------------->								 			', 'Deleted Sale Order', '301', 'Admin', 'Administrator'),
(33, '12/ 17/ 2020', '																														 |  Item name: DUMUZAS 2M | Price: 550.00 | Qty:1 | Subtotal:550.00  |   <-------------->																																	 |  Item name: DUMUZAS RIDGES | Price: 230.00 | Qty:1 | Subtotal:230.00  |   <-------------->								 			', 'Deleted Sale Order', '299', 'Admin', 'Administrator'),
(34, '12/ 17/ 2020', '																														 |  Item name: United paints White 1/2 | Price: 150.00 | Qty:1 | Subtotal:150.00  |   <-------------->																																	 |  Item name: United paints White 1ltr | Price: 300.00 | Qty:1 | Subtotal:300.00  |   <-------------->								 			', 'Deleted Sale Order', '295', 'Admin', 'Administrator'),
(35, 'Thu, 17 Dec 2020 15:52:38 +0100', '																														 |  Item name: ORDINARY NAILS 1INCH | Price: 140.00 | Qty:1 | Subtotal:140.00  |   <-------------->								 			', 'Deleted Sale Order', '300', 'Admin', 'Administrator'),
(36, 'Thu, 17 Dec 2020 15:56:48 +0100', 'Successfuly', 'Loged out', '1', 'Admin', 'Administrator'),
(37, 'Thu, 17 Dec 2020 15:57:58 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(38, 'Fri, 18 Dec 2020 11:08:25 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(39, 'Fri, 18 Dec 2020 11:08:25 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(40, 'Sat, 19 Dec 2020 10:05:04 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(41, 'Sun, 20 Dec 2020 12:49:19 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(42, 'Wed, 23 Dec 2020 08:16:44 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(43, 'Tue, 29 Dec 2020 11:28:44 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(44, 'Fri, 01 Jan 2021 13:19:06 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(45, 'Sat, 02 Jan 2021 11:20:55 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(46, 'Sat, 02 Jan 2021 14:31:37 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(47, 'Sun, 03 Jan 2021 11:58:00 +0100', 'Successfuly', 'Loged in', '15', 'Markhan', 'Cashier'),
(48, 'Sun, 03 Jan 2021 13:13:09 +0100', 'Successfuly', 'Loged out', '15', 'Markhan', 'Cashier'),
(49, 'Sun, 03 Jan 2021 13:13:20 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(50, 'Mon, 04 Jan 2021 14:33:11 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(51, 'Wed, 06 Jan 2021 08:17:44 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(52, 'Wed, 06 Jan 2021 08:35:33 +0100', 'Successfuly', 'Loged out', '1', 'Admin', 'Administrator'),
(53, 'Wed, 06 Jan 2021 08:35:44 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(54, 'Wed, 06 Jan 2021 08:42:32 +0100', 'Successfuly', 'Loged out', '1', 'Admin', 'Administrator'),
(55, 'Wed, 06 Jan 2021 08:42:39 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(56, 'Thu, 07 Jan 2021 09:22:38 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(57, 'Thu, 07 Jan 2021 10:22:31 +0100', 'Successfuly', 'Loged out', '1', 'Admin', 'Administrator'),
(58, 'Thu, 07 Jan 2021 10:23:22 +0100', 'Successfuly', 'Loged in', '15', 'Markhan', 'Cashier'),
(59, 'Thu, 07 Jan 2021 10:31:11 +0100', 'Successfuly', 'Loged out', '15', 'Markhan', 'Cashier'),
(60, 'Thu, 07 Jan 2021 10:31:17 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(61, 'Sat, 09 Jan 2021 09:33:05 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(62, 'Tue, 26 Jan 2021 11:18:10 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(63, 'Fri, 29 Jan 2021 12:05:41 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator'),
(64, 'Mon, 01 Feb 2021 09:30:32 +0100', 'Successfuly', 'Loged in', '1', 'Admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `shopdetails`
--

CREATE TABLE `shopdetails` (
  `sid` int(11) NOT NULL,
  `sname` text NOT NULL,
  `location` text NOT NULL,
  `address` text NOT NULL,
  `contacts` text NOT NULL,
  `email` text NOT NULL,
  `category` text NOT NULL,
  `particulars` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopdetails`
--

INSERT INTO `shopdetails` (`sid`, `sname`, `location`, `address`, `contacts`, `email`, `category`, `particulars`, `status`) VALUES
(1, 'Wholesale', '00 - 90300', '90300 Wote Makueni Kenya', '+254790714621', 'hastingsmumo@gmail.com', 'Wholesale', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`id`, `name`, `location`, `contact`) VALUES
(1, 'Taj Hardware', 'Nairobi', '2025786345'),
(2, 'Sawla', '+254790714621', '90300 Nairobi'),
(3, 'Hari Krupa', '4524523453453', 'Nairobi'),
(5, 'Bamburi Cement Ltd', '+254790714621', '90100 Nairobi'),
(6, 'Nyumba Cement LTD', '+254790714621', '90300 Nairobi'),
(7, 'Crown premium Paint', '+254790714621', 'Nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_token_auth`
--

CREATE TABLE `tbl_token_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT 0,
  `expiry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `totaldayearn`
--

CREATE TABLE `totaldayearn` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `total` text DEFAULT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totaldayearn`
--

INSERT INTO `totaldayearn` (`id`, `date`, `total`, `status`) VALUES
(144, '2020-11-30', '9120 ', 'Closed'),
(145, '2020-12-01', '1610 ', 'Closed'),
(146, '2020-12-10', '7120 ', 'Closed'),
(147, '2020-12-16', '1410 ', 'Closed'),
(148, '2020-12-17', '2180', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `passord` varchar(100) NOT NULL,
  `usertype` text NOT NULL,
  `shopname` text NOT NULL,
  `active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `passord`, `usertype`, `shopname`, `active`) VALUES
(1, 'Hastings', 'Mulu', 'hastingsmumo@gmail.com', 'Admin', '$2y$10$tW.9UDzqxoCB8iU3pPfOLOjKgDNQPU7xgTEc/5/XGg3XF0Ak4ntj6', 'Administrator', 'Sample Hardware Shop', 'Active'),
(15, 'Mark ', 'Khan', 'markhan@gmail.com', 'Markhan', '$2y$10$YCeq2atvKTnMOMqLs4Zgb.HmvQOPuwLEG3M3pRWfViHKc0S0827Wa', 'Cashier', 'Hardware Shop', 'Active'),
(16, 'John', 'Doe', 'johndoe@gmail.com', 'johndoe', '$2y$10$ph1C5t7IXEz519lLQzw87OPnesTR/Tf84P7k5AO.iweuNwzGOJDlK', 'Administrator', 'Hardware Shop', 'Deactivated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `closeday`
--
ALTER TABLE `closeday`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `custemers`
--
ALTER TABLE `custemers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `misc`
--
ALTER TABLE `misc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product_Category`
--
ALTER TABLE `Product_Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product_Quantity`
--
ALTER TABLE `Product_Quantity`
  ADD PRIMARY KEY (`product_name`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved_cart`
--
ALTER TABLE `saved_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_activity_log`
--
ALTER TABLE `session_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopdetails`
--
ALTER TABLE `shopdetails`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totaldayearn`
--
ALTER TABLE `totaldayearn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `closeday`
--
ALTER TABLE `closeday`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custemers`
--
ALTER TABLE `custemers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `misc`
--
ALTER TABLE `misc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `Product_Category`
--
ALTER TABLE `Product_Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `saved_cart`
--
ALTER TABLE `saved_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `session_activity_log`
--
ALTER TABLE `session_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `shopdetails`
--
ALTER TABLE `shopdetails`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `totaldayearn`
--
ALTER TABLE `totaldayearn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
