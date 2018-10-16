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

			$arr = [];
			$len = mb_strlen($text, 'UTF-8');
			$abjad_num = 0;
			for ($i = 0; $i < $len; $i++)
			{
				$h = mb_substr($text, $i, 1, 'UTF-8');
				if(trim($h))
				{
					$value = self::abjad($h);
					if($value === false)
					{
						\dash\notif::warn(T_("Invalid :h", ['h' => $h]));
						continue;
					}
					$abjad_num += $value;
					$arr[] = $h;
				}
			}
			\dash\data::abjadVal($abjad_num);
		}


	}


	public static function abjad($_h = null)
	{
		$abjad =
		[
			'ا' => 1,
			'ب' => 2,
			'ج' => 3,
			'د' => 4,
			'ه' => 5,
			'و' => 6,
			'ز' => 7,
			'ح' => 8,
			'ط' => 9,
			'ی' => 10,
			'ک' => 20,
			'ل' => 30,
			'م' => 40,
			'ن' => 50,
			'س' => 60,
			'ع' => 70,
			'ف' => 80,
			'ص' => 90,
			'ق' => 100,
			'ر' => 200,
			'ش' => 300,
			'ت' => 400,
			'ث' => 500,
			'خ' => 600,
			'ذ' => 700,
			'ض' => 800,
			'ظ' => 900,
			'غ' => 1000,
		];

		if($_h === null)
		{
			return $abjad;
		}
		else
		{
			if(array_key_exists($_h, $abjad))
			{
				return $abjad[$_h];
			}
			else
			{
				return false;
			}
		}

	}


}
?>
