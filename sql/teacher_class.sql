

CREATE TABLE `teacher_class` (
  `teacher_class_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `teacher_class_class_id` bigint DEFAULT NULL COMMENT '外键：班级id',
  `teacher_class_teacher_id` bigint DEFAULT NULL COMMENT '外键：教师id',
  `teacher_class_subject` varchar(50) NOT NULL COMMENT '课程名',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`teacher_class_id`),
  FOREIGN KEY (teacher_class_class_id) REFERENCES class(class_id),
  FOREIGN KEY (teacher_class_teacher_id) REFERENCES teacher(teacher_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='教师和班级对应表（课程名）';