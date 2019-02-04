<?php
namespace Common\Table\Legacy;

use Common\Table\Base;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `publishing_widget` (
  `PublishingWidgetTypeID` int(10) UNSIGNED NOT NULL,
  `PublishingWidgetName` varchar(255) NOT NULL,
  `PublishingWidgetCustomName` varchar(255) DEFAULT NULL,
  `DefaultPermalinkBase` varchar(255) DEFAULT NULL,
  `ShowSharethisIcon` tinyint(4) NOT NULL DEFAULT '0',
  `Edited` tinyint(4) DEFAULT NULL,
  `Enabled` int(11) DEFAULT '1',
  `ShowTitle` tinyint(3) UNSIGNED DEFAULT NULL,
  `DefaultHtmlHeader` text,
  `HtmlHeadContent` text,
  `HtmlHeadType` int(10) UNSIGNED DEFAULT NULL,
  `CssStyle` text,
  `CssType` int(10) UNSIGNED DEFAULT NULL,
  `ThemeID` int(10) UNSIGNED DEFAULT NULL,
  `PermalinkID` int(10) UNSIGNED DEFAULT NULL,
  `ResourceID` int(10) UNSIGNED DEFAULT NULL,
  `Limit` int(10) UNSIGNED DEFAULT '0',
  `ShowCommentForm` int(11) DEFAULT NULL,
  `CommentFormCaptchaThemeID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/

class PublishingWidget extends Base
{
}
