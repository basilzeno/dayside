CREATE DATABASE problems_book;

USE problems_book;



CREATE TABLE `tasks` (
 `username` varchar(25) NOT NULL,
 `email` varchar(50) NOT NULL,
 `image_path` varchar(400) NOT NULL,
 `status` tinyint(1) NOT NULL,
 `taskText` varchar(400) DEFAULT NULL,
 `id` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


	
CREATE TABLE `users` (
 `userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `username` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `email` varchar(80) NOT NULL,
 `role` varchar(20) DEFAULT NULL,
 PRIMARY KEY (`userID`),
 UNIQUE KEY `indx_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



INSERT INTO `users`(`userID`, `username`, `password`, `email`, `role`) VALUES (1,'admin','123',88888888,'admin')