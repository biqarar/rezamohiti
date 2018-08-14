<?php
namespace content\nationalcode;


class view
{
	public static function config()
	{
		\dash\data::page_title(T_("Check national code"));
		\dash\data::page_desc(T_("Check or generate national code"));

		$check = null;
		if(\dash\request::get('nationalcode'))
		{

			$check = false;
			if(\dash\utility\filter::nationalcode(\dash\request::get('nationalcode')))
			{
				$check = true;
			}
		}

		\dash\data::checkNationalCode($check);

		if(\dash\request::get('new'))
		{
			self::make();
		}
		if(\dash\request::get('api'))
		{
			$result = [];
			$result['nationalcode'] = \dash\request::get('nationalcode');
			$result['check'] = $check;
			$result['generate'] = \dash\data::newNationalcode();
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
			\dash\code::boom();
		}
	}

	public static function make()
	{
		$number = [];
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::myRnd();
		$number[] = self::getLastNumber($number);
		$number = implode('', $number);

		\dash\data::newNationalcode($number);

	}

	public static function myRnd()
	{
		return rand(1,9);
	}

	public static function getLastNumber($_national_code_array)
	{
		$check = false;

		$split      = $_national_code_array;
		$main_place = [];
		$i          = 10;
		$p          = 0;

		foreach ($split as $n => $value)
		{
			$main_place[$i] = $value;

			if ($i != 1)
			{
				$p = $p + ($value * $i);
			}
			$i--;
		}

		$b = fmod($p, 11);

		if ($b < 2)
		{
			return $b;
		}
		else
		{
			return intval(11 - $b);
		}
	}
}
?>
