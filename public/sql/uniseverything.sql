--
-- Database: `user-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL,
    `email` varchar(200) NOT NULL,
    `fullname` varchar(200) NOT NULL,
    `password` varchar(60) NOT NULL,
    `phone` varchar(100) NOT NULL,
    `type` int(1) NOT NULL DEFAULT 0,
    `address` text,
    `photo` varchar(200),
    `status` int(1) NOT NULL DEFAULT 0,
    `activate_code` varchar(15) NOT NULL,
    `reset_code` varchar(15),
    `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Uniseverything Women', 'uniseverything_women'),
(2, 'Uniseverything Men', 'uniseverything_men'),
(3, 'Uniseverything Acessories', 'uniseverything_accessories'),
(4, 'Uniseverything Beauty & Cosmetics', 'uniseverything_beauty'),
(5, 'Uniseverything Home Utensils', 'uniseverything_home'),
(6, 'Uniseverything Kids', 'uniseverything_kids');


ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

