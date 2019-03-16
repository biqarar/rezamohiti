<?php
namespace content_i\food\edit;


class view
{
	public static function config()
	{
		\dash\data::page_title(T_("Edit audio"));
		\dash\data::page_desc(' ');
		\dash\data::page_pictogram('edit');

		\dash\data::badge_link(\dash\url::this());
		\dash\data::badge_text(T_('Back to list of audio'));

		$id     = \dash\request::get('id');
		$result = \lib\app\food::get($id);
		if(!$result)
		{
			\dash\header::status(403, T_("Invalid audio id"));
		}

		if(isset($result['user_id']))
		{
			if(intval($result['user_id']) !== intval(\dash\user::id()))
			{
				\dash\header::status(403);
			}
		}

		\dash\data::dataRow($result);

		$countryList = \dash\utility\location\countres::$data;
		\dash\data::countryList($countryList);

		$myList = \lib\app\food::myList();
		\dash\data::myList($myList);

	}
}
?>