ALTER TABLE `conf_carrier_web_site` ADD `about_us_file_path` varchar(255) DEFAULT NULL COMMENT '关于我们' AFTER `contact_us_file_path`;
ALTER TABLE `conf_carrier_web_site` ADD `duty_file_path` varchar(255) DEFAULT NULL COMMENT '责任博彩' AFTER `about_us_file_path`;