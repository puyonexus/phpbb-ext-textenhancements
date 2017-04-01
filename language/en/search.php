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
    'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Log in to view your own posts.',
    'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Log in to view your unread posts.',
    'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Log in to view new posts since your last visit.',
));
