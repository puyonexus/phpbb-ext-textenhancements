<?php
/**
*
* @package phpBB Extension - Acme Demo
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Messages
	'LOGIN_CHECK_PM'			=> 'Log in to check your messages.',
	'NOTIFICATION_PM'			=> '<strong>Message</strong> from %1$s:',
	'NOTIFICATION_REPORT_PM'	=> '<strong>Message reported</strong> by %1$s:',
	'POSTING_PRIVATE_MESSAGE'	=> 'Composing message',
	'PRIVATE_MESSAGE'			=> 'Message',
	'PRIVATE_MESSAGES'			=> 'Messages',
	'SEND_PRIVATE_MESSAGE'		=> 'Send message',
	'TOO_LARGE_MAX_RECIPIENTS'	=> 'The value of <strong>Maximum number of allowed recipients per message</strong> setting you entered is too large.',
	'TOO_SMALL_MAX_RECIPIENTS'	=> 'The value of <strong>Maximum number of allowed recipients per message</strong> setting you entered is too small.',
	'TOTAL_PMS'					=> array(
		1	=> '%d message in total',
		2	=> '%d messages in total',
	),
	'VIEWING_PRIVATE_MESSAGES'	=> 'Viewing messages',
	
	'BUTTON_PM'					=> 'Message',
	'BUTTON_PM_NEW'				=> 'New Message',
	'BUTTON_PM_REPLY'			=> 'Send Reply',
	'NOTIFICATION_PM'			=> '<strong>Message</strong> from %1$s:',
	'NOTIFICATION_REPORT_PM'	=> '<strong>Message reported</strong> by %1$s:',
	'PM'						=> 'Message',
	
	// Log in
	'LOGIN'						=> 'Log in',
	'LOGIN_CONFIRMATION'		=> 'Login confirmation',
	'LOGIN_INFO'				=> 'In order to log in you must be registered. Registering takes only a few moments but gives you increased capabilities. The board administrator may also grant additional permissions to registered users. Before you register please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.',
	'LOGIN_VIEWFORUM'			=> 'Log in to view this forum.',
	'LOGIN_EXPLAIN_EDIT'		=> 'Log in to edit posts in this forum.',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> 'Log in to view the online list.',
	'LOGIN_REQUIRED'			=> 'Log in to perform this action.',
	
	// Log out
	'LOGOUT'		=> 'Log out',
	'LOGOUT_USER'	=> 'Log out [ %s ]',
	
	// Account
	'PROFILE'		=> 'Account',
	'VIEWING_UCP'	=> 'Viewing account',
	
	// Select & Deselect
	'DELETE_MARKED'	=> 'Delete selected',
	'MARK'			=> 'Select',
	'MARK_ALL'		=> 'Select all',
	'UNMARK_ALL'	=> 'Deselect all',
));
