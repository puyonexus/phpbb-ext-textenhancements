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
	// Account
	'EMAIL_REMIND'		=> 'This must be the email address associated with your account. If you have not changed this via your account then it is the email address you registered your account with.',
	'LOGIN_EXPLAIN_UCP'	=> 'Log in to access your account.',
	'RETURN_UCP'		=> '%sReturn to your account%s',
	'UCP'				=> 'Account',
	'UCP_WELCOME'		=> 'Welcome to your account. From here you can monitor, view and update your profile, preferences, subscribed forums and topics. You can also send messages to other users (if permitted). Please ensure you read any announcements before continuing.',
	
	// Messages
	'ALLOW_PM'							=> 'Allow users to send you messages',
	'DELETE_MESSAGE_CONFIRM'			=> 'Are you sure you want to delete this message?',
	'NOTIFICATION_TYPE_PM'				=> 'Someone sends you a message',
	'NOTIFY_ON_PM'						=> 'Notify me on new messages',
	'NOT_MOVED_MESSAGES'				=> array(
		1	=> 'You have %d message currently on hold because of full folder.',
		2	=> 'You have %d messages currently on hold because of full folder.',
	),
	'NO_AUTH_DELETE_MESSAGE'			=> 'You are not authorised to delete messages.',
	'NO_AUTH_EDIT_MESSAGE'				=> 'You are not authorised to edit messages.',
	'NO_AUTH_FORWARD_MESSAGE'			=> 'You are not authorised to forward messages.',
	'NO_AUTH_GROUP_MESSAGE'				=> 'You are not authorised to send messages to groups.',
	'NO_AUTH_READ_HOLD_MESSAGE'			=> 'You are not authorised to read messages that are on hold.',
	'NO_AUTH_READ_MESSAGE'				=> 'You are not authorised to read messages.',
	'NO_AUTH_SEND_MESSAGE'				=> 'You are not authorised to send messages.',
	'NO_EDIT_READ_MESSAGE'				=> 'Message cannot be edited because it has already been read.',
	'NO_MESSAGE'						=> 'Message could not be found.',
	'PM_MARK_ALL_READ_SUCCESS'			=> 'All messages in this folder have been marked read',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> 'Some users couldn’t be added as they do not have permission to read messages.',
	'PM_USERS_REMOVED_NO_PM'			=> 'Some users couldn’t be added as they have disabled message receipt.',
	'REPORT_PM'							=> 'Report message',
	'RULE_REMOVED_MESSAGES'				=> array(
		1	=> '%d message was removed due to private message filters.',
		2	=> '%d messages were removed due to private message filters.',
	),
	'TOO_MANY_RECIPIENTS'				=> 'You tried to send a message to too many recipients.',
	'UCP_PM'							=> 'Messages',
	
	'FORWARD_PM'			=> 'Forward message',
	'PM_ICON'				=> 'Message icon',
	'RULE_LIMIT_REACHED'	=> 'You cannot add more message rules. You have reached the maximum number of rules.',
	'UCP_PM_DRAFTS'			=> 'Manage message drafts',
	'VIEW_NEXT_PM'			=> 'Next message',
	'VIEW_PREVIOUS_HISTORY'	=> 'Previous message in history',
	'VIEW_PREVIOUS_PM'		=> 'Previous message',
	
	// Board preferences
	'SHOW_EMAIL'				=> 'Users can contact you by email',
	'ADMIN_EMAIL'				=> 'Administrators can email you information',
	'HIDE_ONLINE'				=> 'Hide your online status',
	'BOARD_DATE_FORMAT'			=> 'My date format',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'The syntax used is identical to the PHP <a href="http://www.php.net/date">date()</a> function.',
	'BOARD_LANGUAGE'			=> 'Language',
	'BOARD_STYLE'				=> 'Board style',
	'BOARD_TIMEZONE'			=> 'Timezone',
	'BOARD_DATE_FORMAT'			=> 'Date format',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'The syntax used with the Custom option is identical to the PHP <a href="http://www.php.net/date">date()</a> function.',
	
	'DEFAULT_ADD_SIG'			=> 'Attach your signature by default',
	'DEFAULT_NOTIFY'			=> 'Be notified upon replies by default',
	
	// Friends & foes
	'FRIENDS_EXPLAIN'	=> 'Friends enable you quick access to members you communicate with frequently. If the board style has relevant support any posts made by a friend may be highlighted.',
	'FOES_EXPLAIN'		=> 'Foes are users which will be ignored by default. Posts by these users will not be fully visible. Messages from foes are still permitted. Please note that you cannot ignore moderators or administrators.',

	// Registration
	'CONFIRMATION'				=> 'Registration confirmation',

	// Log in
	'BACK_TO_LOGIN'				=> 'Back to log in screen',
));
