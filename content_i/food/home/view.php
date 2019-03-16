<?php
namespace content_i\food\home;


class view
{
	public static function config()
	{

		\dash\data::page_title(T_("Food list"));


		\dash\data::page_pictogram('birthday-cake');

		\dash\data::badge_link(\dash\url::this(). '/add');
		\dash\data::badge_text(T_('Add'));

		$search_string            = \dash\request::get('q');
		if($search_string)
		{
			\dash\data::page_title(\dash\data::page_title(). ' | '. T_('Search for :search', ['search' => $search_string]));
		}

		$args =
		[
			'sort'  => \dash\request::get('sort'),
			'order' => \dash\request::get('order'),
		];

		if(!$args['order'])
		{
			$args['order'] = 'ASC';
		}


		if(!$args['sort'])
		{
			$args['sort'] = 'sort';
		}

		if(\dash\request::get('status'))
		{
			$args['food.status'] = \dash\request::get('status');
		}

		if(\dash\request::get('title'))
		{
			$args['food.title'] = \dash\request::get('title');
		}

		if(\dash\request::get('subtitle'))
		{
			$args['food.subtitle'] = \dash\request::get('subtitle');
		}

		if(\dash\request::get('cat'))
		{
			$args['food.cat'] = \dash\request::get('cat');
		}

		if(\dash\request::get('cat2'))
		{
			$args['food.cat2'] = \dash\request::get('cat2');
		}

		if(\dash\request::get('user'))
		{
			$args['food.user_id'] = \dash\request::get('user');
		}

		if(\dash\request::get('size'))
		{
			$args['food.size'] = \dash\request::get('size');
		}

		if(\dash\request::get('date'))
		{
			$mydate = date("Y-m-d", strtotime(\dash\request::get('date')));
			$args['1.1'] = [' = 1.1  AND', "date(food.datetime) = date('$mydate') "];
		}

		if(\dash\user::id())
		{
			if(intval(\dash\user::id()) === 1)
			{
				// i can see all and other user can see me and if login can see only self list
			}
			else
			{
				$args['user_id'] = \dash\user::id();
			}
		}
		$sortLink  = \dash\app\sort::make_sortLink(\lib\app\food::$sort_field, \dash\url::this());
		$dataTable = \lib\app\food::list(\dash\request::get('q'), $args);

		\dash\data::sortLink($sortLink);
		\dash\data::dataTable($dataTable);

		$check_empty_datatable = $args;
		unset($check_empty_datatable['sort']);
		unset($check_empty_datatable['order']);
		if(isset($check_empty_datatable['1.1']))
		{
			$check_empty_datatable['date'] = \dash\datetime::fit(\dash\request::get('date'), true, 'date' );
		}
		unset($check_empty_datatable['1.1']);

		if(!empty($check_empty_datatable))
		{
			$check_empty_datatable = [':' => ')'];
		}

		// set dataFilter
		$dataFilter = \dash\app\sort::createFilterMsg($search_string, $check_empty_datatable);
		\dash\data::dataFilter($dataFilter);



	}
}
?>