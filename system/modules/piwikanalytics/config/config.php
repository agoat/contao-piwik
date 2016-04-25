<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package  	 Piwik Analytics
 * @author   	 Arne Stappen
 * @license  	 LGPL-3.0+ 
 * @copyright	 Arne Stappen 2011-2015
 */
 
 
/**
 * Add Hooks
 */

$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] 	= array('Piwik', 'PiwikAnalytics');
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] 			= array('Piwik', 'validatePath');

