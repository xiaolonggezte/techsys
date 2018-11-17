



CREATE TABLE `exam_paper` (
  `exam_paper_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `exam_paper_name` varchar(50) UNIQUE NOT NULL COMMENT '试卷的名称',
  `exam_paper_exam_id` bigint DEFAULT NULL COMMENT '外键：考试id',
  `exam_paper_username` varchar(50) NOT NULL COMMENT '作答者用户名',
  `exam_paper_pros` varchar(255) NOT NULL COMMENT '保存试卷题目的json字符串，需要包括以下信息（序号；题目id；对应题目规定的总分数）',
  `exam_paper_answers` TEXT NOT NULL COMMENT '对应用户的作答答案，json字符串。考虑到编程题，所以设计成TEXT',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`exam_paper_id`),
  INDEX index_exam_paper_name(exam_paper_name),
  FOREIGN KEY (exam_paper_exam_id) REFERENCES exam(exam_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='试卷表';

-- TODO加入到文档中
alter table exam_paper add exam_paper_results varchar(255) DEFAULT NULL COMMENT 'json字符串，存放对应题目的运行分数';