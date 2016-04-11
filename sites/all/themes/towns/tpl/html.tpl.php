<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="<?php print $language->language ?>">
<!--<![endif]-->
<head>
<title><?php print $head_title; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php print $styles; print $head; ?>

<?php
//Tracking code
$tracking_code = theme_get_setting('general_setting_tracking_code', 'towns');
print $tracking_code;
//Custom css
$custom_css = theme_get_setting('custom_css', 'towns');
if(!empty($custom_css)):?>
<style type="text/css" media="all">
<?php print $custom_css;?>
</style>
<?php endif;?>
</head>

<body <?php if(isset($bodyId) && !empty($bodyId)){ print $bodyId; }?> class="<?php print $classes ?>" <?php print $attributes; ?>>

<div id="top"></div>
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>

<div class="loading_icon"></div>

<!-- Switch Panel -->
<?php 
  $towns_disable_switch = theme_get_setting('towns_disable_switch', 'towns');
  if(empty($towns_disable_switch)){
    $towns_disable_switch == 'off';
  }
 ?>
 <?php if($towns_disable_switch == 'on'): ?>
  <div id="switch">
  	<div class="content-switcher" >

    <h6><?php print t('Color'); ?></h6>

    <ul class="color">
    	<li><a href="#" onClick="setActiveStyleSheet('blue'); return false;" data-color="blue" class="button small color switch" style="background-color:#00cae9"><?php print t('Blue'); ?></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('green'); return false;" data-color="green" class="button small color switch" style="background-color:#0DD36F"><?php print t('Green'); ?></a></li>
      <li><a href="#" onClick="setActiveStyleSheet('orange'); return false;" data-color="orange" class="button small color switch" style="background-color:#ff6029"><?php print t('Orange'); ?></a></li>
      <li><a href="#" onClick="setActiveStyleSheet('yellow'); return false;" data-color="yellow" class="button small color switch" style="background-color:#ffba00"><?php print t('Yellow'); ?></a></li>
      <li><a href="#" onClick="setActiveStyleSheet('red'); return false;" data-color="red" class="button small color switch" style="background-color:#ff2323"><?php print t('Red'); ?></a></li>
       <li><a href="#" onClick="setActiveStyleSheet('gray'); return false;" data-color="gray" class="button small color switch" style="background-color:#3a3a3a"><?php print t('Gray'); ?></a></li>
      
      
    </ul>

	<div class="clear"></div>
    <h5 id="hide"><?php print t('Hide Panel'); ?></h5>
  </div>
 </div>

  <div id="show" style="display: block;">
    <div id="setting"></div>
  </div>
    <!-- Switch Panel -->
<?php endif; ?>

<?php print $scripts; ?>
</body>
</html>
