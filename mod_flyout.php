<?php
/*------------------------------------------------------------------------
# mod_flyout - JD Flyout Tabs for Joomla 3.x v1.1.0
# ------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
-------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
$document = JFactory::getDocument();
JHtml::_('bootstrap.framework');
// Import the file / foldersystem
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');
$LiveSite 		= JURI::base();
$document->addScript(JURI::root().'modules/mod_flyout/js/jquery.colorbox.js');
$document->addStyleSheet(JURI::root().'modules/mod_flyout/css/colorbox.css');
$document->addStyleSheet(JURI::root().'modules/mod_flyout/css/flyout.css');
$imagePosition 	= $params->get('imagePosition', '20px' );
$imageTopPosition = $params->get('imageTopPosition', '0px' );
$position 		= $params->get('position', 'fixed' );
$link1 			= $params->get('link1',1);
$pop1Width		= $params->get('pop1Width','400');
$pop1Height		= $params->get('pop1Height','400');
$image1url		= $params->get( 'image1url', '' );
$image1title	= $params->get( 'image1title', '' );
$image1link		= $params->get( 'image1link', '' );
$useTab1Text	= $params->get( 'useTab1Text', '' );
$link2 			= $params->get('link2',1);
$pop2Width		= $params->get('pop2Width','400');
$pop2Height		= $params->get('pop2Height','400');
$image2url		= $params->get( 'image2url', '' );
$image2title	= $params->get( 'image2title', '' );
$image2link		= $params->get( 'image2link', '' );
$useTab2Text	= $params->get( 'useTab2Text', '' );
$link3 			= $params->get('link3',1);
$pop3Width		= $params->get('pop3Width','400');
$pop3Height		= $params->get('pop3Height','400');
$image3url		= $params->get( 'image3url', '' );
$image3title	= $params->get( 'image3title', '' );
$image3link		= $params->get( 'image3link', '' );
$useTab3Text	= $params->get( 'useTab3Text', '' );
$link4 			= $params->get('link4',1);
$pop4Width		= $params->get('pop4Width','400');
$pop4Height		= $params->get('pop4Height','400');
$image4url		= $params->get( 'image4url', '' );
$image4title	= $params->get( 'image4title', '' );
$image4link		= $params->get( 'image4link', '' );
$useTab4Text	= $params->get( 'useTab4Text', '' );
$link5 			= $params->get('link5',1);
$pop5Width		= $params->get('pop5Width','400');
$pop5Height		= $params->get('pop5Height','400');
$image5url		= $params->get( 'image5url', '' );
$image5title	= $params->get( 'image5title', '' );
$image5link		= $params->get( 'image5link', '' );
$useTab5Text	= $params->get( 'useTab5Text', '' );
$link6 			= $params->get('link6',1);
$pop6Width		= $params->get('pop6Width','400');
$pop6Height		= $params->get('pop6Height','400');
$image6url		= $params->get( 'image6url', '' );
$image6title	= $params->get( 'image6title', '' );
$image6link		= $params->get( 'image6link', '' );
$useTab6Text	= $params->get( 'useTab6Text', '' );
$link7 			= $params->get('link7',1);
$pop7Width		= $params->get('pop7Width','400');
$pop7Height		= $params->get('pop7Height','400');
$image7url		= $params->get( 'image7url', '' );
$image7title	= $params->get( 'image7title', '' );
$image7link		= $params->get( 'image7link', '' );
$useTab7Text	= $params->get( 'useTab7Text', '' );
$link8 			= $params->get('link8',1);
$pop8Width		= $params->get('pop8Width','400');
$pop8Height		= $params->get('pop8Height','400');
$image8url		= $params->get( 'image8url', '' );
$image8title	= $params->get( 'image8title', '' );
$image8link		= $params->get( 'image8link', '' );
$useTab8Text	= $params->get( 'useTab8Text', '' );
$link9 			= $params->get('link9',1);
$pop9Width		= $params->get('pop9Width','400');
$pop9Height		= $params->get('pop9Height','400');
$image9url		= $params->get( 'image9url', '' );
$image9title	= $params->get( 'image9title', '' );
$image9link		= $params->get( 'image9link', '' );
$useTab9Text	= $params->get( 'useTab9Text', '' );
$link10 		= $params->get('link10',1);
$pop10Width		= $params->get('pop10Width','400');
$pop10Height	= $params->get('pop10Height','400');
$image10url		= $params->get( 'image10url', '' );
$image10title	= $params->get( 'image10title', '' );
$image10link	= $params->get( 'image10link', '' );
$useTab10Text	= $params->get( 'useTab10Text', '' );
$link11 		= $params->get('link11',1);
$pop11Width		= $params->get('pop11Width','400');
$pop11Height	= $params->get('pop11Height','400');
$image11url		= $params->get( 'image11url', '' );
$image11title	= $params->get( 'image11title', '' );
$image11link	= $params->get( 'image11link', '' );
$useTab11Text	= $params->get( 'useTab11Text', '' );
$link12 		= $params->get('link12',1);
$pop12Width		= $params->get('pop12Width','400');
$pop12Height	= $params->get('pop12Height','400');
$image12url		= $params->get( 'image12url', '' );
$image12title	= $params->get( 'image12title', '' );
$image12link	= $params->get( 'image12link', '' );
$useTab12Text	= $params->get( 'useTab12Text', '' );
$link13 		= $params->get('link13',1);
$pop13Width		= $params->get('pop13Width','400');
$pop13Height	= $params->get('pop13Height','400');
$image13url		= $params->get( 'image13url', '' );
$image13title	= $params->get( 'image13title', '' );
$image13link	= $params->get( 'image13link', '' );
$useTab13Text	= $params->get( 'useTab13Text', '' );
$link14 		= $params->get('link14',1);
$pop14Width		= $params->get('pop14Width','400');
$pop14Height	= $params->get('pop14Height','400');
$image14url		= $params->get( 'image14url', '' );
$image14title	= $params->get( 'image14title', '' );
$image14link	= $params->get( 'image14link', '' );
$useTab14Text	= $params->get( 'useTab14Text', '' );
$link15 		= $params->get('link15',1);
$pop15Width		= $params->get('pop15Width','400');
$pop15Height	= $params->get('pop15Height','400');
$image15url		= $params->get( 'image15url', '' );
$image15title	= $params->get( 'image15title', '' );
$image15link	= $params->get( 'image15link', '' );
$useTab15Text	= $params->get( 'useTab15Text', '' );
$screenPosition	= $params->get('screenPosition');
$showTextHover	= $params->get('showTextHover');
$moduleID 	 	= $module->id;
?>
<script type="text/javascript">
jQuery(document).ready(function($){ 
 $('#click').click(function() {
   $('#click').css();
   $(this).css();
   document.getElementById("Colorbox").className = $(this).attr("rel");
   return false;
 });
			$("a.popImage").colorbox();
			$("a.pop1").colorbox({iframe:true, width:<?php echo $pop1Width; ?>, height:<?php echo $pop1Height; ?>});
			$("a.pop2").colorbox({iframe:true, width:<?php echo $pop2Width; ?>, height:<?php echo $pop2Height; ?>});
			$("a.pop3").colorbox({iframe:true, width:<?php echo $pop3Width; ?>, height:<?php echo $pop3Height; ?>});
			$("a.pop4").colorbox({iframe:true, width:<?php echo $pop4Width; ?>, height:<?php echo $pop4Height; ?>});
			$("a.pop5").colorbox({iframe:true, width:<?php echo $pop5Width; ?>, height:<?php echo $pop5Height; ?>});
			$("a.pop6").colorbox({iframe:true, width:<?php echo $pop6Width; ?>, height:<?php echo $pop6Height; ?>});
			$("a.pop7").colorbox({iframe:true, width:<?php echo $pop7Width; ?>, height:<?php echo $pop7Height; ?>});
			$("a.pop8").colorbox({iframe:true, width:<?php echo $pop8Width; ?>, height:<?php echo $pop8Height; ?>});
			$("a.pop9").colorbox({iframe:true, width:<?php echo $pop9Width; ?>, height:<?php echo $pop9Height; ?>});
			$("a.pop10").colorbox({iframe:true, width:<?php echo $pop10Width; ?>, height:<?php echo $pop10Height; ?>});
			$("a.pop11").colorbox({iframe:true, width:<?php echo $pop11Width; ?>, height:<?php echo $pop11Height; ?>});
			$("a.pop12").colorbox({iframe:true, width:<?php echo $pop12Width; ?>, height:<?php echo $pop12Height; ?>});
			$("a.pop13").colorbox({iframe:true, width:<?php echo $pop13Width; ?>, height:<?php echo $pop13Height; ?>});
			$("a.pop14").colorbox({iframe:true, width:<?php echo $pop14Width; ?>, height:<?php echo $pop14Height; ?>});
			$("a.pop15").colorbox({iframe:true, width:<?php echo $pop15Width; ?>, height:<?php echo $pop15Height; ?>});
		});
</script>
<?php if ($screenPosition == "Left" || $screenPosition == "LeftDS") { ?>
<?php $textMarginPosition = right; ?>
<?php } ?>
<?php if ($screenPosition == "Right" || $screenPosition == "RightDS") { ?>
<?php $textMarginPosition = left; ?>
<?php } ?>
<!-- Start of JD Flyout Tabs -->
        <div class="header"></div>
        <div class="scroll"></div>
        <ul id="navigation<?php echo $params->get('screenPosition') ?>">
<style type="text/css">ul#navigation<?php echo $params->get('screenPosition') ?> {top: <?php echo $params->get('tabPosition') ?>;}</style>
<style type="text/css">ul#navigation<?php echo $params->get('screenPosition') ?> li {height: <?php echo $params->get('tabSpacing') ?>;}</style>
<style type="text/css">ul#navigation<?php echo $params->get('screenPosition') ?> li a {background-color: <?php echo $params->get('tabColor') ?>; border: 1px solid <?php echo $params->get('tabBorder') ?>; width: <?php echo $params->get('tabWidth') ?>; height: <?php echo $params->get('tabHeight') ?>;}</style>
<style type="text/css">ul#navigation<?php echo $params->get('screenPosition') ?> li a:hover {background-color: <?php echo $params->get('tabColorhover') ?>; border: 1px solid <?php echo $params->get('tabBorderhover') ?>; width: <?php echo $params->get('tabWidth') ?>; height: <?php echo $params->get('tabHeight') ?>;}</style>
<?php if ($position == "1"): ?>
<style type="text/css">ul#navigation<?php echo $params->get('screenPosition') ?> {position:fixed;}</style>
<?php elseif ($position == "2"): ?>
<style type="text/css">ul#navigation<?php echo $params->get('screenPosition') ?> {position:absolute;}</style>
<?php endif ; ?>
<?php if ($image1url  != "") { ?>
<li><class="tab1">
<?php if ($link1 == "1") { ?>
<a href="<?php echo $image1link ?>" title="<?php echo $image1title ?>"><img src="<?php echo $LiveSite; ?><?php echo $image1url ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab1Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title1Position') ?>; margin-top: <?php echo $params->get('title1aPosition') ?>; color: <?php echo $params->get('title1Color') ?>"><?php echo $image1title ?></span><?php } ?><?php } ?>
<?php if ($link1 == "2") { ?>
<a target="_blank" href="<?php echo $image1link ?>" title="<?php echo $image1title ?>"><img src="<?php echo $LiveSite; ?><?php echo $image1url ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab1Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title1Position') ?>; margin-top: <?php echo $params->get('title1aPosition') ?>; color: <?php echo $params->get('title1Color') ?>"><?php echo $image1title ?></span><?php } ?><?php } ?>
<?php if ($link1 == "3") { ?>
<a class="pop1" href="<?php echo $image1link ?>" title="<?php echo $image1title ?>"><img src="<?php echo $LiveSite; ?><?php echo $image1url ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab1Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title1Position') ?>; margin-top: <?php echo $params->get('title1aPosition') ?>; color: <?php echo $params->get('title1Color') ?>"><?php echo $image1title ?></span><?php } ?><?php } ?>
<?php if ($link1 == "4") { ?>
<a class="popImage" href="<?php echo $image1link ?>" title="<?php echo $image1title ?>"><img src="<?php echo $LiveSite; ?><?php echo $image1url ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab1Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title1Position') ?>; margin-top: <?php echo $params->get('title1aPosition') ?>; color: <?php echo $params->get('title1Color') ?>"><?php echo $image1title ?><?php } ?></span><?php } ?></a></li>
<?php } ?>
<?php if ($image2url  != "") { ?>
<li><class="tab2">
<?php if ($link2 == "1") { ?>
<a href="<?php echo $image2link; ?>" title="<?php echo $image2title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image2url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab2Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title2Position') ?>; margin-top: <?php echo $params->get('title2aPosition') ?>; color: <?php echo $params->get('title2Color') ?>"><?php echo $image2title ?></span><?php } ?><?php } ?>
<?php if ($link2 == "2") { ?>
<a target="_blank" href="<?php echo $image2link; ?>" title="<?php echo $image2title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image2url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab2Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title2Position') ?>; margin-top: <?php echo $params->get('title2aPosition') ?>; color: <?php echo $params->get('title2Color') ?>"><?php echo $image2title ?></span><?php } ?><?php } ?>
<?php if ($link2 == "3") { ?>
<a class="pop2" href="<?php echo $image2link; ?>" title="<?php echo $image2title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image2url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab2Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title2Position') ?>; margin-top: <?php echo $params->get('title2aPosition') ?>; color: <?php echo $params->get('title2Color') ?>"><?php echo $image2title ?></span><?php } ?><?php } ?>
<?php if ($link2 == "4") { ?>
<a class="popImage" href="<?php echo $image2link; ?>" title="<?php echo $image2title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image2url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab2Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title2Position') ?>; margin-top: <?php echo $params->get('title2aPosition') ?>; color: <?php echo $params->get('title2Color') ?>"><?php echo $image2title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image3url  != "") { ?>
<li><class="tab3">
<?php if ($link3 == "1") { ?>
<a href="<?php echo $image3link; ?>" title="<?php echo $image3title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image3url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab3Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title3Position') ?>; margin-top: <?php echo $params->get('title3aPosition') ?>; color: <?php echo $params->get('title3Color') ?>"><?php echo $image3title ?></span><?php } ?><?php } ?>
<?php if ($link3 == "2") { ?>
<a target="_blank" href="<?php echo $image3link; ?>" title="<?php echo $image3title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image3url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab3Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title3Position') ?>; margin-top: <?php echo $params->get('title3aPosition') ?>; color: <?php echo $params->get('title3Color') ?>"><?php echo $image3title ?></span><?php } ?><?php } ?>
<?php if ($link3 == "3") { ?>
<a class="pop3" href="<?php echo $image3link; ?>" title="<?php echo $image3title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image3url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab3Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title3Position') ?>; margin-top: <?php echo $params->get('title3aPosition') ?>; color: <?php echo $params->get('title3Color') ?>"><?php echo $image3title ?></span><?php } ?><?php } ?>
<?php if ($link3 == "4") { ?>
<a class="popImage" href="<?php echo $image3link; ?>" title="<?php echo $image3title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image3url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab3Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title3Position') ?>; margin-top: <?php echo $params->get('title3aPosition') ?>; color: <?php echo $params->get('title3Color') ?>"><?php echo $image3title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image4url  != "") { ?>
<li><class="tab4">
<?php if ($link4 == "1") { ?>
<a href="<?php echo $image4link; ?>" title="<?php echo $image4title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image4url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab4Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title4Position') ?>; margin-top: <?php echo $params->get('title4aPosition') ?>; color: <?php echo $params->get('title4Color') ?>"><?php echo $image4title ?></span><?php } ?><?php } ?>
<?php if ($link4 == "2") { ?>
<a target="_blank" href="<?php echo $image4link; ?>" title="<?php echo $image4title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image4url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab4Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title4Position') ?>; margin-top: <?php echo $params->get('title4aPosition') ?>; color: <?php echo $params->get('title4Color') ?>"><?php echo $image4title ?></span><?php } ?><?php } ?>
<?php if ($link4 == "3") { ?>
<a class="pop4" href="<?php echo $image4link; ?>" title="<?php echo $image4title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image4url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab4Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title4Position') ?>; margin-top: <?php echo $params->get('title4aPosition') ?>; color: <?php echo $params->get('title4Color') ?>"><?php echo $image4title ?></span><?php } ?><?php } ?>
<?php if ($link4 == "4") { ?>
<a class="popImage" href="<?php echo $image4link; ?>" title="<?php echo $image4title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image4url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab4Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title4Position') ?>; margin-top: <?php echo $params->get('title4aPosition') ?>; color: <?php echo $params->get('title4Color') ?>"><?php echo $image4title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image5url  != "") { ?>
<li><class="tab5">
<?php if ($link5 == "1") { ?>
<a href="<?php echo $image5link; ?>" title="<?php echo $image5title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image5url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab5Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title5Position') ?>; margin-top: <?php echo $params->get('title5aPosition') ?>; color: <?php echo $params->get('title5Color') ?>"><?php echo $image5title ?></span><?php } ?><?php } ?>
<?php if ($link5 == "2") { ?>
<a target="_blank" href="<?php echo $image5link; ?>" title="<?php echo $image5title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image5url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab5Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title5Position') ?>; margin-top: <?php echo $params->get('title5aPosition') ?>; color: <?php echo $params->get('title5Color') ?>"><?php echo $image5title ?></span><?php } ?><?php } ?>
<?php if ($link5 == "3") { ?>
<a class="pop5" href="<?php echo $image5link; ?>" title="<?php echo $image5title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image5url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab5Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title5Position') ?>; margin-top: <?php echo $params->get('title5aPosition') ?>; color: <?php echo $params->get('title5Color') ?>"><?php echo $image5title ?></span><?php } ?><?php } ?>
<?php if ($link5 == "4") { ?>
<a class="popImage" href="<?php echo $image5link; ?>" title="<?php echo $image5title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image5url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab5Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title5Position') ?>; margin-top: <?php echo $params->get('title5aPosition') ?>; color: <?php echo $params->get('title5Color') ?>"><?php echo $image5title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image6url  != "") { ?>
<li><class="tab6">
<?php if ($link6 == "1") { ?>
<a href="<?php echo $image6link; ?>" title="<?php echo $image6title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image6url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab6Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title6Position') ?>; margin-top: <?php echo $params->get('title6aPosition') ?>; color: <?php echo $params->get('title6Color') ?>"><?php echo $image6title ?></span><?php } ?><?php } ?>
<?php if ($link6 == "2") { ?>
<a target="_blank" href="<?php echo $image6link; ?>" title="<?php echo $image6title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image6url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab6Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title6Position') ?>; margin-top: <?php echo $params->get('title6aPosition') ?>; color: <?php echo $params->get('title6Color') ?>"><?php echo $image6title ?></span><?php } ?><?php } ?>
<?php if ($link6 == "3") { ?>
<a class="pop6" href="<?php echo $image6link; ?>" title="<?php echo $image6title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image6url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab6Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title6Position') ?>; margin-top: <?php echo $params->get('title6aPosition') ?>; color: <?php echo $params->get('title6Color') ?>"><?php echo $image6title ?></span><?php } ?><?php } ?>
<?php if ($link6 == "4") { ?>
<a class="popImage" href="<?php echo $image6link; ?>" title="<?php echo $image6title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image6url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab6Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title6Position') ?>; margin-top: <?php echo $params->get('title6aPosition') ?>; color: <?php echo $params->get('title6Color') ?>"><?php echo $image6title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image7url  != "") { ?>
<li><class="tab7">
<?php if ($link7 == "1") { ?>
<a href="<?php echo $image7link; ?>" title="<?php echo $image7title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image7url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab7Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title7Position') ?>; margin-top: <?php echo $params->get('title7aPosition') ?>; color: <?php echo $params->get('title7Color') ?>"><?php echo $image7title ?></span><?php } ?><?php } ?>
<?php if ($link7 == "2") { ?>
<a target="_blank" href="<?php echo $image7link; ?>" title="<?php echo $image7title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image7url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab7Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title7Position') ?>; margin-top: <?php echo $params->get('title7aPosition') ?>; color: <?php echo $params->get('title7Color') ?>"><?php echo $image7title ?></span><?php } ?><?php } ?>
<?php if ($link7 == "3") { ?>
<a class="pop7" href="<?php echo $image7link; ?>" title="<?php echo $image7title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image7url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab7Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title7Position') ?>; margin-top: <?php echo $params->get('title7aPosition') ?>; color: <?php echo $params->get('title7Color') ?>"><?php echo $image7title ?></span><?php } ?><?php } ?>
<?php if ($link7 == "4") { ?>
<a class="popImage" href="<?php echo $image7link; ?>" title="<?php echo $image7title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image7url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab7Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title7Position') ?>; margin-top: <?php echo $params->get('title7aPosition') ?>; color: <?php echo $params->get('title7Color') ?>"><?php echo $image7title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image8url  != "") { ?>
<li><class="tab8">
<?php if ($link8 == "1") { ?>
<a href="<?php echo $image8link; ?>" title="<?php echo $image8title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image8url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab8Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title8Position') ?>; margin-top: <?php echo $params->get('title8aPosition') ?>; color: <?php echo $params->get('title8Color') ?>"><?php echo $image8title ?></span><?php } ?><?php } ?>
<?php if ($link8 == "2") { ?>
<a target="_blank" href="<?php echo $image8link; ?>" title="<?php echo $image8title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image8url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab8Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title8Position') ?>; margin-top: <?php echo $params->get('title8aPosition') ?>; color: <?php echo $params->get('title8Color') ?>"><?php echo $image8title ?></span><?php } ?><?php } ?>
<?php if ($link8 == "3") { ?>
<a class="pop8" href="<?php echo $image8link; ?>" title="<?php echo $image8title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image8url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab8Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title8Position') ?>; margin-top: <?php echo $params->get('title8aPosition') ?>; color: <?php echo $params->get('title8Color') ?>"><?php echo $image8title ?></span><?php } ?><?php } ?>
<?php if ($link8 == "4") { ?>
<a class="popImage" href="<?php echo $image8link; ?>" title="<?php echo $image8title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image8url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab8Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title8Position') ?>; margin-top: <?php echo $params->get('title8aPosition') ?>; color: <?php echo $params->get('title8Color') ?>"><?php echo $image8title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image9url  != "") { ?>
<li><class="tab9">
<?php if ($link9 == "1") { ?>
<a href="<?php echo $image9link; ?>" title="<?php echo $image9title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image9url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab9Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title9Position') ?>; margin-top: <?php echo $params->get('title9aPosition') ?>; color: <?php echo $params->get('title9Color') ?>"><?php echo $image9title ?></span><?php } ?><?php } ?>
<?php if ($link9 == "2") { ?>
<a target="_blank" href="<?php echo $image9link; ?>" title="<?php echo $image9title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image9url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab9Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title9Position') ?>; margin-top: <?php echo $params->get('title9aPosition') ?>; color: <?php echo $params->get('title9Color') ?>"><?php echo $image9title ?></span><?php } ?><?php } ?>
<?php if ($link9 == "3") { ?>
<a class="pop9" href="<?php echo $image9link; ?>" title="<?php echo $image9title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image9url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab9Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title9Position') ?>; margin-top: <?php echo $params->get('title9aPosition') ?>; color: <?php echo $params->get('title9Color') ?>"><?php echo $image9title ?></span><?php } ?><?php } ?>
<?php if ($link9 == "4") { ?>
<a class="popImage" href="<?php echo $image9link; ?>" title="<?php echo $image9title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image9url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab9Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title9Position') ?>; margin-top: <?php echo $params->get('title9aPosition') ?>; color: <?php echo $params->get('title9Color') ?>"><?php echo $image9title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image10url  != "") { ?>
<li><class="tab10">
<?php if ($link10 == "1") { ?>
<a href="<?php echo $image10link; ?>" title="<?php echo $image10title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image10url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab10Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title10Position') ?>; margin-top: <?php echo $params->get('title10aPosition') ?>; color: <?php echo $params->get('title10Color') ?>"><?php echo $image10title ?></span><?php } ?><?php } ?>
<?php if ($link10 == "2") { ?>
<a target="_blank" href="<?php echo $image10link; ?>" title="<?php echo $image10title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image10url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab10Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title10Position') ?>; margin-top: <?php echo $params->get('title10aPosition') ?>; color: <?php echo $params->get('title10Color') ?>"><?php echo $image10title ?></span><?php } ?><?php } ?>
<?php if ($link10 == "3") { ?>
<a class="pop10" href="<?php echo $image10link; ?>" title="<?php echo $image10title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image10url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab10Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title10Position') ?>; margin-top: <?php echo $params->get('title10aPosition') ?>; color: <?php echo $params->get('title10Color') ?>"><?php echo $image10title ?></span><?php } ?><?php } ?>
<?php if ($link10 == "4") { ?>
<a class="popImage" href="<?php echo $image10link; ?>" title="<?php echo $image10title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image10url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab10Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title10Position') ?>; margin-top: <?php echo $params->get('title10aPosition') ?>; color: <?php echo $params->get('title10Color') ?>"><?php echo $image10title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image11url  != "") { ?>
<li><class="tab11">
<?php if ($link11 == "1") { ?>
<a href="<?php echo $image11link; ?>" title="<?php echo $image11title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image11url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab11Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title11Position') ?>; margin-top: <?php echo $params->get('title11aPosition') ?>; color: <?php echo $params->get('title11Color') ?>"><?php echo $image11title ?></span><?php } ?><?php } ?>
<?php if ($link11 == "2") { ?>
<a target="_blank" href="<?php echo $image11link; ?>" title="<?php echo $image11title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image11url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab11Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title11Position') ?>; margin-top: <?php echo $params->get('title11aPosition') ?>; color: <?php echo $params->get('title11Color') ?>"><?php echo $image11title ?></span><?php } ?><?php } ?>
<?php if ($link11 == "3") { ?>
<a class="pop11" href="<?php echo $image11link; ?>" title="<?php echo $image11title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image11url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab11Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title11Position') ?>; margin-top: <?php echo $params->get('title11aPosition') ?>; color: <?php echo $params->get('title11Color') ?>"><?php echo $image11title ?></span><?php } ?><?php } ?>
<?php if ($link11 == "4") { ?>
<a class="popImage" href="<?php echo $image11link; ?>" title="<?php echo $image11title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image11url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab11Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title11Position') ?>; margin-top: <?php echo $params->get('title11aPosition') ?>; color: <?php echo $params->get('title11Color') ?>"><?php echo $image11title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image12url  != "") { ?>
<li><class="tab12">
<?php if ($link12 == "1") { ?>
<a href="<?php echo $image12link; ?>" title="<?php echo $image12title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image12url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab12Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title12Position') ?>; margin-top: <?php echo $params->get('title12aPosition') ?>; color: <?php echo $params->get('title12Color') ?>"><?php echo $image12title ?></span><?php } ?><?php } ?>
<?php if ($link12 == "2") { ?>
<a target="_blank" href="<?php echo $image12link; ?>" title="<?php echo $image12title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image12url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab12Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title12Position') ?>; margin-top: <?php echo $params->get('title12aPosition') ?>; color: <?php echo $params->get('title12Color') ?>"><?php echo $image12title ?></span><?php } ?><?php } ?>
<?php if ($link12 == "3") { ?>
<a class="pop12" href="<?php echo $image12link; ?>" title="<?php echo $image12title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image12url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab12Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title12Position') ?>; margin-top: <?php echo $params->get('title12aPosition') ?>; color: <?php echo $params->get('title12Color') ?>"><?php echo $image12title ?></span><?php } ?><?php } ?>
<?php if ($link12 == "4") { ?>
<a class="popImage" href="<?php echo $image12link; ?>" title="<?php echo $image12title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image12url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab12Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title12Position') ?>; margin-top: <?php echo $params->get('title12aPosition') ?>; color: <?php echo $params->get('title12Color') ?>"><?php echo $image12title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image13url  != "") { ?>
<li><class="tab13">
<?php if ($link13 == "1") { ?>
<a href="<?php echo $image13link; ?>" title="<?php echo $image13title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image13url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab13Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title13Position') ?>; margin-top: <?php echo $params->get('title13aPosition') ?>; color: <?php echo $params->get('title13Color') ?>"><?php echo $image13title ?></span><?php } ?><?php } ?>
<?php if ($link13 == "2") { ?>
<a target="_blank" href="<?php echo $image13link; ?>" title="<?php echo $image13title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image13url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab13Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title13Position') ?>; margin-top: <?php echo $params->get('title13aPosition') ?>; color: <?php echo $params->get('title13Color') ?>"><?php echo $image13title ?></span><?php } ?><?php } ?>
<?php if ($link13 == "3") { ?>
<a class="pop13" href="<?php echo $image7link; ?>" title="<?php echo $image13title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image13url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab13Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title13Position') ?>; margin-top: <?php echo $params->get('title13aPosition') ?>; color: <?php echo $params->get('title13Color') ?>"><?php echo $image13title ?></span><?php } ?><?php } ?>
<?php if ($link13 == "4") { ?>
<a class="popImage" href="<?php echo $image13link; ?>" title="<?php echo $image13title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image13url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php } ?><?php if ($useTab13Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title13Position') ?>; margin-top: <?php echo $params->get('title13aPosition') ?>; color: <?php echo $params->get('title13Color') ?>"><?php echo $image13title ?></span></a></li>
<?php } ?><?php } ?>
<?php if ($image14url  != "") { ?>
<li><class="tab14">
<?php if ($link14 == "1") { ?>
<a href="<?php echo $image14link; ?>" title="<?php echo $image14title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image14url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab14Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title14Position') ?>; margin-top: <?php echo $params->get('title14aPosition') ?>; color: <?php echo $params->get('title14Color') ?>"><?php echo $image14title ?></span><?php } ?><?php } ?>
<?php if ($link14 == "2") { ?>
<a target="_blank" href="<?php echo $image14link; ?>" title="<?php echo $image14title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image14url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab14Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title14Position') ?>; margin-top: <?php echo $params->get('title14aPosition') ?>; color: <?php echo $params->get('title14Color') ?>"><?php echo $image14title ?></span><?php } ?><?php } ?>
<?php if ($link14 == "3") { ?>
<a class="pop7" href="<?php echo $image14link; ?>" title="<?php echo $image14title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image14url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab14Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title14Position') ?>; margin-top: <?php echo $params->get('title14aPosition') ?>; color: <?php echo $params->get('title14Color') ?>"><?php echo $image14title ?></span><?php } ?><?php } ?>
<?php if ($link14 == "4") { ?>
<a class="popImage" href="<?php echo $image14link; ?>" title="<?php echo $image14title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image14url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab14Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title14Position') ?>; margin-top: <?php echo $params->get('title14aPosition') ?>; color: <?php echo $params->get('title14Color') ?>"><?php echo $image14title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
<?php if ($image15url  != "") { ?>
<li><class="tab15">
<?php if ($link15 == "1") { ?>
<a href="<?php echo $image15link; ?>" title="<?php echo $image15title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image15url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab15Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title15Position') ?>; margin-top: <?php echo $params->get('title15aPosition') ?>; color: <?php echo $params->get('title15Color') ?>"><?php echo $image15title ?></span><?php } ?><?php } ?>
<?php if ($link15 == "2") { ?>
<a target="_blank" href="<?php echo $image15link; ?>" title="<?php echo $image15title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image15url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab15Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title15Position') ?>; margin-top: <?php echo $params->get('title15aPosition') ?>; color: <?php echo $params->get('title15Color') ?>"><?php echo $image15title ?></span><?php } ?><?php } ?>
<?php if ($link15 == "3") { ?>
<a class="pop15" href="<?php echo $image15link; ?>" title="<?php echo $image15title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image15url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab15Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title15Position') ?>; margin-top: <?php echo $params->get('title15aPosition') ?>; color: <?php echo $params->get('title15Color') ?>"><?php echo $image15title ?></span><?php } ?><?php } ?>
<?php if ($link15 == "4") { ?>
<a class="popImage" href="<?php echo $image15link; ?>" title="<?php echo $image15title; ?>"><img src="<?php echo $LiveSite; ?><?php echo $image15url; ?>" style="margin-left: <?php echo $imagePosition; ?>; margin-top: <?php echo $imageTopPosition; ?>;"/><?php if ($useTab15Text =="1") { ?><span style="margin-<?php echo $textMarginPosition ?>: <?php echo $params->get('title15Position') ?>; margin-top: <?php echo $params->get('title15aPosition') ?>; color: <?php echo $params->get('title15Color') ?>"><?php echo $image15title ?></span><?php } ?><?php } ?></a></li>
<?php } ?>
        </ul>
<!--Left screen position-->
<?php if ($screenPosition == "Left" || $screenPosition == "LeftDS") { ?>
        <script type="text/javascript">
jQuery.noConflict();
            jQuery(document).ready(function(){
                jQuery('#navigation<?php echo $params->get('screenPosition') ?> a').stop().animate({'marginLeft':'<?php echo $params->get('tabLeftSet') ?>'},1000);
                jQuery('#navigation<?php echo $params->get('screenPosition') ?> > li').hover(
                    function () {
                        jQuery('a',jQuery(this)).stop().animate({'marginLeft':'<?php echo $params->get('tabLeftMargin') ?>'},200);
                    },
                    function () {
                        jQuery('a',jQuery(this)).stop().animate({'marginLeft':'<?php echo $params->get('tabLeftSet') ?>'},200);
                    }
                );
            });
        </script>
<?php } ?>
<?php if ($screenPosition == "Right" || $screenPosition == "RightDS") { ?>
        <script type="text/javascript">
jQuery.noConflict();
            jQuery(document).ready(function(){
                jQuery('#navigation<?php echo $params->get('screenPosition') ?> a').stop().animate({'marginLeft':'<?php echo $params->get('tabRightSet') ?>'},1000);
                jQuery('#navigation<?php echo $params->get('screenPosition') ?> > li').hover(
                    function () {
                        jQuery('a',jQuery(this)).stop().animate({'marginLeft':'<?php echo $params->get('tabRightMargin') ?>'},200);
                    },
                    function () {
                        jQuery('a',jQuery(this)).stop().animate({'marginLeft':'<?php echo $params->get('tabRightSet') ?>'},200);
                    }
                );
            });
        </script>
<?php } ?>