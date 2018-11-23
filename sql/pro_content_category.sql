


CREATE TABLE `pro_content_category` (
  `pro_content_category_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pro_content_category_name` varchar(50)  NOT NULL COMMENT '题目类别名称',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`pro_content_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='题目内容类别表';