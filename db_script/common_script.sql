### user login ===========================
CREATE TABLE login_user(
	`id` int(6) NOT NULL AUTO_INCREMENT,
	`emp_id` varchar(150) DEFAULT NULL,
	`name` varchar(50) DEFAULT NULL,
	`password` varchar(200) DEFAULT NULL,
	`user_type` enum('Admin','Master User','Sub User') DEFAULT 'Sub User',
	`user_status` enum('Active','Deactive') DEFAULT 'Active',
	`added_by` varchar(150) DEFAULT NULL,
	`added_on` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	UNIQUE KEY `emp_id`(`emp_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `login_user` (`emp_id`, `name`, `password`, `user_type`) VALUES ('admin', 'Admin', 'elROK1JIUHRLNTd5aTI1UXREeEtDdz09', 'Admin');
 
 CREATE TABLE `tblprofiles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROFILEID` varchar(20) NOT NULL,
  `ADDED DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 


 



 