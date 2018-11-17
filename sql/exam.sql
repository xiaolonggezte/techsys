



CREATE TABLE `exam` (
  `exam_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `exam_name` varchar(50) UNIQUE NOT NULL COMMENT '考试名称',
    `exam_begintime` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT '考试开始时间',
  `exam_endtime` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT '考试结束时间',
  `exam_creator_id` bigint DEFAULT NULL COMMENT '外键：考试创建者id，教师里边的管理员teacher_id',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`exam_id`),
  INDEX index_exam_name(exam_name),
  FOREIGN KEY (exam_creator_id) REFERENCES teacher(teacher_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='考试表';