CREATE TABLE `ba_card_platform` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `platform` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '平台',
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '昵称',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `ba_card_account` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `card_platform_id` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '平台',
  `token` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '授权信息',
  `expires_in` bigint DEFAULT '0' COMMENT '时间',
  `access_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT 'token',
  `status` tinyint(1) DEFAULT '1' COMMENT '账号状态：1=正常，2=异常',
  `pull_time` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '拉取时间',
  `logs` text COLLATE utf8mb4_general_ci COMMENT '日志',
  `private_key` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT '私钥',
  `public_key` text COLLATE utf8mb4_general_ci COMMENT '公钥',
  `platform_key` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT '平台公钥',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;