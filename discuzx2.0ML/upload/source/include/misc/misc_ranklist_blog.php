<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

loadcache('click');
$clicks = empty($_G['cache']['click']['blogid'])?array():$_G['cache']['click']['blogid'];

$bloglist = '';
$orderby = in_array($_G['gp_orderby'], array('thisweek', 'thismonth', 'today', 'all')) ? $_G['gp_orderby'] : '';
$navname = $_G['setting']['navs'][8]['navname'] . ' - ' . $_G['setting']['bbname'];
switch($_G['gp_view']) {
	case 'heats':
		$view = 'hot';
		$navtitle = lang('ranklist/navtitle', 'ranklist_title_blog_heat').' - '.$navname;
		$metakeywords = lang('ranklist/navtitle', 'ranklist_title_blog_heat');
		$metadescription = lang('ranklist/navtitle', 'ranklist_title_blog_heat');
		break;
	case 'replies':
		$view = 'replynum';
		$navtitle = lang('ranklist/navtitle', 'ranklist_title_blog_reply').' - '.$navname;
		$metakeywords = lang('ranklist/navtitle', 'ranklist_title_blog_reply');
		$metadescription = lang('ranklist/navtitle', 'ranklist_title_blog_reply');
		break;
	case 'views':
		$view = 'viewnum';
		$navtitle = lang('ranklist/navtitle', 'ranklist_title_blog_view').' - '.$navname;
		$metakeywords = lang('ranklist/navtitle', 'ranklist_title_blog_view');
		$metadescription = lang('ranklist/navtitle', 'ranklist_title_blog_view');
		break;
	case 'sharetimes':
		$view = 'sharetimes';
		$navtitle = lang('ranklist/navtitle', 'ranklist_title_blog_share').' - '.$navname;
		$metakeywords = lang('ranklist/navtitle', 'ranklist_title_blog_share');
		$metadescription = lang('ranklist/navtitle', 'ranklist_title_blog_share');
		break;
	case 'favtimes':
		$view = 'favtimes';
		$navtitle = lang('ranklist/navtitle', 'ranklist_title_blog_favorite').' - '.$navname;
		$metakeywords = lang('ranklist/navtitle', 'ranklist_title_blog_favorite');
		$metadescription = lang('rankilist/template', 'ranklist_title_blog_favorite');
		break;
	default:
		if($clicks[$_G['gp_view']]) {
			$view = 'click'.$_G['gp_view'];
			$navtitle = lang('ranklist/navtitle', 'ranklist_title_blog_'.$_G['gp_view']).' - '.$navname;
			$metakeywords = lang('ranklist/navtitle', 'ranklist_title_blog_'.$_G['gp_view']);
			$metadescription = lang('ranklist/navtitle', 'ranklist_title_blog_'.$_G['gp_view']);
		} else {
			$view = 'hot';
			$_G['gp_view'] = 'heats';
		}
}

$bloglist = getranklistdata($type, $view, $orderby);
$lastupdate = $_G['lastupdate'];
$nextupdate = $_G['nextupdate'];

include template('diy:ranklist/blog');

?>