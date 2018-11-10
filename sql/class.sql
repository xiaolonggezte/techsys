

CREATE TABLE `class` (
  `class_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `class_school` varchar(50) DEFAULT NULL COMMENT '学校',
  `class_academy` varchar(50) DEFAULT NULL COMMENT '学院',
  `class_class` varchar(50) DEFAULT NULL COMMENT '班级',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='班级对象';