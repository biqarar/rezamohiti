<?php
namespace content\abjad;


class view
{
	public static function config()
	{
		\dash\data::page_title(T_("Abjad"));
		// \dash\data::page_desc(T_("Check or generate national code"));

		$text = \dash\request::get('text');
		if($text)
		{

		}


	}


}
?>
