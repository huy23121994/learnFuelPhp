<?php

class Model_Category extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'category_name',
		'slug',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_Slug' => array(
	        'events' => array('before_insert','before_update'),
	        'source' => 'slug',
	        'property' => 'slug',
	        'separator' => '-',
	        'unique' => true,
	    ),
	);

	protected static $_table_name = 'categories';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_callable('Myrules');
		$val->add_field('category_name', 'Category', 'required');
		$val->add('slug', 'Slug')->add_rule('unique', 'categories.slug');

		$val->set_message('required','The :label is required');
		$val->set_message('unique','This :label already exists');
		return $val;
	}

}
