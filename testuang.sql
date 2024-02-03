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

 Date: 03/02/2024 17:56:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
