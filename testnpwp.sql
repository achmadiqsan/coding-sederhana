/*
 Navicat Premium Data Transfer

 Source Server         : locahost_xampp8
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : employe

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 03/02/2024 17:56:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for testnpwp
-- ----------------------------
DROP TABLE IF EXISTS `testnpwp`;
CREATE TABLE `testnpwp`  (
  `npwp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of testnpwp
-- ----------------------------
INSERT INTO `testnpwp` VALUES ('11.222.333.4-555.000');

-- ----------------------------
-- Table structure for testuang
-- ----------------------------
DROP TABLE IF EXISTS `testuang`;
CREATE TABLE `testuang`  (
  `uang` decimal(19, 2) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of testuang
-- ----------------------------
INSERT INTO `testuang` VALUES (7.94);
INSERT INTO `testuang` VALUES (7936302.95);
INSERT INTO `testuang` VALUES (4650647.45);

SET FOREIGN_KEY_CHECKS = 1;
