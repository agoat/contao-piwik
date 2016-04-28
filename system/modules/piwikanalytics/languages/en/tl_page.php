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
 * Legends
 */
$GLOBALS['TL_LANG']['tl_page']['piwik_legend'] = 'Piwik';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_page']['piwikEnabled'] 			= array('Enable Piwik statistics', 'Adds the Piwik javascript tag to the site.');
$GLOBALS['TL_LANG']['tl_page']['piwikIgnoreMembers'] 	= array('Ignore members', 'Don´t track members who are logged in into the Contao frontend.');
$GLOBALS['TL_LANG']['tl_page']['piwikIgnoreUsers'] 		= array('Ignore users', 'Don´t track users who are logged in into the Contao backend.');
$GLOBALS['TL_LANG']['tl_page']['piwikPath'] 			= array('URL of the Piwik installation', "The absolute URL to Piwik installation (with http(s)://).");
$GLOBALS['TL_LANG']['tl_page']['piwikSiteID'] 			= array('Site ID', 'The ID of the website created in Piwik.');
$GLOBALS['TL_LANG']['tl_page']['piwikPageTitle'] 		= array('Use the page title', 'Use the page title (Meta information) instead of the page name.');
$GLOBALS['TL_LANG']['tl_page']['piwikAddDomain'] 		= array('Add the domain name', 'Add the domain name to the page title (domain/pagetitle).');
$GLOBALS['TL_LANG']['tl_page']['piwikAddSiteStructure'] = array('Map the site structure', 'Add the site structure to the page title (rootpage/parentpage/pagetitle).');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarLanguage'] 	= array('Add site language (as Custom Variable)', 'Adds a custom variable with the name \'Language\' and the current page language as value.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarUserName']	= array('Add member name (as Custom Variable)', 'Adds a custom variable with the name \'User\' and the name of the logged in user or \'Anonymous\' for visitors as value.');
$GLOBALS['TL_LANG']['tl_page']['piwikDoNotTrack'] 		= array('React to \'Do Not Track\' request', 'Respect if visitor do not wish to be tracked.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarUseCat'] 	= array('Add a page category or custom variable', 'Adds a custom variable with the name \'Category\' and the name you can set on the settings for regular pages and/or a free defined custom variable by yourself.');
$GLOBALS['TL_LANG']['tl_page']['piwikCookieDomains'] 	= array('Track visitors across all subdomains', 'Tracks visitors as unique if they visit multiple subdomains (e.g. a.domain.tld and b.domain.tld).');
$GLOBALS['TL_LANG']['tl_page']['piwikDomains'] 			= array('Local Domains', 'A comma separated list of Domains that are treated as local Domains (Links to these domains will not tracked as Outlinks).');
$GLOBALS['TL_LANG']['tl_page']['piwikSubdomains'] 		= array('Include all Subdomains as local', 'Treat all Subdomains as local Domains (Links to subdomains will not tracked as Outlinks).');
$GLOBALS['TL_LANG']['tl_page']['piwik404'] 				= array('Show reference to <em>404 Page not found</em> seperate', 'You have the possibility to show references to <em>404 Page not found</em> in the piwik statistic seperate. So you can find "dead links" easier.');
$GLOBALS['TL_LANG']['tl_page']['piwikAllContentImpressions'] 		= array('Track all content impressions', 'You can enable to track piece of content (e.g. advertising). Mark each content block with a [data-track-content] HTML attribute or [piwikTrackContent] CSS class. View Piwik Documentation about content tracking.');
$GLOBALS['TL_LANG']['tl_page']['piwikVisibleContentImpressions']	= array('Track visible content impressions', 'This is mainly the same as "Track all content impression" but it will only track visible content blocks or when they become visible (e.g. when they in in the viewport after scrolling down).');
$GLOBALS['TL_LANG']['tl_page']['piwikExtensions'] 		= array('Download extensions', 'List of file extensions that will be tracked as a download.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarVisitName'] = array('Custom variable name', 'Enter the name for to add a custom variable with the scope \'visit\'.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarVisitValue']= array('Custom variable value', 'Enter a value for the custom variable (with "+ javascript command +" you can add javascript variables e.g. "+document.domain+").');

$GLOBALS['TL_LANG']['tl_page']['piwikCatEnabled'] 		= array('Add category or custom variables', 'Adds a custom variable with the name \'Category\' and/or a free defined custom variable by yourself.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarCatValue'] 	= array('Category name', 'Enter the value for the page category.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarPageName'] 	= array('Custom variable name', 'Enter the name for to add a custom variable with the scope \'page\'.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarPageValue'] = array('Custom variable value', 'Enter a value for the custom variable (with "+ javascript command +" you can add javascript variables e.g. "+document.domain+").');

