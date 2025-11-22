<?php
/**
 * ------------------------------------------------------------------------
 * Asset - Parallax Scroll
 * ------------------------------------------------------------------------
 * Copyright (C) 2014-2016 LogicHunt, All Rights Reserved.
 * license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: LogicHunt
 * Websites: http://logichunt.com
 * ------------------------------------------------------------------------
 */
defined('_JEXEC') or die('Restricted access');

$app = Joomla\CMS\Factory::getApplication();
$doc = Joomla\CMS\Factory::getDocument();
$basepath = Joomla\CMS\Uri\Uri::root(true).'/modules/' . $module->module . '/assets/';



// Load Main StyleSheet
$style_name = 'style.css';
$doc->addStyleSheet($basepath.'css/'.$style_name);

//Load Override StyleSheet
$templatepath = 'templates/'.$app->getTemplate().'/css/'.$module->module.'.min.css';

if(file_exists(JPATH_SITE . '/' . $templatepath)) {
	$doc->addStyleSheet(JURI::root(true).'/'.$templatepath);
}

//script
// Add Dependency
Joomla\CMS\HTML\HTMLHelper::_('jquery.framework');

