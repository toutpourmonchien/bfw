<?php 
	if($comment->created != '0') {

		$time_ago = array('!interval' => format_interval(time() - $comment->created));
      	//print $time_ago['!interval'];
		
   }

?>
<div class="comment">
	<article>
		
		<div class="comment-head">
			<div class="post-info">
				<?php if($picture){ ?>
        			<?php print $picture; ?>
    			<?php } ?>
				<?php print $author; ?>
				<time><?php print 'On '.format_date($comment->created, 'custom', 'd M, Y'); ?></time>
				<span class="ago"><?php print $time_ago['!interval']; ?></span>
				<div class="clear"></div>
			</div>
		</div>


		<div class="comment-body">
			<?php hide($content['links']); print render($content); ?>
			<div class="comment-links">
			<?php print strip_tags(render($content['links']),'<a>'); ?>
			</div>
			<div class="clear"></div>
		</div><!-- end .comment-body -->
	</article>
</div>