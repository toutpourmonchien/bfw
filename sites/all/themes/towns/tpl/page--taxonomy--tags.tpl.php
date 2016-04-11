<?php require_once(drupal_get_path('theme','towns').'/tpl/header.tpl.php'); ?>

<div id="blog" class="section gray blog_post">
	<div class="container">
		<div class="row">
			<div class="divider"></div>
			<div class="span12">
			<h1 class="page_title"><?php print t('Tag: '); ?><?php print $title; ?></h1>
			<div class="page_line"></div>
			</div><!--span12-->
			<div class="clear"></div>
			<div class="divider"></div>
			<div class="span8">
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
		</div><!--row-->
	</div><!--container-->
</div><!--blog-->
<!-- *** BLOG END *** -->
<?php require_once(drupal_get_path('theme','towns').'/tpl/footer.tpl.php'); ?>