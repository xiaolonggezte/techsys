




CREATE TABLE `practice` (
  `pratice_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `practice_username` varchar(50) NOT NULL COMMENT '用户名',
  `practice_pro_id` bigint NOT NULL COMMENT '外键：题目id',
  `practice_is_judge` tinyint DEFAULT 0 COMMENT '是否评测（主观题单存保存或更新做的答案，以便做记录和复习），客观题通过系统进行判题',
  `practice_answer` TEXT DEFAULT NULL COMMENT 'NULL代表未作答，否则未json字符串',
  `practice_result` varchar(50) DEFAULT NULL COMMENT '评测结果',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`pratice_id`),
  FOREIGN KEY (practice_pro_id) REFERENCES pros(pros_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='练习表';