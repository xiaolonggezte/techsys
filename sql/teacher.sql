


CREATE TABLE `teacher` (
  `teacher_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `teacher_username` varchar(50) UNIQUE NOT NULL COMMENT '教师登录用户名',
  `teacher_email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `teacher_password` varchar(255) DEFAULT NULL COMMENT '用户密码',
  `teacher_number` varchar(50) DEFAULT NULL COMMENT '教师工号',
  `teacher_name` varchar(50) NOT NULL COMMENT '姓名',
  `teacher_sex` enum('男','女') NOT NULL COMMENT '性别',
  `teacher_tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `teacher_sign` varchar(100) DEFAULT 'Where there is will,there is a way' COMMENT '个性签名',
  `teacher_checked` tinyint(4) DEFAULT '0' COMMENT '是否审核通过,主要是对是否在这个班进行审核',
  `teacher_email_checked` tinyint(4) DEFAULT '0' COMMENT '邮箱是否审核',
  `teacher_admin` int DEFAULT 0 COMMENT '管理员权限，类似于二进制，1代表题库管理员，2代表院校管理员，4代表超级管理员',
  `teacher_active_code` varchar(50) NOT NULL COMMENT '邮件激活码',
  `teacher_wechat` varchar(50) DEFAULT NULL COMMENT '微信',
  `teacher_qq` varchar(50) DEFAULT NULL COMMENT 'qq',
  `teacher_url` varchar(50) DEFAULT NULL COMMENT '头像url',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`teacher_id`),
  INDEX index_username(teacher_username)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='教师用户表';