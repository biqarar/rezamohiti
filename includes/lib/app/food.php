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

	public static function qari_list()
	{
		$list = [];
		$list[] = [ 'key' => 'AbdulBaset AbdulSamad', 			'value' => T_('AbdulBaset AbdulSamad'),];
		$list[] = [ 'key' => 'Mishary Rashid Alafasy', 			'value' => T_('Mishary Rashid Alafasy'), ];
		$list[] = [ 'key' => 'Mahmoud Khalil Al-Husary', 		'value' => T_('Mahmoud Khalil Al-Husary'),];
		$list[] = [ 'key' => 'Mohamed Siddiq al-Minshawi', 		'value' => T_('Mohamed Siddiq al-Minshawi'),];
		$list[] = [ 'key' => 'Hani ar-Rifai', 					'value' => T_('Hani ar-Rifai'),];
		$list[] = [ 'key' => 'Abu Bakr al-Shatri', 				'value' => T_('Abu Bakr al-Shatri'),];
		$list[] = [ 'key' => 'Sa`ud ash-Shuraym', 				'value' => T_('Sa`ud ash-Shuraym'),];
		$list[] = [ 'key' => 'Abdur-Rahman as-Sudais', 			'value' => T_('Abdur-Rahman as-Sudais'),];
		$list[] = [ 'key' => 'Rasim Balayev', 					'value' => T_('Rasim Balayev'),];
		$list[] = [ 'key' => 'Ibrahim Walk', 					'value' => T_('Ibrahim Walk'),];
		$list[] = [ 'key' => 'Shahriyar parhizgar',				'value' => T_('Shahriyar parhizgar'), ];
		$list[] = [ 'key' => 'Karim mansouri', 					'value' => T_('Karim mansouri'),];
		$list[] = [ 'key' => 'Mohsen Qaraati', 					'value' => T_('Mohsen Qaraati'),];
		$list[] = [ 'key' => 'Mohammad mahdi fouladvand', 		'value' => T_('Mohammad mahdi fouladvand'),];
		$list[] = [ 'key' => 'Naser makarem shirazi', 			'value' => T_('Naser makarem shirazi'),];
		return $list;
	}


	public static function type_list()
	{
		$list   = [];
		$list[] = [ 'key' => 'Muallim', 	'value' => T_('Muallim'),];
		$list[] = [ 'key' => 'Mujawwad', 	'value' => T_('Mujawwad'), ];
		$list[] = [ 'key' => 'Murattal', 	'value' => T_('Murattal'),];
		$list[] = [ 'key' => 'Commentary', 	'value' => T_('Commentary'),];
		$list[] = [ 'key' => 'Translate', 	'value' => T_('Translate'),];
		return $list;
	}


	public static function readtype_list()
	{
		$list   = [];
		$list[] = [ 'key' => 'Page screen', 'value' => T_('Page screen'),];
		$list[] = [ 'key' => 'Aya', 		'value' => T_('Aya'), ];
		$list[] = [ 'key' => 'Sura', 		'value' => T_('Sura'),];
		$list[] = [ 'key' => 'Juz', 		'value' => T_('Juz'),];
		return $list;
	}

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

		$qari = \dash\app::request('qari');
		if($qari && mb_strlen($qari) > 200)
		{
			\dash\notif::error(T_("Please set qari less than 200 character"), 'qari');
			return false;
		}

		$avatar = \dash\app::request('avatar');
		if($avatar && mb_strlen($avatar) > 200)
		{
			\dash\notif::error(T_("Please set avatar less than 200 character"), 'avatar');
			return false;
		}

		$type = \dash\app::request('type');
		if($type && mb_strlen($type) > 200)
		{
			\dash\notif::error(T_("Please set type less than 200 character"), 'type');
			return false;
		}

		$readtype = \dash\app::request('readtype');
		if($readtype && mb_strlen($readtype) > 200)
		{
			\dash\notif::error(T_("Please set readtype less than 200 character"), 'readtype');
			return false;
		}

		$filetype = \dash\app::request('filetype');
		if($filetype && mb_strlen($filetype) > 200)
		{
			\dash\notif::error(T_("Please set filetype less than 200 character"), 'filetype');
			return false;
		}

		$addr = \dash\app::request('addr');
		if($addr && mb_strlen($addr) > 1000)
		{
			\dash\notif::error(T_("Please set addr less than 200 character"), 'addr');
			return false;
		}

		$country = \dash\app::request('country');
		if($country && mb_strlen($country) > 200)
		{
			\dash\notif::error(T_("Please set country less than 200 character"), 'country');
			return false;
		}

		$quality = \dash\app::request('quality');
		if($quality && mb_strlen($quality) > 200)
		{
			\dash\notif::error(T_("Please set quality less than 200 character"), 'quality');
			return false;
		}


		$status = \dash\app::request('status');
		if($status && !in_array($status, ['enable', 'disable', 'awaiting', 'deleted', 'review', 'filter']))
		{
			\dash\notif::error(T_("Invalid status"), 'status');
			return false;
		}

		$args             = [];
		$args['qari']     = $qari;
		$args['avatar']   = $avatar;
		$args['type']     = $type;
		$args['readtype'] = $readtype;
		$args['filetype'] = $filetype;
		$args['country']  = $country;
		$args['quality']  = $quality;
		$args['status']   = $status;
		$args['addr']     = $addr;

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

		if(!\dash\app::isset_request('qari')) unset($args['qari']);
		if(!\dash\app::isset_request('avatar')) unset($args['avatar']);
		if(!\dash\app::isset_request('type')) unset($args['type']);
		if(!\dash\app::isset_request('readtype')) unset($args['readtype']);
		if(!\dash\app::isset_request('filetype')) unset($args['filetype']);
		if(!\dash\app::isset_request('country')) unset($args['country']);
		if(!\dash\app::isset_request('quality')) unset($args['quality']);
		if(!\dash\app::isset_request('status')) unset($args['status']);
		if(!\dash\app::isset_request('addr')) unset($args['addr']);


		if(!empty($args))
		{
			\lib\db\food::update($args, $id);
			\dash\log::set('editfood', ['code' => $id]);
		}

		return true;
	}



}
?>