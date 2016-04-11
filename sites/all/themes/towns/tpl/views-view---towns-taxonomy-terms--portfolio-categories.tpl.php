<?php if($rows): ?>
<section id="options" class="clearfix">
	<ul id="filters" class="clearfix">
		<li class="active"><a href="#" data-filter="*"><?php print t('All'); ?></a></li>
		<?php print $rows; ?>
	</ul>
</section><!--options-->
<?php endif; ?>