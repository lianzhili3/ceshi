CREATE TABLE IF NOT EXISTS `github_url`(
   `id` INT UNSIGNED AUTO_INCREMENT ,
   `user_name1` VARCHAR(100) NOT NULL COMMENT 'github用户1',
   `user_name` VARCHAR(100) NOT NULL COMMENT 'github用户',
   `repositories` VARCHAR(100) NOT NULL  COMMENT '仓库',
   `url` VARCHAR(255) NOT NULL  COMMENT '文件地址',
   `type` VARCHAR(100) NOT NULL  COMMENT '文件类型',
   `create_time` timestamp NOT NULL  COMMENT '抓取时间',
   `sha` VARCHAR(255) NOT NULL  COMMENT 'github上的文件的sha值',
   `status` INT NOT NULL  COMMENT '数据状态 1 启用 2 禁用',
   PRIMARY KEY ( `id` )
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


   `update_time` timestamp NOT NULL  COMMENT '更新抓取时间',
   `last_indexed_time` timestamp NOT NULL  COMMENT '文件在github上的最后更新时间',
