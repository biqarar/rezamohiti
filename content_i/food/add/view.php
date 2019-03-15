<?php
namespace content_i\food\add;

class view
{
	public static function config()
	{
		$countryList = \dash\utility\location\countres::$data;
		\dash\data::countryList($countryList);
		\dash\data::qariList(\lib\app\food::qari_list());
		\dash\data::typeList(\lib\app\food::type_list());
		\dash\data::readtypeList(\lib\app\food::readtype_list());


	}
}
?>