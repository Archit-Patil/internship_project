CREATE TABLE `labs` (
  `lab_id` varchar(10) PRIMARY KEY,
  `lab_name` varchar(50),
  `description` text,
  `date` date,
  `quantity` int,
  `unit_cost` decimal,
  `ammount` decimal
);

CREATE TABLE `mapping_table` (
  `computer_id` varchar(10),
  `laptop_id` varchar(10),
  `projector_id` varchar(10),
  `printer_id` varchar(10),
  `user_id` varchar(10),
  `lab_id` varchar(10),
  `date` date,
  `mode` boolean
);

CREATE TABLE `computer` (
  `computer_id` varchar(10) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `laptop` (
  `laptop_id` varchar(10) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `printer` (
  `printer_id` varchar(10) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `projector` (
  `projector_id` varchar(10) PRIMARY KEY,
  `description` text,
  `date_of_purchase` date,
  `bill_no` varchar(255),
  `gi_no` varchar(255),
  `asset_code` varchar(255),
  `working` boolean
);

CREATE TABLE `user` (
  `user_id` varchar(10) PRIMARY KEY,
  `user_name` varchar(50),
  `email` varchar(100),
  `password` varchar(255)
);

ALTER TABLE `computer` ADD FOREIGN KEY (`computer_id`) REFERENCES `mapping_table` (`computer_id`);

ALTER TABLE `laptop` ADD FOREIGN KEY (`laptop_id`) REFERENCES `mapping_table` (`laptop_id`);

ALTER TABLE `projector` ADD FOREIGN KEY (`projector_id`) REFERENCES `mapping_table` (`projector_id`);

ALTER TABLE `printer` ADD FOREIGN KEY (`printer_id`) REFERENCES `mapping_table` (`printer_id`);

ALTER TABLE `labs` ADD FOREIGN KEY (`lab_id`) REFERENCES `mapping_table` (`printer_id`);

ALTER TABLE `mapping_table` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
