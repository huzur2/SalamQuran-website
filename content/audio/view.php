<?php
namespace content\audio;

class view
{
	public static function config()
	{

		\dash\data::page_title(T_("Audio bank list"));


		\dash\data::page_pictogram('music');


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
			$args['status'] = \dash\request::get('status');
		}

		if(\dash\request::get('type'))
		{
			$args['type'] = \dash\request::get('type');
		}

		if(\dash\request::get('qari'))
		{
			$args['qari'] = \dash\request::get('qari');
		}

		if(\dash\request::get('readtype'))
		{
			$args['readtype'] = \dash\request::get('readtype');
		}

		if(\dash\request::get('filetype'))
		{
			$args['filetype'] = \dash\request::get('filetype');
		}

		if(\dash\request::get('country'))
		{
			$args['country'] = \dash\request::get('country');
		}

		if(\dash\request::get('quality'))
		{
			$args['quality'] = \dash\request::get('quality');
		}


		$sortLink  = \dash\app\sort::make_sortLink(\lib\app\audiobank::$sort_field, \dash\url::this());
		$dataTable = \lib\app\audiobank::list(\dash\request::get('q'), $args);

		\dash\data::sortLink($sortLink);
		\dash\data::dataTable($dataTable);

		$check_empty_datatable = $args;
		unset($check_empty_datatable['sort']);
		unset($check_empty_datatable['order']);

		// set dataFilter
		$dataFilter = \dash\app\sort::createFilterMsg($search_string, $check_empty_datatable);
		\dash\data::dataFilter($dataFilter);



	}
}
?>