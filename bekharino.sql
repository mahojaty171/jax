-- ساخت دیتابیس
CREATE DATABASE IF NOT EXISTS bekharino;
USE bekharino;

-- ساخت جدول محصولات
CREATE TABLE IF NOT EXISTS `products` (
  `ID` INT AUTO_INCREMENT PRIMARY KEY,
  `ProductName` VARCHAR(255) NOT NULL,
  `Brand` VARCHAR(255) NOT NULL,
  `Model` VARCHAR(255) NOT NULL,
  `EnergyConsumption` VARCHAR(100) NOT NULL,
  `Warranty` INT DEFAULT NULL,
  `Price` DECIMAL(15, 2) NOT NULL,
  `Dimensions` VARCHAR(100) DEFAULT NULL,
  `Weight` FLOAT DEFAULT NULL,
  `ImageURL` VARCHAR(255) DEFAULT NULL,
  `CreatedAt` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- افزودن چند محصول نمونه
INSERT INTO `products` 
(`ProductName`, `Brand`, `Model`, `EnergyConsumption`, `Warranty`, `Price`, `Dimensions`, `Weight`, `ImageURL`)
VALUES
('ماشین لباس‌شویی', 'سامسونگ', 'WF45R6100AP', 'A++', 12, 5000000.00, '60x85x60', 6.5, 'images/1.png'),
('یخچال', 'ال‌جی', 'GR-B247SLUV', 'A+', 24, 8000000.00, '70x180x75', 12.0, 'images/1.png');
