<?php
/**
 *
 * Text Enhancements. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Puyo Nexus
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace puyonexus\textenhancements\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Text Enhancements Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'load_language_on_setup',
		);
	}
	
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'puyonexus/textenhancements',
			'lang_set' => array(
				'common',
				'memberlist',
				'posting',
				'ucp',
				'viewtopic'),
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
