<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2020 Joomdev, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');
 
/**
 * Script file of HelloWorld component
 */
class mod_flyoutInstallerScript
{
	/**
	 * method to install the component
	 *
	 * @return void
	 */
	function install($parent) 
	{
		// $parent is the class calling this method
		$path = JPATH_SITE . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "flyout";
		$mode = 0755;
		JFolder::create($path, $mode);
	}
 
	/**
	 * method to uninstall the component
	 *
	 * @return void
	 */
	function uninstall($parent) 
	{
		
	}
 
	/**
	 * method to update the component
	 *
	 * @return void
	 */
	function update($parent) 
	{
		// $parent is the class calling this method
	}
 
	/**
	 * method to run before an install/update/uninstall method
	 *
	 * @return void
	 */
	function preflight($type, $parent) 
	{
		// $parent is the class calling this method
		// $type is the type of change (install, update or discover_install)
	}
 
	/**
	 * method to run after an install/update/uninstall method
	 *
	 * @return void
	 */
	function postflight($type, $parent) 
	{
		// $parent is the class calling this method
		// $type is the type of change (install, update or discover_install)
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/camera.png', JPATH_SITE . '/images/flyout/camera.png');
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/home.png', JPATH_SITE . '/images/flyout/home.png');
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/id_card.png', JPATH_SITE . '/images/flyout/id_card.png');
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/ipod.png', JPATH_SITE . '/images/flyout/ipod.png');
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/mail.png', JPATH_SITE . '/images/flyout/mail.png');
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/rss.png', JPATH_SITE . '/images/flyout/rss.png');
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/search.png', JPATH_SITE . '/images/flyout/search.png');
			JFile::copy(JPATH_SITE . '/modules/mod_flyout/images/icons/youtube.png', JPATH_SITE . '/images/flyout/youtube.png');
	}
}