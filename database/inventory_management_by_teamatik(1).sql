-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2019 pada 07.23
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management_by_teamatik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_system`
--

CREATE TABLE `admin_system` (
  `id_admin` varchar(15) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(15) NOT NULL,
  `admin_contact` int(12) NOT NULL,
  `admin_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_system`
--

INSERT INTO `admin_system` (`id_admin`, `admin_name`, `admin_pass`, `admin_contact`, `admin_address`) VALUES
('1', 'admin', 'admin', 1234567890, 'teamatik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barcode`
--

CREATE TABLE `barcode` (
  `id_barcode` varchar(15) NOT NULL,
  `id_product` varchar(15) NOT NULL,
  `id_employees` varchar(15) NOT NULL,
  `id_supplier` varchar(15) NOT NULL,
  `id_owner` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id_employees` int(11) NOT NULL,
  `employees_name` varchar(255) NOT NULL,
  `employees_department` varchar(30) NOT NULL,
  `employees_address` varchar(50) NOT NULL,
  `employees_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id_employees`, `employees_name`, `employees_department`, `employees_address`, `employees_contact`) VALUES
(1, 'V', '', '', ''),
(2, 'Koi', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` varchar(15) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `id_supplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `id_owner` varchar(15) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `id_employees` varchar(15) NOT NULL,
  `id_product` varchar(15) NOT NULL,
  `waktu_peminjaman` date NOT NULL,
  `waktu_pengambilan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` varchar(15) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(15) NOT NULL,
  `product_price` int(30) NOT NULL,
  `date_encode` date NOT NULL,
  `date_recorded` date NOT NULL,
  `date_expired` date NOT NULL,
  `product_qty` int(11) NOT NULL,
  `id_supplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_category`, `product_price`, `date_encode`, `date_recorded`, `date_expired`, `product_qty`, `id_supplier`) VALUES
('1', 'Mouse Logitech', '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, ''),
('6', 'Bangku', '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, ''),
('7', 'Monitor', '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, ''),
('8', 'Printer', '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(15) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `supplier_contact` int(12) NOT NULL,
  `supplier_address` varchar(50) NOT NULL,
  `id_invoice` varchar(15) NOT NULL,
  `id_product` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_system`
--
ALTER TABLE `admin_system`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id_barcode`);

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employees`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employees` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
