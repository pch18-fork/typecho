CREATE TABLE `typecho_links` (
  `lid` int(10) unsigned NOT NULL auto_increment COMMENT 'links表主键',
  `name` varchar(200) default NULL COMMENT 'links名称',
  `url` varchar(200) default NULL COMMENT 'links网址',
  `sort` varchar(200) default NULL COMMENT 'links分类',
  `description` varchar(200) default NULL COMMENT 'links描述',
  `order` int(10) unsigned default '0' COMMENT 'links排序',
  PRIMARY KEY  (`lid`)
) ENGINE=MYISAM  DEFAULT CHARSET=%charset%;
