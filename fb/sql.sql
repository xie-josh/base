CREATE TABLE `ba_fb_bm_token` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `business_id` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '商务管理平台的ID',
  `user_id` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_general_ci COMMENT 'token',
  `log` text COLLATE utf8mb4_general_ci COMMENT '日志',
  `pull_status` enum('0','1') COLLATE utf8mb4_general_ci DEFAULT '1',
  `type` tinyint(1) DEFAULT '1' COMMENT '类型：1=常规，2=企业',
  `create_time` datetime DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uni` (`business_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;