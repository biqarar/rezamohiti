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
				food.title LIKE ('%__string__%') OR
				food.subtitle LIKE ('%__string__%') OR
				food.cat LIKE ('%__string__%') OR
				food.cat2 LIKE ('%__string__%') OR
				food.size LIKE ('%__string__%')
			",
			'public_show_field' => "food.*, users.displayname, users.avatar",
			'master_join' => "INNER JOIN users ON users.id = food.user_id"
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
