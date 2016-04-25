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
$GLOBALS['TL_LANG']['tl_page']['piwikEnabled'] 			= array('Piwik Statistik aktivieren', 'F&uuml;gt der Internetseite den Piwik-Javascript-Tag hinzu.');
$GLOBALS['TL_LANG']['tl_page']['piwikIgnoreUsers']	 	= array('Benutzer ignorieren', 'W&auml;hlen Sie aus, ob Benutzer, die im Backend eingeloggt sind, in der Statistik ber&uuml;cksichtigt werden.');
$GLOBALS['TL_LANG']['tl_page']['piwikIgnoreMembers'] 	= array('Mitglieder ignorieren', 'W&auml;hlen Sie aus, ob Mitglieder, die im Frontend eingeloggt sind, in der Statistik ber&uuml;cksichtigt werden.');
$GLOBALS['TL_LANG']['tl_page']['piwikPath'] 			= array('URL der Piwik-Installation', "Bitte geben Sie die absolute URL zur Piwik-Installation mit Protokoll (z.B. <em>http://</em>) ein.");
$GLOBALS['TL_LANG']['tl_page']['piwikSiteID'] 			= array('Seiten-ID', 'Die ID der Seite, die in Piwik angelegt wurde.');
$GLOBALS['TL_LANG']['tl_page']['piwikPageTitle'] 		= array('Seiten-Titel verwenden', 'Verwendet den Seitentitel (Meta-Information) anstatt des Seitennames in der Statistik.');
$GLOBALS['TL_LANG']['tl_page']['piwikAddDomain'] 		= array('Den Domainnamen hinzufügen', 'Fügt den Domainnamen zum Seiten-Titel hinzu (Domainname/Seiten-Titel).');
$GLOBALS['TL_LANG']['tl_page']['piwikAddSiteStructure'] = array('Seitenstruktur abbilden', 'Fügt die Seitenstruktur zum Seiten-Titel hinzu (Startpunkt der Webseite/Übergeordnete Seite/Seiten-Titel).');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarLanguage'] 	= array('Die Sprache hinzufügen', 'Fügt eine Benutzerdefinierte Variable mit dem Namen \'Language\' und der aktuellen Sprache der Seite als Wert hinzu.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarUserName']	= array('Den Mitgliedsnamen hinzufügen', 'Fügt eine Benutzerdefinierte Variable mit dem Namen \'User\' und den Namen des angemeldeten Mitglieds oder \'Anonymous\' für Besucher als Wert hinzu.');
$GLOBALS['TL_LANG']['tl_page']['piwikDoNotTrack'] 		= array('Auf \'Do Not Track\' Anforderung reagieren', 'Berücksichtige wenn ein Benutzer nicht getrackt werden will.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarUseCat'] 	= array('Eine Seiten Kategorie und/oder Benutzerdefinierte Variable hinzufügen', 'Fügt eine Benutzerdefinierte Variable mit dem Namen \'Category\' und dem Kategorienamen und/oder eine Benutzerdefinierte Variable, die in den Einstellungen für Reguläre Seiten bestimmt werden können, hinzu.');
$GLOBALS['TL_LANG']['tl_page']['piwikCookieDomains'] 	= array('Besucher über mehrere Subdomains verfolgen', 'Besucher werden über mehrere Subdomains hinweg als ein Besucher getrackt (z.B. a.domain.tld und b.domain.tld).');
$GLOBALS['TL_LANG']['tl_page']['piwikDomains'] 			= array('Lokale Domains', 'Eine komma separierte Liste mit Domainnamen, die als lokale Domain behandelt werden sollen (Links zu diesen Domains werden nicht als abgehende externe Links registriert).');
$GLOBALS['TL_LANG']['tl_page']['piwikSubdomains'] 		= array('Alle Subdomains als lokal ansehen', 'Es werden alle Subdomains als lokale Domain behalndelt (Links zu Subdomains werden nicht als abgehende externe Links registriert).');
$GLOBALS['TL_LANG']['tl_page']['piwik404'] 				= array('Verweis auf <em>404 Seite nicht gefunden</em> gesondert anzeigen', 'Sie haben die M&ouml;glichkeit Verweise auf nicht gefundene Seiten (Seitentyp: <em>404 Seite nicht gefunden</em>) sich in der Piwik-Statistik mit den Verweisen auf diese Seiten gesondert anzeigen zu lassen. So k&ouml;nnen Sie "tote Links" auf Ihrer Internetseite leichter ausfindig zu machen.');
$GLOBALS['TL_LANG']['tl_page']['piwikAllContentImpressions'] 		= array('Verfolge alle Inhaltsimpressionen', 'Hiermit kann die Anzeige von Inhaltselementen (z.B. Werbung) verfolgt werden. Dazu ist jedes zu verfolgende Element mit dem HTML Attribut [data-track-content] oder mit der CSS Klasse [piwikTrackContent] zu kennzeichnen. Für weitere Informationen zur Inhaltsverfolgung(Content tracking) bitte in der Dokumentation von Piwik nachsehen.');
$GLOBALS['TL_LANG']['tl_page']['piwikVisibleContentImpressions']	= array('Verfolge sichtbare Inhaltsimpressionen', 'Dies ist quasi das selbe wie "Verfolge alle Inhaltsimpressionen. Es werden hierbei nur die sichtbaren Inhaltsblöcke gezählt bzw. wenn dann wenn sie sichtbar werden (z.B. wenn Sie beim scrollen angezeigt werden).');
$GLOBALS['TL_LANG']['tl_page']['piwikExtensions'] 		= array('Dateiendungen f&uuml;r Download-Liste', 'Hier k&ouml;nnen Sie die kommagetrennte Liste der Dateiendungen anpassen, die in der Piwik-Statistik als Download gewertet werden.<br />Lassen Sie das Feld leer, um die Standard-Endungen wieder herzustellen.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarVisitName'] = array('Name für Benutzerdefinierte Variable', 'Hier kann der Name für eine Benutzerdefinierte Variable, die für den Besucher aufgezeichnet wird, eingegeben werden.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarVisitValue']= array('Wert für Benutzerdefinierte Variable', 'Hier den Wert für die Benutzerdefinierte Variable eingeben (mit "+ Javascript-Befehl +" kann eine Javascript-Variable verwendet werden, z.B. "+document.domain+").');

$GLOBALS['TL_LANG']['tl_page']['piwikCatEnabled'] 		= array('Eine Seiten Kategorie und/oder Benutzerdefinierte Variable hinzufügen', 'Fügt eine Benutzerdefinierte Variable mit dem Namen \'Category\' und dem Kategorienamen und/oder eine Benutzerdefinierte Variable hinzu.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarCatValue'] 	= array('Kategorie Name', 'Hier kann ein Kategoriename eingegeben werden.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarPageName'] 	= array('Name für Benutzerdefinierte Variable', 'Hier kann der Name für eine Benutzerdefinierte Variable, die für jeden Seitenaufruf aufgezeichnet wird, eingegeben werden.');
$GLOBALS['TL_LANG']['tl_page']['piwikCustVarPageValue'] = array('Wert für Benutzerdefinierte Variable', 'Hier den Wert für die Benutzerdefinierte Variable eingeben (mit "+ Javascript-Befehl +" kann eine Javascript-Variable verwendet werden, z.B. "+document.domain+").');

