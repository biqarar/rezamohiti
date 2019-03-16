-- multi_query

DROP TABLE `users`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `displayname` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `verifymobile` bit(1) DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `verifyemail` bit(1) DEFAULT NULL,
  `status` enum('active','awaiting','deactive','removed','filter','unreachable') DEFAULT 'awaiting',
  `avatar` varchar(2000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `permission` varchar(1000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datemodified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `pin` smallint(4) UNSIGNED DEFAULT NULL,
  `ref` int(10) UNSIGNED DEFAULT NULL,
  `twostep` bit(1) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `unit_id` smallint(5) DEFAULT NULL,
  `language` char(2) DEFAULT NULL,
  `meta` mediumtext CHARACTER SET utf8mb4,
  `website` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `twitter` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `instagram` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `linkedin` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gmail` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `sidebar` bit(1) DEFAULT NULL,
  `firstname` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `bio` text CHARACTER SET utf8mb4,
  `forceremember` bit(1) DEFAULT NULL,
  `signature` text CHARACTER SET utf8mb4,
  `father` varchar(100) DEFAULT NULL,
  `nationalcode` varchar(50) DEFAULT NULL,
  `nationality` varchar(5) DEFAULT NULL,
  `pasportcode` varchar(50) DEFAULT NULL,
  `pasportdate` varchar(20) DEFAULT NULL,
  `marital` enum('single','married') DEFAULT NULL,
  `foreign` bit(1) DEFAULT NULL,
  `phone` varchar(1000) DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `displayname`, `gender`, `title`, `password`, `mobile`, `verifymobile`, `email`, `verifyemail`, `status`, `avatar`, `parent`, `permission`, `type`, `datecreated`, `datemodified`, `pin`, `ref`, `twostep`, `birthday`, `unit_id`, `language`, `meta`, `website`, `facebook`, `twitter`, `instagram`, `linkedin`, `gmail`, `sidebar`, `firstname`, `lastname`, `bio`, `forceremember`, `signature`, `father`, `nationalcode`, `nationality`, `pasportcode`, `pasportdate`, `marital`, `foreign`, `phone`, `detail`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '989109610612', NULL, NULL, NULL, 'awaiting', NULL, NULL, 'supervisor', NULL, '2019-03-16 08:37:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_search_mobile` (`mobile`),
  ADD KEY `index_search_nationalcode` (`nationalcode`),
  ADD KEY `index_search_pasportcode` (`pasportcode`),
  ADD KEY `index_search_email` (`email`),
  ADD KEY `index_search_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
