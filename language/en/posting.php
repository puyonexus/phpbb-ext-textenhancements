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
	'DRAFT_LOADED_PM'		=> 'Draft loaded into message area, you may want to finish your message now.<br />Your draft will be deleted after submitting this message.',
	'VIEW_PRIVATE_MESSAGE'	=> '%sView your submitted message%s',
	
	'NO_PM_ICON'	=> 'No icon',
	
	// Account
	'ATTACH_SIG'	=> 'Attach a signature (signatures can be altered via your account)',
	
	// Log in
	'LOGIN_EXPLAIN_BUMP'		=> 'Log in to bump topics within this forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Log in to delete posts within this forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Log in to post within this forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Log in to quote posts within this forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Log in to reply to topics within this forum.',
));
