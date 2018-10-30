create database my_laravel;

use my_laravel;



CREATE TABLE `students` (
  `student_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `student_username` varchar(30) NOT NULL COMMENT '学生登录用户名',
  `student_password` varchar(250) DEFAULT NULL,
  `student_school` varchar(30) DEFAULT NULL,
  `student_cllege` varchar(40) DEFAULT NULL COMMENT '学院名称',
  `student_class` varchar(30) DEFAULT NULL COMMENT '班级',
  `student_number` varchar(30) DEFAULT NULL,
  `student_name` varchar(30) NOT NULL COMMENT '姓名',
  `student_sex` enum('男','女') NOT NULL COMMENT '性别',
  `student_tel` varchar(12) DEFAULT NULL COMMENT '联系电话',
  `student_email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `student_sign` varchar(100) DEFAULT 'Where there is will,there is a way' COMMENT '个性签名',
  `student_checked` tinyint(4) DEFAULT '0' COMMENT '是否审核通过,主要是对是否在这个班进行审核',
  `student_email_checked` tinyint(4) DEFAULT '0' COMMENT '邮箱是否审核',
  `student_regtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `student_url` varchar(50) DEFAULT NULL COMMENT '头像url',
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_username` (`student_username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='学生用户表';

CREATE TABLE `teachers` (
  `teacher_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '教师id',
  `teacher_username` varchar(30) NOT NULL COMMENT '教师登录用户名',
  `teacher_password` varchar(250) DEFAULT NULL,
  `teacher_school` varchar(40) DEFAULT NULL COMMENT '学校名称',
  `teacher_number` varchar(30) DEFAULT NULL,
  `teacher_name` varchar(30) NOT NULL COMMENT '姓名',
  `teacher_sex` enum('男','女') NOT NULL COMMENT '性别',
  `teacher_tel` varchar(12) DEFAULT NULL COMMENT '联系电话',
  `teacher_email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `teacher_sign` varchar(100) DEFAULT 'Where there is will,there is a way' COMMENT '个性签名',
  `teacher_checked` tinyint(4) DEFAULT '0' COMMENT '是否审核通过,学校认证',
  `teacher_email_checked` tinyint(4) DEFAULT '0' COMMENT '邮箱是否审核',
  `teacher_regtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `teacher_url` varchar(50) DEFAULT NULL COMMENT '头像url',
  PRIMARY KEY (`teacher_id`),
  UNIQUE KEY `teacher_username` (`teacher_username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='教师用户表';

-- 为两个表增加创建时间和更新时间
alter table students drop student_regtime;

alter table students add created_at timestamp default CURRENT_TIMESTAMP COMMENT '创建时间';
alter table students add updated_at timestamp default CURRENT_TIMESTAMP COMMENT '更新时间';


alter table teachers drop teacher_regtime;

alter table teachers add created_at timestamp default CURRENT_TIMESTAMP COMMENT '创建时间';
alter table teachers add updated_at timestamp default CURRENT_TIMESTAMP COMMENT '更新时间';



