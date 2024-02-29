CREATE TABLE `product_categories` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `parent_id` int(11) NOT NULL DEFAULT '0',
 `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1:Active, 0:Inactive',
 PRIMARY KEY (`id`)
)



