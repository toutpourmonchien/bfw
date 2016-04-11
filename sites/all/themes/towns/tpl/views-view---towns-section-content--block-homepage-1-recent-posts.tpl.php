<?php print render($title_prefix); ?>
<div class="clear"></div>
<div class="divider"></div>
<?php if($rows): ?>
<div class="blog_container">
	<?php print $rows; ?>
</div><!--blog-container-->
<?php endif; ?>
