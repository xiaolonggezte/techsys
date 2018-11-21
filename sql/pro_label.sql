



CREATE TABLE `pro_label` (
  `pro_label_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pro_label_pro_id` bigint NULL COMMENT '外键：题目id',
  `pro_label_label_id` bigint NULL COMMENT '外键：题目标签id',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`pro_label_id`),
  FOREIGN KEY(`pro_label_pro_id`) REFERENCES pros(pros_id),
  FOREIGN KEY(`pro_label_label_id`) REFERENCES label(label_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='题目与标签对应表';

