<?php

namespace Fuel\Migrations;

class Create_tags
{
	public function up()
	{
		\DBUtil::create_table('tags', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'tag_name' => array('constraint' => 255, 'type' => 'varchar'),
			'slug' => array('constraint' => 255, 'type' => 'varchar', 'unique' => true),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));

		\DB::query("ALTER TABLE `tags` ADD UNIQUE (`slug`)")->execute();
	}

	public function down()
	{
		\DBUtil::drop_table('tags');
	}
}