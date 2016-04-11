
<?php 
	$format = $node->field_blog_format['und'][0]['value'];
	if(empty($format)){
		$format = 'standard';
	}
	if(isset($node->field_image) && !empty($node->field_image)){
      	$imageone_uri = $node->field_image['und'][0]['uri'];
      	$imageone_url = file_create_url($imageone_uri);
   	}
   	if(isset($node->body['und'][0]['summary']) && !empty($node->body['und'][0]['summary'])){
      	$summ = $node->body['und'][0]['summary'];
      	$summary = substr($summ,  0, 340).'...';
   	}
?>
<?php if($page){ ?>
<div class="blog-item">
	<?php if($format == 'standard'){ ?>
	<?php if($imageone_url): ?>
	<div class="img-container-blog" style="background-image: url(<?php print $imageone_url; ?>);">
		<div class="the-author-img">
			<?php print strip_tags($user_picture,'<img>'); ?>
		</div>
	</div>
	<?php endif; ?>
	<?php }elseif($format == 'video'){?>
	<div class="img-container-blog">
		<?php print render($content['field_video_embed']); ?>
	</div>
	<?php }elseif($format == 'sound_cloud'){ ?>
	<div class="img-container-blog">
		<?php print render($content['field_sound_cloud']); ?>
	</div>
	<?php } ?>
	<div class="blog-boddy">
		<div class="the-title"><h1><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1></div>
		<?php print render($content['body'][0]['#markup']); ?>
		<div class="metas">
			<div class="the-date"><a href="#"><span class="calendar gray icon"></span><?php print format_date($node->created,'custom', 'F, d Y'); ?></a></div>
			<div class="the-comments"><a href="#comments"><span class="comments gray icon"></span><?php print $comment_count; ?></a></div>
			<div class="clear"></div>
		</div><!--metas-->
	</div>
</div><!--blog-item-->
<?php print render($content['comments']); ?>
<?php }else{ ?>
<div class="blog-item">
	<?php if($format == 'standard'){ ?>
	<?php if($imageone_url): ?>
	<div class="img-container-blog" style="background-image: url(<?php print $imageone_url; ?>);">
		<div class="the-author-img">
			<?php print strip_tags($user_picture,'<img>'); ?>
		</div>
	</div>
	<?php endif; ?>
	<?php }elseif($format == 'video'){?>
	<div class="img-container-blog">
		<div class="the-author-img">
			<?php print strip_tags($user_picture,'<img>'); ?>
		</div>
		<?php print render($content['field_video_embed']); ?>
	</div>
	<?php }elseif($format == 'sound_cloud'){ ?>
	<div class="img-container-blog">
		 <div class="the-author-img">
			<?php print strip_tags($user_picture,'<img>'); ?>
		</div>
		<?php print render($content['field_sound_cloud']); ?>
	</div>
	<?php } ?>
	<div class="blog-boddy">
		<div class="the-title"><h1><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1></div>
		<p><?php print $summary; ?></p>
		<div class="metas">
			<div class="the-date"><a href="#"><span class="calendar gray icon"></span><?php print format_date($node->created,'custom', 'F, d Y'); ?></a></div>
			<div class="the-comments"><a href="<?php print $node_url.'#comments'; ?>"><span class="comments gray icon"></span><?php print $comment_count; ?></a></div>
			<a href="<?php print $node_url; ?>" class="read_more_small"><i class="fa_icon icon-plus"></i></a>
			<div class="clear"></div>
		</div><!--metas-->
	</div>
</div><!--blog-item-->
<?php } ?>