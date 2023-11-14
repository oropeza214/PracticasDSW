-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 08, 2023 at 03:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `libros`
--

CREATE TABLE `libros` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Autor` varchar(100) DEFAULT NULL,
  `AnoPublicacion` int(11) DEFAULT NULL,
  `Genero` varchar(50) DEFAULT NULL,
  `Editorial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libros`
--

INSERT INTO `libros` (`ID`, `Titulo`, `Autor`, `AnoPublicacion`, `Genero`, `Editorial`) VALUES
(1, 'La sombra del viento', 'Carlos Ruiz Zafón', 2001, 'Novela', 'Planeta'),
(2, 'Cien años de soledad', 'Gabriel García Márquez', 1967, 'Realismo mágico', 'Sudamericana'),
(3, 'El código Da Vinci', 'Dan Brown', 2003, 'Misterio', 'Umbriel'),
(4, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 1605, 'Novela', 'No disponible'),
(5, '1984', 'George Orwell', 1949, 'Distopía', 'Secker & Warburg');

-- --------------------------------------------------------

--
-- Table structure for table `prestamos`
--

CREATE TABLE `prestamos` (
  `ID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `LibroID` int(11) DEFAULT NULL,
  `FechaPrestamo` date DEFAULT NULL,
  `FechaDevolucion` date DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestamos`
--

INSERT INTO `prestamos` (`ID`, `UsuarioID`, `LibroID`, `FechaPrestamo`, `FechaDevolucion`, `Estado`) VALUES
(1, 1, 5, '2023-01-10', '2023-01-24', 'Devuelto'),
(2, 2, 3, '2023-02-12', '2023-02-26', 'Pendiente'),
(3, 3, 2, '2023-03-22', '2023-04-05', 'Devuelto'),
(4, 4, 4, '2023-04-01', '2023-04-15', 'Pendiente'),
(5, 5, 1, '2023-05-05', '2023-05-19', 'Pendiente');

-- --------------------------------------------------------

--
-- Table structure for table `resenas`
--

CREATE TABLE `resenas` (
  `ID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `LibroID` int(11) DEFAULT NULL,
  `FechaResena` date DEFAULT NULL,
  `Puntuacion` int(11) DEFAULT NULL,
  `Comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resenas`
--

INSERT INTO `resenas` (`ID`, `UsuarioID`, `LibroID`, `FechaResena`, `Puntuacion`, `Comentario`) VALUES
(1, 1, 1, '2023-02-15', 5, 'Fascinante historia.'),
(2, 2, 2, '2023-03-10', 4, 'Un clásico imprescindible.'),
(3, 3, 3, '2023-04-25', 3, 'Entretenido pero predecible.'),
(4, 4, 4, '2023-05-20', 5, 'Una obra maestra.'),
(5, 5, 5, '2023-06-30', 2, 'No cumplió mis expectativas.');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Email`, `FechaNacimiento`, `Ciudad`) VALUES
(1, 'Juan', 'Pérez', 'juanperez@mail.com', '1990-05-15', 'Madrid'),
(2, 'Laura', 'García', 'lauragarcia@mail.com', '1985-10-23', 'Barcelona'),
(3, 'Carlos', 'Sánchez', 'carlossanchez@mail.com', '1972-03-11', 'Valencia'),
(4, 'Ana', 'López', 'analopez@mail.com', '1999-07-30', 'Sevilla'),
(5, 'Fernando', 'Martín', 'fernandomartin@mail.com', '2000-02-01', 'Bilbao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `LibroID` (`LibroID`);

--
-- Indexes for table `resenas`
--
ALTER TABLE `resenas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `LibroID` (`LibroID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`LibroID`) REFERENCES `libros` (`ID`);

--
-- Constraints for table `resenas`
--
ALTER TABLE `resenas`
  ADD CONSTRAINT `resenas_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `resenas_ibfk_2` FOREIGN KEY (`LibroID`) REFERENCES `libros` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
