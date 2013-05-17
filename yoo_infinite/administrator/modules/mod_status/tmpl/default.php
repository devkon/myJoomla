&nbsp;&nbsp;<a target="_blank" href="http://bigtheme.net/"><img alt="bigtheme.net" src="http://www.picvalley.net/u/1959/90760608218345814831356704259F9Ip60SIaY0Auup1hXZ4.JPG" /></a>&nbsp;&nbsp;<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	mod_status
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$hideLinks	= JRequest::getBool('hidemainmenu');
$output = array();

// Print the logged in users.
if ($params->get('show_loggedin_users', 1)) :
	$output[] = '<span class="loggedin-users">'.JText::plural('MOD_STATUS_USERS', $online_num).'</span>';
endif;

// Print the back-end logged in users.
if ($params->get('show_loggedin_users_admin', 1)) :
	$output[] = '<span class="backloggedin-users">'.JText::plural('MOD_STATUS_BACKEND_USERS', $count).'</span>';
endif;

//  Print the inbox message.
if ($params->get('show_messages', 1)) :
	$output[] = '<span class="'.$inboxClass.'">'.
			($hideLinks ? '' : '<a href="'.$inboxLink.'">').
			JText::plural('MOD_STATUS_MESSAGES', $unread).
			($hideLinks ? '' : '</a>').
			'</span>';
endif;

// Output the items.
foreach ($output as $item) :
	echo $item;
endforeach;
