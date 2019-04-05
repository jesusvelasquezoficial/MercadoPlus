/*
Navicat MySQL Data Transfer

Source Server         : ec2
Source Server Version : 50505
Source Host           : 18.224.121.228:3306
Source Database       : mercadoplus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-05 11:57:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for datosoficiales
-- ----------------------------
DROP TABLE IF EXISTS `datosoficiales`;
CREATE TABLE `datosoficiales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `hora` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `dolardicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvdolardicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `eurodicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctveurodicom` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `eurodolar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctveurodolar` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `bitcoinbuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbitcoinbuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `bitcoinsell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbitcoinsell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `bitcoinpromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbitcoinpromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petro` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetro` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petro1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetro1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petro2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetro2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `wti` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvwti` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `brent` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvbrent` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `petroleo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvpetroleo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `orobuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvorobuy` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `orosell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvorosell` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `oropromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pctvoropromedio` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of datosoficiales
-- ----------------------------
INSERT INTO `datosoficiales` VALUES ('1', '2019-04-01', '03:24 PM', '1', '0', '1', '0', '1,00', '0', '1', '0', '1', '0', '1,00', '0', '60.00', '0', '1', '0', '60.00', '0', '1', '0', '1', '0', '1.00', '0', '1', '0', '1', '0', '1,00', '0');
INSERT INTO `datosoficiales` VALUES ('2', '2019-04-01', '03:32 PM', '2', '0', '2', '0', '1,00', '0', '2', '0', '2', '0', '2,00', '0', '60.00', '0', '2', '0', '120.00', '0', '2', '0', '2', '0', '2.00', '0', '2', '0', '2', '0', '2,00', '0');
INSERT INTO `datosoficiales` VALUES ('3', '2019-04-02', '09:15 AM', '1', '0', '1', '0', '1,00', '0', '1', '0', '1', '0', '1,00', '0', '60.00', '0', '1', '0', '60.00', '0', '1', '0', '1', '0', '1.00', '0', '11', '0', '1', '0', '6,00', '0');
INSERT INTO `datosoficiales` VALUES ('4', '2019-04-03', '11:08 AM', '3,295.92', '0', '3,697.70', '0', '1,12', '0', '4,950.00', '0', '5,050.00', '0', '5,000.00', '0', '60.00', '0', '36,000.00', '0', '197755.20', '0', '57.83', '0', '65.83', '0', '61.83', '0', '1,290.90', '0', '1,291.90', '0', '1,291.40', '0');
INSERT INTO `datosoficiales` VALUES ('5', '2019-04-03', '12:09 AM', '3,630.00', '0', '3,750.00', '0', '1,03', '0', '4,950.00', '0', '5,050.00', '0', '5,000.00', '0', '60.00', '0', '36,000.00', '0', '217,800.00', '0', '59.61', '0', '67.28', '0', '63.45', '0', '1,120.33', '0', '1,121.34', '0', '1,120.84', '0');
INSERT INTO `datosoficiales` VALUES ('6', '2019-04-03', '12:11 AM', '3,500.00', '0', '3,600.00', '0', '1,03', '0', '3,900.00', '0', '4,100.00', '0', '4,000.00', '0', '60.00', '0', '36,000.00', '0', '210,000.00', '0', '59.51', '0', '67.28', '0', '63.39', '0', '1,154.00', '0', '1,155.00', '0', '1,154.50', '0');
INSERT INTO `datosoficiales` VALUES ('7', '2019-04-04', '11:20 AM', '3,250.00', '0', '4,100.00', '0', '1,26', '0', '3,999.99', '0', '4,100.00', '0', '4,049.99', '0', '60.00', '0', '36,000.00', '0', '195,000.00', '0', '59.51', '0', '61.00', '0', '60,25', '0', '1,120.00', '0', '1,220.00', '0', '1,170.00', '0');

-- ----------------------------
-- Table structure for datosotc
-- ----------------------------
DROP TABLE IF EXISTS `datosotc`;
CREATE TABLE `datosotc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `dolartodaybuy` varchar(255) DEFAULT NULL,
  `pctvdolartodaybuy` varchar(255) DEFAULT NULL,
  `dolartodaysell` varchar(255) DEFAULT NULL,
  `pctvdolartodaysell` varchar(255) DEFAULT NULL,
  `dolartodaypromedio` varchar(255) DEFAULT NULL,
  `pctvdolartodaypromedio` varchar(255) DEFAULT NULL,
  `dolartodaybtcbuy` varchar(255) DEFAULT NULL,
  `pctvdolartodaybtcbuy` varchar(255) DEFAULT NULL,
  `dolartodaybtcsell` varchar(255) DEFAULT NULL,
  `pctvdolartodaybtcsell` varchar(255) DEFAULT NULL,
  `dolartodaybtcpromedio` varchar(255) DEFAULT NULL,
  `pctvdolartodaybtcpromedio` varchar(255) DEFAULT NULL,
  `airtmbuy` varchar(255) DEFAULT NULL,
  `pctvairtmbuy` varchar(255) DEFAULT NULL,
  `airtmsell` varchar(255) DEFAULT NULL,
  `pctvairtmsell` varchar(255) DEFAULT NULL,
  `airtmpromedio` varchar(255) DEFAULT NULL,
  `pctvairtmpromedio` varchar(255) DEFAULT NULL,
  `dolartruebuy` varchar(255) DEFAULT NULL,
  `pctvdolartruebuy` varchar(255) DEFAULT NULL,
  `dolartruesell` varchar(255) DEFAULT NULL,
  `pctvdolartruesell` varchar(255) DEFAULT NULL,
  `dolartruepromedio` varchar(255) DEFAULT NULL,
  `pctvdolartruepromedio` varchar(255) DEFAULT NULL,
  `monitordolarvzlabuy` varchar(255) DEFAULT NULL,
  `pctvmonitordolarvzlabuy` varchar(255) DEFAULT NULL,
  `monitordolarvzlasell` varchar(255) DEFAULT NULL,
  `pctvmonitordolarvzlasell` varchar(255) DEFAULT NULL,
  `monitordolarvzlapromedio` varchar(255) DEFAULT NULL,
  `pctvmonitordolarvzlapromedio` varchar(255) DEFAULT NULL,
  `mkambiobuy` varchar(255) DEFAULT NULL,
  `pctvmkambiobuy` varchar(255) DEFAULT NULL,
  `mkambiosell` varchar(255) DEFAULT NULL,
  `pctvmkambiosell` varchar(255) DEFAULT NULL,
  `mkambiopromedio` varchar(255) DEFAULT NULL,
  `pctvmkambiopromedio` varchar(255) DEFAULT NULL,
  `dolargoldbuy` varchar(255) DEFAULT NULL,
  `pctvdolargoldbuy` varchar(255) DEFAULT NULL,
  `dolargoldsell` varchar(255) DEFAULT NULL,
  `pctvdolargoldsell` varchar(255) DEFAULT NULL,
  `dolargoldpromedio` varchar(255) DEFAULT NULL,
  `pctvdolargoldpromedio` varchar(255) DEFAULT NULL,
  `dolarftbuy` varchar(255) DEFAULT NULL,
  `pctvdolarftbuy` varchar(255) DEFAULT NULL,
  `dolarftsell` varchar(255) DEFAULT NULL,
  `pctvdolarftsell` varchar(255) DEFAULT NULL,
  `dolarftpromedio` varchar(255) DEFAULT NULL,
  `pctvdolarftpromedio` varchar(255) DEFAULT NULL,
  `dolarc` varchar(255) NOT NULL,
  `pctvdolarc` varchar(255) NOT NULL,
  `dolarv` varchar(255) NOT NULL,
  `pctvdolarv` varchar(255) NOT NULL,
  `euroc` varchar(255) NOT NULL,
  `pctveuroc` varchar(255) NOT NULL,
  `eurov` varchar(255) NOT NULL,
  `pctveurov` varchar(255) NOT NULL,
  `promediototal` varchar(255) NOT NULL,
  `pctvpromediototal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of datosotc
-- ----------------------------
INSERT INTO `datosotc` VALUES ('1', '2019-04-03', '06:45 PM', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `datosotc` VALUES ('2', '2019-04-03', '07:34 PM', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `datosotc` VALUES ('3', '2019-04-03', '07:52 PM', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', '1330.00', '0', '1466.50', '0', '', '', '', '', '1400.00', '0');
INSERT INTO `datosotc` VALUES ('4', '2019-04-03', '07:52 PM', '1,400.00', '0', '1,400.00', '0', '', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1,400.00', '0', '1330.00', '0', '1466.50', '0', '', '', '', '', '1400.00', '0');
INSERT INTO `datosotc` VALUES ('5', '2019-04-03', '07:57 PM', '2,000.00', '0', '2,000.00', '0', '', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '2,000.00', '0', '1900.00', '0', '2095.00', '0', '2052.00', '0', '2262.60', '0', '2000.00', '0');
INSERT INTO `datosotc` VALUES ('6', '2019-04-03', '08:04 PM', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '4,000.00', '0', '3800.00', '0', '4190.00', '0', '4370.00', '0', '4818.50', '0', '4000.00', '0');
INSERT INTO `datosotc` VALUES ('7', '2019-04-04', '11:21 AM', '3,500.00', '0', '3,941.23', '0', '3,720.61', '0', '3,259.65', '0', '3,458.62', '0', '3,359.14', '0', '3,652.42', '0', '3,785.41', '0', '3,718.91', '0', '3,895.22', '0', '3,915.16', '0', '3,905.19', '0', '3,455.62', '0', '3,854.22', '0', '3,654.92', '0', '3,165.89', '0', '3,784.25', '0', '3,475.07', '0', '3,522.22', '0', '3,985.45', '0', '3,753.84', '0', '1,321.32', '0', '1,321.32', '0', '1,321.32', '0', '3,195.44', '0', '3,523.40', '0', '3,323.26', '0', '3,664.33', '0', '3,363.63', '0');
INSERT INTO `datosotc` VALUES ('8', '2019-04-04', '01:54 PM', '1,321.23', '0', '1,231.32', '0', '1,276.28', '0', '3,213.12', '0', '3,213.21', '0', '3,213.16', '0', '6,546.54', '0', '6,546.54', '0', '6,546.54', '0', '7,897.89', '0', '4,564.56', '0', '6,231.23', '0', '7,897.98', '0', '4,564.65', '0', '6,231.31', '0', '4,564.56', '0', '4,564.65', '0', '4,564.60', '0', '1,321.32', '0', '1,321.32', '0', '1,321.32', '0', '0', '0', '0', '0', '0,00', '0', '3,987.89', '0', '4,397.17', '0', '3,987.89', '0', '4,397.17', '0', '4,197.78', '0');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'user');
INSERT INTO `roles` VALUES ('2', 'admin');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` text COLLATE utf8_spanish2_ci NOT NULL,
  `password` text COLLATE utf8_spanish2_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Jesus', 'Velasquez', 'jesusvelasquezoficial@gmail.com', 'b643eb0d9479f6f6a21ff65c13fa57d6', '2');
INSERT INTO `usuarios` VALUES ('2', 'Fernando', 'Agreda', 'fagredameza@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2');
INSERT INTO `usuarios` VALUES ('3', 'Jairo', 'Moncada', 'moncada319@hotmail.com', 'b643eb0d9479f6f6a21ff65c13fa57d6', '2');
