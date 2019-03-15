CREATE TABLE `food` (
`id` int(10) UNSIGNED NOT NULL auto_increment,
`user_id` int(10) UNSIGNED not NULL,
`datetime` datetime NULL DEFAULT NULL,
`title` varchar(200)  CHARACTER SET utf8mb4 NULL DEFAULT NULL ,
`subtitle` varchar(200)  CHARACTER SET utf8mb4 NULL DEFAULT NULL ,
`cat` varchar(200)  CHARACTER SET utf8mb4 NULL DEFAULT NULL ,
`cat2` varchar(200)  CHARACTER SET utf8mb4 NULL DEFAULT NULL ,
`size` varchar(200)  CHARACTER SET utf8mb4 NULL DEFAULT NULL ,
`desc` text  CHARACTER SET utf8mb4 NULL DEFAULT NULL ,
`image` text  CHARACTER SET utf8mb4 NULL DEFAULT NULL ,
`status` enum('enable', 'disable', 'awaiting', 'deleted', 'review', 'filter')  NULL DEFAULT NULL,
`datecreated` datetime  NOT NULL DEFAULT CURRENT_TIMESTAMP,
`datemodified` datetime  NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


