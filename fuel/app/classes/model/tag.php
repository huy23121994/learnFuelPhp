<?php
use Orm\Model;

class Model_Tag extends Model
{
	protected static $_properties = array(
		'id',
		'tag_name',
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
	);

	protected static $_table_name = 'tags';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('tag_name', 'Tag', 'required|min_length[5]');
		$val->add_field('slug', 'Slug', 'required');

		$val->set_message('required','The field :label is required');

		return $val;
	}

}
