



CREATE TABLE `pro_category_pro` (
  `pro_category_pro_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pro_category_pro_pros_id` bigint DEFAULT NULL COMMENT '外键：班级id',
  `pro_category_pro_category_id` bigint DEFAULT NULL COMMENT '外键：教师id',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`pro_category_pro_id`),
  FOREIGN KEY (pro_category_pro_pros_id) REFERENCES pros(pros_id),
  FOREIGN KEY (pro_category_pro_category_id) REFERENCES pro_content_category(pro_content_category_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='题目与题目类别对应表';

-- 删除对应表，改成多对一
drop table pro_category_pro;