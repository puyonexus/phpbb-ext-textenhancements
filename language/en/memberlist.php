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
	// Log in
	'LOGIN_EXPLAIN_TEAM'		=> 'Log in to view the team listing.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Log in to access the memberlist.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Log in to search users.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Log in to view profiles.',
));
