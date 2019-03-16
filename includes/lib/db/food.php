<?php
namespace lib\db;


class food
{

	public static function insert()
	{
		\dash\db\config::public_insert('food', ...func_get_args());
		return \dash\db::insert_id();
	}


	public static function multi_insert()
	{
		return \dash\db\config::public_multi_insert('food', ...func_get_args());
	}

	public static function myList($_user_id)
	{
		$query =
		"
			SELECT
				GROUP_CONCAT(DISTINCT food.title) AS `title`,
				GROUP_CONCAT(DISTINCT food.subtitle) AS `subtitle`,
				GROUP_CONCAT(DISTINCT food.cat) AS `cat`,
				GROUP_CONCAT(DISTINCT food.cat2) AS `cat2`,
				GROUP_CONCAT(DISTINCT food.size) AS `size`
			FROM
				food
			WHERE food.user_id = $_user_id
		";
		$result = \dash\db::get($query, null , true);
		return $result;
	}


	public static function update()
	{
		return \dash\db\config::public_update('food', ...func_get_args());
	}


	public static function get()
	{
		return \dash\db\config::public_get('food', ...func_get_args());
	}

	public static function get_count()
	{
		return \dash\db\config::public_get_count('food', ...func_get_args());
	}


	public static function search($_string = null, $_option = [])
	{
		$default =
		[
			'search_field' =>
			"
				food.qari LIKE ('%__string__%') OR
				food.type LIKE ('%__string__%') OR
				food.readtype LIKE ('%__string__%')
			",
		];

		if(!is_array($_option))
		{
			$_option = [];
		}

		$_option = array_merge($default, $_option);

		$result = \dash\db\config::public_search('food', $_string, $_option);
		return $result;
	}

}
?>
