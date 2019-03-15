<?php
namespace lib\app;

/**
 * Class for food.
 */
class food
{
	public static $sort_field =
	[
		'qari',
		'avatar',
		'type',
		'readtype',
		'filetype',
		'country',
		'quality',
	];


	public static function get($_id)
	{
		$id = \dash\coding::decode($_id);
		if(!$id)
		{
			return false;
		}

		$result = \lib\db\food::get(['id' => $id, 'limit' => 1]);
		$temp = [];
		if(is_array($result))
		{
			$temp = self::ready($result);
		}
		return $temp;
	}


	/**
	 * check args
	 *
	 * @return     array|boolean  ( description_of_the_return_value )
	 */
	public static function check($_id = null)
	{

		// $datetime = \dash\app::request('datetime');
		$title    = \dash\app::request('title');
		$subtitle = \dash\app::request('subtitle');
		$cat      = \dash\app::request('cat');
		$cat2     = \dash\app::request('cat2');
		$size     = \dash\app::request('size');
		$desc     = \dash\app::request('desc');
		$image    = \dash\app::request('image');
		$avatar   = \dash\app::request('avatar');
		$status   = \dash\app::request('status');

		$date     = \dash\app::request('date');
		if(!$date)
		{
			$date = date("Y-m-d");
		}

		$time     = \dash\app::request('time');

		if(!$time)
		{
			$time = date("H:i:s");
		}

		$args             = [];
		$args['avatar']   = $avatar;
		$args['datetime'] = $date .' '. $time;
		$args['title']    = $title;
		$args['subtitle'] = $subtitle;
		$args['cat']      = $cat;
		$args['cat2']     = $cat2;
		$args['size']     = $size;
		$args['desc']     = $desc;
		$args['image']    = $image;
		$args['status']   = $status;

		return $args;

	}


	/**
	 * ready data of user to load in api
	 *
	 * @param      <type>  $_data  The data
	 */
	public static function ready($_data)
	{
		$_data = \dash\app::fix_avatar($_data);
		$result = [];
		$result['location_string'] = [];
		foreach ($_data as $key => $value)
		{

			switch ($key)
			{
				case 'id':
					$result[$key] = \dash\coding::encode($value);
					break;

				case 'country':
					$result[$key] = $value;
					$result['country_name'] = \dash\utility\location\countres::get_localname($value, true);
					$result['location_string'][1] = $result['country_name'];
					break;


				case 'province':
					$result[$key] = $value;
					$result['province_name'] = \dash\utility\location\provinces::get_localname($value);
					$result['location_string'][2] = $result['province_name'];
					break;

				case 'city':
					$result[$key] = $value;
					$result['city_name'] = \dash\utility\location\cites::get_localname($value);
					$result['location_string'][3] = $result['city_name'];
					break;


				default:
					$result[$key] = $value;
					break;
			}
		}
		ksort($result['location_string']);
		$result['location_string'] = array_filter($result['location_string']);
		$result['location_string'] = implode(T_(","). " ", $result['location_string']);

		return $result;
	}


	/**
	 * add new user
	 *
	 * @param      array          $_args  The arguments
	 *
	 * @return     array|boolean  ( description_of_the_return_value )
	 */
	public static function add($_args, $_option = [])
	{
		\dash\app::variable($_args);


		$default_option =
		[
			'debug'    => true,
		];

		if(!is_array($_option))
		{
			$_option = [];
		}

		$_option = array_merge($default_option, $_option);


		if(!\dash\user::id())
		{
			\dash\notif::error(T_("User not found"), 'user');
			return false;
		}

		// check args
		$args = self::check();

		if($args === false || !\dash\engine\process::status())
		{
			return false;
		}

		$return  = [];

		if(!$args['status'])
		{
			$args['status'] = 'enable';
		}
		$args['user_id'] = \dash\user::id();

		$food = \lib\db\food::insert($args);

		if(!$food)
		{
			\dash\log::set('noWayToAddfood');
			\dash\notif::error(T_("No way to insert food"));
			return false;
		}

		\dash\log::set('addfood', ['code' => $food]);

		return $return;
	}


	public static function list($_string = null, $_args = [])
	{

		if(!\dash\user::id())
		{
			return false;
		}

		$default_args =
		[
			'order' => null,
			'sort'  => null,
		];

		if(!is_array($_args))
		{
			$_args = [];
		}

		$option = [];
		$option = array_merge($default_args, $_args);

		if($option['order'])
		{
			if(!in_array($option['order'], ['asc', 'desc']))
			{
				unset($option['order']);
			}
		}

		if($option['sort'])
		{
			if(!in_array($option['sort'], self::$sort_field))
			{
				unset($option['sort']);
			}
		}

		$field             = [];

		$result = \lib\db\food::search($_string, $option, $field);

		$temp            = [];


		foreach ($result as $key => $value)
		{
			$check = self::ready($value);
			if($check)
			{
				$temp[] = $check;
			}
		}

		return $temp;
	}


	public static function edit($_args, $_id)
	{
		\dash\app::variable($_args);

		$id = \dash\coding::decode($_id);

		if(!$id)
		{
			\dash\notif::error(T_("Can not access to edit food"), 'food');
			return false;
		}

		if(!\dash\user::id())
		{
			return false;
		}

		// check args
		$args = self::check($id);

		if($args === false || !\dash\engine\process::status())
		{
			return false;
		}


		if(!\dash\app::isset_request('avatar')) unset($args['avatar']);
		if(!\dash\app::isset_request('datetime')) unset($args['datetime']);
		if(!\dash\app::isset_request('title')) unset($args['title']);
		if(!\dash\app::isset_request('subtitle')) unset($args['subtitle']);
		if(!\dash\app::isset_request('cat')) unset($args['cat']);
		if(!\dash\app::isset_request('cat2')) unset($args['cat2']);
		if(!\dash\app::isset_request('size')) unset($args['size']);
		if(!\dash\app::isset_request('desc')) unset($args['desc']);
		if(!\dash\app::isset_request('image')) unset($args['image']);
		if(!\dash\app::isset_request('status')) unset($args['status']);


		if(!empty($args))
		{
			\lib\db\food::update($args, $id);
			\dash\log::set('editfood', ['code' => $id]);
		}

		return true;
	}



}
?>