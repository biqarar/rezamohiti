<?php
namespace content_i\food\add;

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
		$post['avatar']   = \dash\request::post('avatar');

		\lib\app\food::add($post);
		\dash\redirect::to(\dash\url::this());
	}
}
?>