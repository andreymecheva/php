-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-07-2011 a las 23:43:38
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `trabajo_de_curso`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `personas`
-- 

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL auto_increment,
  `nombre` varchar(150) character set utf8 collate utf8_spanish_ci NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `pais` varchar(150) character set utf8 collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id_persona`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `personas`
-- 

INSERT INTO `personas` VALUES (1, 'Pablo Ñandú', 'hola@pablo.com', '98798', 'Chile');
INSERT INTO `personas` VALUES (2, 'Marcelo Yáñez', 'chelo@google.com', 't68678687', 'Colombia');
INSERT INTO `personas` VALUES (3, 'Andrés López', 'andriu@hotmail.com', 'andriu@hotmail.com', 'andriu@hotmail.com');
INSERT INTO `personas` VALUES (4, 'Francisca Pérez', 'pancha@panchita.com', 'pancha@panchita.com', 'pancha@panchita.com');
INSERT INTO `personas` VALUES (5, 'Silvia Vega', 'tia@gmail.com', 'tia@gmail.com', 'tia@gmail.com');
