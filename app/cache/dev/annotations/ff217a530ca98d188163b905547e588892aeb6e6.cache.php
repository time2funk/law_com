<?php return unserialize('a:2:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";s:48:"Plugins\\BlogBundle\\Repository\\BlogPostRepository";s:8:"readOnly";b:0;}i:1;O:26:"Doctrine\\ORM\\Mapping\\Table":5:{s:4:"name";s:8:"BlogPost";s:6:"schema";N;s:7:"indexes";a:1:{i:0;O:26:"Doctrine\\ORM\\Mapping\\Index":2:{s:4:"name";s:29:"fk_BlogPost_blog_topic_id_idx";s:7:"columns";a:1:{i:0;s:13:"blog_topic_id";}}}s:17:"uniqueConstraints";a:1:{i:0;O:37:"Doctrine\\ORM\\Mapping\\UniqueConstraint":2:{s:4:"name";s:8:"url_uniq";s:7:"columns";a:1:{i:0;s:3:"url";}}}s:7:"options";a:0:{}}}');