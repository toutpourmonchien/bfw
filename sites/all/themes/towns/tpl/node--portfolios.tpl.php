<?php 
	if(isset($node->field_image) && !empty($node->field_image)){
      	$imageone_uri = $node->field_image['und'][0]['uri'];
      	$imageone_url = file_create_url($imageone_uri);
   	}
?>
<?php if($page){ ?>
<div class="span7">
	<h3><?php print $title; ?></h3>
	<div class="hr hr_small"> <span class="hr_inner"></span></div>
	<div class="portfolioContent">
		<?php print render($content['body'][0]['#markup']); ?>
	</div><!--portfolioContent-->
</div>
<?php if($imageone_url): ?>
<div class="span5">
	<div class="portfolioAjaxImage">
		<div class="portfolio_img"><a href="<?php print $imageone_url; ?>" class="prettyPhoto"><img src="<?php print $imageone_url ?>" alt="<?php print $title; ?>"></a></div>
	</div>
</div>
<?php endif; ?>
<?php }else{ ?>
<?php print render($content); ?>
<?php } ?>