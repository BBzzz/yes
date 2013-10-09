<?php

class m131008_074233_create_products_table extends CDbMigration
{
	public function safeUp()
    	{
        	$this->createTable('tbl_products', array(
			'id' => 'pk',
            		'code' => 'char(20) NOT NULL',
            		'denomination' => 'varchar(100) NOT NULL',
            		'description' => 'text NOT NULL',
			'image_name' => 'varchar(128) NOT NULL',
            		'create_time' => 'date',
            		'create_user_id' => 'integer',
			'update_time' => 'date',
            		'update_user_id' => 'integer',
        	));
		$this->insert('tbl_products', array(
			'id' => 1,
            		'code' => '244135x',
            		'denomination' => 'bye bye',
            		'description' => 'hdhjvmbvjncxbvcnjmb\r\nbvjmvmn m \r\nhnvjhlkjljl',
			'image_name' => '7284-l1.jpg',
            		'create_time' => '2013-10-01',
            		'create_user_id' => 1,
			'update_time' => '2013-10-01',
            		'update_user_id' => 1,
        	));
		$this->insert('tbl_products', array(
			'id' => 2,
            		'code' => '54756',
            		'denomination' => 'egy termek',
            		'description' => 'egy termek jmb\r\nbvjmvmn m \r\nhnvjhlkjljl',
			'image_name' => '',
            		'create_time' => '2013-10-02',
            		'create_user_id' => 1,
			'update_time' => '2013-10-02',
            		'update_user_id' => 1,
        	));
    	}
 
    	public function safeDown()
    	{
        	$this->dropTable('tbl_products');
    	}
}
/*
CREATE TABLE `tbl_products` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`code` CHAR(20) NOT NULL,
	`denomination` VARCHAR(100) NOT NULL,
	`description` TEXT NOT NULL,
	`image_name` VARCHAR(128) NOT NULL,
	`create_time` DATE NOT NULL,
	`create_user_id` INT(11) NOT NULL,
	`update_time` DATE NOT NULL,
	`update_user_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `after_code` (`code`),
	INDEX `FK_tbl_products_tbl_user` (`create_user_id`),
	INDEX `FK_tbl_products_tbl_user_2` (`update_user_id`),
	CONSTRAINT `FK_tbl_products_tbl_user` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`),
	CONSTRAINT `FK_tbl_products_tbl_user_2` FOREIGN KEY (`update_user_id`) REFERENCES `tbl_user` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
*/
