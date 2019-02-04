<?php
namespace Common\Entity\Legacy;

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

use Common\Entity\Base;

classPublishingWidget extends Base
{
public $PublishingWidgetTypeID;         // int(10) UNSIGNED NOT NULL,
public $PublishingWidgetName;           // varchar(255) NOT NULL,
public $PublishingWidgetCustomName;     // varchar(255) DEFAULT NULL,
public $DefaultPermalinkBase;           // varchar(255) DEFAULT NULL,
public $ShowSharethisIcon;              //  int(11) NOT NULL,
public $Edited;                         //  tinyint(4) DEFAULT NULL,
public $Enabled;                        //  tinyint(4) NOT NULL,
public $ShowTitle;                      //  tinyint(3) UNSIGNED DEFAULT NULL,
public $DefaultHtmlHeader;              //  text,
public $HtmlHeadContent;                //  text,
public $HtmlHeadType;                   //  int(10) UNSIGNED DEFAULT NULL,
public $CssStyle;                       //  text,
public $CssType;                        //  int(10) UNSIGNED DEFAULT NULL,
public $ThemeID;                        //  int(10) UNSIGNED DEFAULT NULL,
public $PermalinkID;                    //  int(10) UNSIGNED DEFAULT NULL,
public $ResourceID;                     //  int(10) UNSIGNED DEFAULT NULL,
public $Limit;                          //  int(10) UNSIGNED DEFAULT '0',
public $ShowCommentForm;                //  int(11) DEFAULT NULL,
public $CommentFormCaptchaThemeID;      //  int(11) DEFAULT NULL
}
