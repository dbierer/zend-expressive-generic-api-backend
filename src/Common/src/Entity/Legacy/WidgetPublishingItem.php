<?php
namespace Common\Entity\Legacy;

/**
 * Models a single row from this database table:
 *
CREATE TABLE `widget_publishing_item` (
  `PublishingItemID` int(11) NOT NULL,
  `ThemeID` int(11) DEFAULT NULL,
  `ShowTitle` int(11) DEFAULT NULL,
  `ShowShareIcon` int(11) DEFAULT NULL,
  `ShowCommentForm` int(11) DEFAULT NULL,
  `CommentFormCaptchaThemeID` int(11) DEFAULT NULL,
  `CssType` int(11) NOT NULL,
  `HtmlHeadType` int(11) NOT NULL,
  `HtmlHeadContent` text NOT NULL,
  `WidgetItemID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

use Common\Entity\Base;

classWidgetPublishingItem extends Base
{
public $PublishingItemID;           //  int(11) NOT NULL,
public $ThemeID;                    //  int(11) DEFAULT NULL,
public $ShowTitle;                  //  int(11) DEFAULT NULL,
public $ShowShareIcon;              //  int(11) DEFAULT NULL,
public $ShowCommentForm;            //  int(11) DEFAULT NULL,
public $CommentFormCaptchaThemeID;  //  int(11) DEFAULT NULL,
public $CssType;                    //  int(11) NOT NULL,
public $HtmlHeadType;               //  int(11) NOT NULL,
public $HtmlHeadContent;            //  text NOT NULL,
public $WidgetItemID;               //  int(11) DEFAULT NULL
}
