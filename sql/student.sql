use EPSS;


CREATE TABLE `student` (
  `student_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `student_username` varchar(50) UNIQUE NOT NULL COMMENT '学生登录用户名',
  `student_email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `student_password` varchar(255) DEFAULT NULL COMMENT '用户密码',
  `student_class_id` bigint DEFAULT NULL COMMENT '外键：班级id',
  `student_number` varchar(50) DEFAULT NULL COMMENT '学号',
  `student_name` varchar(50) NOT NULL COMMENT '姓名',
  `student_sex` enum('男','女') NOT NULL COMMENT '性别',
  `student_tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `student_sign` varchar(100) DEFAULT 'Where there is will,there is a way' COMMENT '个性签名',
  `student_checked` tinyint(4) DEFAULT '0' COMMENT '是否审核通过,主要是对是否在这个班进行审核',
  `student_email_checked` tinyint(4) DEFAULT '0' COMMENT '邮箱是否审核',
  `student_active_code` varchar(50) NOT NULL COMMENT '邮件激活码',
  `student_wechat` varchar(50) DEFAULT NULL COMMENT '微信',
  `student_qq` varchar(50) DEFAULT NULL COMMENT 'qq',
  `student_url` varchar(50) DEFAULT NULL COMMENT '头像url',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`student_id`),
  INDEX index_username(student_username),
  FOREIGN KEY (student_class_id) REFERENCES class(class_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='学生用户表';