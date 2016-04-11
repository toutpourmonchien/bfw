<?php if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>
<section id="comments">
		<h3 class="blogpost-title"><?php print t('Comments'); ?> (<?php print $content['#node']->comment_count; ?>)</h3>
		<div class="comments-list">
			<?php print render($content['comments']); ?>
			<div id="response">
				<h3 class="blogpost-title"><?php print t('Leave a Comment'); ?></h3>
				<?php print str_replace('resizable', '', render($content['comment_form'])); ?>
			</div><!--response-->

		</div><!--comment list-->
</section>
<?php } ?>