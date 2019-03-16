<?php
namespace content_i\food\edit;


class controller
{
	public static function routing()
	{
		if(!\dash\user::login())
		{
			\dash\redirect::to(\dash\url::kingdom(). '/enter?referer='. \dash\url::pwd(), 'direct');
			return;
		}
	}
}
?>