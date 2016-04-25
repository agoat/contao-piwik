
CREATE TABLE `tl_page` (
  `piwikEnabled` char(1) NOT NULL default '',
  `piwikPath` varchar(255) NOT NULL default '',
  `piwikSiteID` varchar(4) NOT NULL default '',
  `piwikIgnoreAdmins` char(1) NOT NULL default '0',
  `piwikIgnoreUsers` char(1) NOT NULL default '0',
  `piwikCustVarLanguage` char(1) NOT NULL default '0',
  `piwikCustVarUserStatus` char(1) NOT NULL default '0',
  `piwikPageTitle` char(1) NOT NULL default '0',
  `piwikAddDomain` char(1) NOT NULL default '0',
  `piwikAddSiteStructure` char(1) NOT NULL default '0',
  `piwikDoNotTrack` char(1) NOT NULL default '0',
  `piwikCustVarUseCat` char(1) NOT NULL default '0',
  `piwik404` char(1) NOT NULL default '0',
  `piwikCookieDomains` char(1) NOT NULL default '0',
  `piwikDomains` varchar(255) NOT NULL default '',
  `piwikSubdomains` char(1) NOT NULL default '0',
  `piwikExtensions` text NULL,
  `piwikCustVarVisitName` varchar(200) NOT NULL default '',
  `piwikCustVarVisitValue` varchar(200) NOT NULL default '',
  `piwikCatEnabled` char(1) NOT NULL default ''
  `piwikCustVarCatValue` varchar(200) NOT NULL default '',
  `piwikCustVarPageName` varchar(200) NOT NULL default '',
  `piwikCustVarPageValue` varchar(200) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
