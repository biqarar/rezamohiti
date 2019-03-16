<?php
namespace content_i\food\add;

class view
{
	public static function config()
	{
		$countryList = \dash\utility\location\countres::$data;
		\dash\data::countryList($countryList);

		$myList = \lib\app\food::myList();
		\dash\data::myList($myList);

	}
}
?>