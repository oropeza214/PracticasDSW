-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for proyectoweb
CREATE DATABASE IF NOT EXISTS `proyectoweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `proyectoweb`;

-- Dumping structure for table proyectoweb.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `Nombre` varchar(50) NOT NULL,
  `ApePaterno` varchar(50) NOT NULL,
  `ApeMaterno` varchar(50) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Ciudad_Actual` varchar(50) NOT NULL,
  `Ciudad_Viaje` varchar(50) NOT NULL,
  `Talla_Camisa` varchar(10) NOT NULL,
  `ID_Registro` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_Registro`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table proyectoweb.registros: ~6 rows (approximately)
INSERT INTO `registros` (`Nombre`, `ApePaterno`, `ApeMaterno`, `Edad`, `Telefono`, `Genero`, `Ciudad_Actual`, `Ciudad_Viaje`, `Talla_Camisa`, `ID_Registro`) VALUES
	('BRANDON', 'OROPEZA', 'QUINONEZ', 23, '6641234567', 'MASCULINO', 'TIJUANA', 'RESERVA RIO CLARO', 'S', 1),
	('BRANDON', 'OROPEZA', 'QUINONEZ', 23, '6641234567', 'MASCULINO', 'TIJUANA', 'RESERVA RIO CLARO', 'S', 2),
	('BRANDON', 'OROPEZA', 'QUINONEZ', 23, '6641234567', 'MASCULINO', 'TIJUANA', 'RESERVA RIO CLARO', 'S', 3),
	('PEDRO', 'PEREZ', 'PEREZ', 55, '6643215647', 'MASCULINO', 'TECATE', 'RESERVA RIO CLARO', 'NINGUNA', 4),
	('PEDRO', 'PEREZ', 'PEREZ', 55, '6643215647', 'MASCULINO', 'TECATE', 'RESERVA RIO CLARO', 'NINGUNA', 5),
	('ASDSAD', 'SAFDS ', 'SDFDSFWE', 60, '66423145864', 'FEMENINO', 'EFEWFEW', 'COMUNA 13', 'XXL', 6);

-- Dumping structure for table proyectoweb.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Contrasena` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table proyectoweb.usuarios: ~0 rows (approximately)
INSERT INTO `usuarios` (`Id`, `Usuario`, `Contrasena`) VALUES
	(1, 'admin', 'admin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
