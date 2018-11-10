


CREATE TABLE `pros` (
  `pros_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pros_type` int NOT NULL COMMENT '题目类别：1选择，2填空，3代码题',
  `pros_is_negative` tinyint DEFAULT 1 COMMENT '是否客观题：1是，0否。一般对于代码题和答案二义性的填空题',
  `pros_content` TEXT NOT NULL COMMENT '题目内容',
  `pros_selections` varchar(250) NULL COMMENT '针对选择题，其他为NULL：题目选项，json字符串',
  `pros_answers` TEXT NOT NULL COMMENT '题目参考答案，json字符串,考虑到代码题，存成TEXT',
  `pros_creator_id` bigint NOT NULL COMMENT '外键：创建此题的题库管理员id',
  `pros_is_private` tinyint DEFAULT 1 COMMENT '是否私有，在题库中是否可见',
  `pros_resource` varchar(50) DEFAULT 'admin' COMMENT '题目的来源',
  `pros_category_id` bigint NOT NULL COMMENT '外键:题目类别id',
  `pros_diffculty` int NOT NULL COMMENT '题目难度',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '插入时间',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`pros_id`),
  FOREIGN KEY (pros_creator_id) REFERENCES teacher(teacher_id),
  FOREIGN KEY (pros_category_id) REFERENCES pro_content_category(pro_content_category_id)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='题目对象';