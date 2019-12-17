CREATE TABLE `labs` (
  `sr_no` int AUTO_INCREMENT,
  `lab_id` varchar(255) PRIMARY KEY,
  `lab_name` varchar(255),
  `description` text,
  `date` date,
  `quantity` int,
  `unit_cost` decimal,
  `ammount` decimal
);

CREATE TABLE `master_table` (
  `sr_no` int AUTO_INCREMENT,
  `computer_id` varchar(255),
  `laptop_id` varchar(255),
  `projector_id` varchar(255),
  `printer_id` varchar(255),
  `user_id` int,
  `date` date,
  `mode` boolean
);

CREATE TABLE `computer` (
  `sr_no` int AUTO_INCREMENT,
  `computer_id` varchar(255) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `laptop` (
  `sr_no` int AUTO_INCREMENT,
  `laptop_id` varchar(255) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `printer` (
  `sr_no` int AUTO_INCREMENT,
  `printer_id` varchar(255) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `projector` (
  `sr_no` int AUTO_INCREMENT,
  `projector_id` varchar(255) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `user` (
  `user_id` int PRIMARY KEY AUTO_INCREMENT,
  `user_name` varchar(255),
  `email` varchar(255),
  `password` varchar(255)
);

ALTER TABLE `computer` ADD FOREIGN KEY (`computer_id`) REFERENCES `master_table` (`computer_id`);

ALTER TABLE `laptop` ADD FOREIGN KEY (`laptop_id`) REFERENCES `master_table` (`laptop_id`);

ALTER TABLE `projector` ADD FOREIGN KEY (`projector_id`) REFERENCES `master_table` (`projector_id`);

ALTER TABLE `printer` ADD FOREIGN KEY (`printer_id`) REFERENCES `master_table` (`printer_id`);

ALTER TABLE `master_table` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
