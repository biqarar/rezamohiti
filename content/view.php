<?php
namespace content;

class view
{
	public static function config()
	{
		// define default value for global
		\dash\data::site_title(T_("Reza Mohiti"));
		\dash\data::site_desc(T_("Reza Mohiti"));
		\dash\data::site_slogan(T_("programer;)"));
		\dash\data::page_desc(\dash\data::site_desc(). ' | '. \dash\data::site_slogan());
		// we dont use js
		\dash\data::include_js(false);
		\dash\data::include_css(false);
	}
}
?>