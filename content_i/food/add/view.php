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

		\dash\data::page_title(T_("Add"));
		\dash\data::page_desc(' ');
		\dash\data::page_pictogram('magic');

		\dash\data::badge_link(\dash\url::this());
		\dash\data::badge_text(T_('Back'));


	}
}
?>