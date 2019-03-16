<?php
namespace content_i\food\edit;


class model
{
	public static function post()
	{

		$post             = [];
		$post['desc']     = \dash\request::post('desc');
		$post['date']     = \dash\request::post('date');
		$post['time']     = \dash\request::post('time');
		$post['title']    = \dash\request::post('title');
		$post['subtitle'] = \dash\request::post('subtitle');
		$post['cat']      = \dash\request::post('cat');
		$post['cat2']     = \dash\request::post('cat2');
		$post['size']     = \dash\request::post('size');


		$file = \dash\app\file::upload_quick('image');

		if($file)
		{
			$post['image'] = $file;
		}

		\lib\app\food::edit($post, \dash\request::get('id'));

		if(\dash\engine\process::status())
		{
			\dash\redirect::to(\dash\url::this());
		}

	}
}
?>