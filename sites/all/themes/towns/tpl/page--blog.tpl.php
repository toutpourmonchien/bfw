<?php 
	if(isset($node->field_subtitle) && !empty($node->field_subtitle)){
		$subtitle = $node->field_subtitle['und'][0]['value'];
	}
	if(isset($node->field_sidebar) && !empty($node->field_sidebar)){
 		$sidebar = $node->field_sidebar['und'][0]['value'];
 	}else{
 		$sidebar = 'right';
 	}
 	if(empty($sidebar)){
 		$sidebar = 'right';
 	}
 	if($sidebar == 'left' || $sidebar == 'right'){
 		$class = 'span8';
 	}else{
 		$class = 'span12';
 	}
 	$blog_subtitle = theme_get_setting('blog_subtitle', 'towns');
 	if(empty($blog_subtitle)){
 		$blog_subtitle = '';
 	}
 	$blog_sidebar = theme_get_setting('blog_sidebar', 'towns');
 	if(empty($blog_sidebar)){
 		$blog_sidebar = 'right';
 	}
 	if($blog_sidebar == 'left' || $blog_sidebar == 'right'){
 		$blog_class = 'span8';
 	}else{
 		$blog_class = 'span12';
 	}
?>

<?php require_once(drupal_get_path('theme','towns').'/tpl/header.tpl.php'); ?>
<!-- *** BLOG START *** -->
<?php if(arg(0) == 'node'){ ?>
<div id="blog" class="section gray blog_post">
	<div class="container">
		<div class="row">
			<div class="divider"></div>
			<div class="span12">
			<h1 class="page_title"><?php print $title; ?></h1>
			<?php if(isset($subtitle) && !empty($subtitle)): ?>
			<h2 class="page_subtitle"><?php print $subtitle; ?></h2>
			<?php endif; ?>
			<div class="page_line"></div>
			</div><!--span12-->
			<div class="clear"></div>
			<div class="divider"></div>
			<?php if($sidebar == 'left'): ?>
			<div class="span4">
				<!-- *** SIDEBAR START *** -->
				<div class="five columns">
			    	<div class="sidebar">
						
			    	<?php if($page['sidebar_first']) print render($page['sidebar_first']); ?>
					
					</div><!--end sidebar-->
				</div>
				<!-- end five columns -->
				<!-- *** SIDEBAR END *** -->
				
			</div>
			<?php endif; ?>
			<div class="<?php print $class; ?>">
				<?php if($page['content']) print render($page['content']); ?>
			</div><!--span8-->
			<?php if($sidebar == 'right'): ?>
			<div class="span4">
				<!-- *** SIDEBAR START *** -->
				<div class="five columns">
			    	<div class="sidebar">
						
			    	<?php if($page['sidebar_second']) print render($page['sidebar_second']); ?>
					
					</div><!--end sidebar-->
				</div>
				<!-- end five columns -->
				<!-- *** SIDEBAR END *** -->
				
			</div>
			<?php endif; ?>
		</div><!--row-->
	</div><!--container-->
</div><!--blog-->
<!-- *** BLOG END *** -->
<?php }else{ ?>
<div id="blog" class="section gray blog_post">
	<div class="container">
		<div class="row">
			<div class="divider"></div>
			<div class="span12">
			<h1 class="page_title"><?php print $title; ?></h1>
			<?php if(isset($blog_subtitle) && !empty($blog_subtitle)): ?>
			<h2 class="page_subtitle"><?php print $blog_subtitle; ?></h2>
			<?php endif; ?>
			<div class="page_line"></div>
			</div><!--span12-->
			<div class="clear"></div>
			<div class="divider"></div>
			<?php if($blog_sidebar == 'left'): ?>
			<div class="span4">
				<!-- *** SIDEBAR START *** -->
				<div class="five columns">
			    	<div class="sidebar">
						
			    	<?php if($page['sidebar_first']) print render($page['sidebar_first']); ?>
					
					</div><!--end sidebar-->
				</div>
				<!-- end five columns -->
				<!-- *** SIDEBAR END *** -->
				
			</div>
			<?php endif; ?>
			<div class="<?php print $blog_class; ?>">
			<?php if($page['content']):?>
            <?php
                if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
                    print render($tabs);
                endif;
                print $messages;
                print render($page['content']);
            ?>
            <?php endif; ?>
			</div><!--span8-->
			<?php if($blog_sidebar == 'right'): ?>
			<div class="span4">
				<!-- *** SIDEBAR START *** -->
				<div class="five columns">
			    	<div class="sidebar">
						
			    	<?php if($page['sidebar_second']) print render($page['sidebar_second']); ?>
					
					</div><!--end sidebar-->
				</div>
				<!-- end five columns -->
				<!-- *** SIDEBAR END *** -->
			</div>
			<?php endif; ?>
		</div><!--row-->
	</div><!--container-->
</div><!--blog-->
<!-- *** BLOG END *** -->
<?php } ?>
<?php require_once(drupal_get_path('theme','towns').'/tpl/footer.tpl.php'); ?>