ALTER TABLE `ttcbet`.`inf_agent` ADD UNIQUE INDEX `username_unique`(`username`, `carrier_id`) USING BTREE;
ALTER TABLE `ttcbet`.`log_agent_settle_detail` MODIFY COLUMN `commission_rate` decimal(8, 5) NOT NULL DEFAULT 0.00 COMMENT '结算费用比例(%)默认0.00' AFTER `commission_money`;
ALTER TABLE `ttcbet`.`conf_carrier_agent_level_commission` MODIFY COLUMN `commission_ratio` decimal(8, 5) NULL DEFAULT 0.00 COMMENT '阶级佣金比例' AFTER `level`;