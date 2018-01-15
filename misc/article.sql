  create database timeline ;
  use timeline;

  create table article (
    id int auto_increment primary key,
    title varchar(64) not null default '' comment '标题',
    desc varchar(255) not null default '' comment '摘要',
    content text  comment '内容',
    mood varchar(255) not null default '' comment '心情',
    author varchar(255) not null default '' comment '昵称',
    address varchar(255) not null default '' comment '地点',
    weather varchar(255) not null default '' comment '天气',
    time varchar(255) not null default '' comment '发布时间'
  )engine=innodb charset=utf8;
