<?php if(arg(0) == 'node'): ?>
<?php require_once(drupal_get_path('theme','towns').'/tpl/header.tpl.php'); ?>
<?php endif; ?>
<?php if(arg(0) == 'node'){ ?>
<div class="container top-70">
	<div class="item-data">
		<div class="helper">

			<div class="row-fluid">
				<?php if($page['content']):?>
	            <?php
	                if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
	                    print render($tabs);
	                endif;
	                print $messages;
	                print render($page['content']);
	            ?>
	            <?php endif; ?>
			</div><!--item data--> 

		</div><!--helper-->
	</div><!--item-data-->		
</div>
<?php }else{ ?>
<div id="blog" class="section gray blog_post">
	<div class="container">
		<div class="row">
			<div class="divider"></div>
			<div class="span12">
				<?php if($page['content']):?>
	            <?php
	                if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
	                    print render($tabs);
	                endif;
	                print $messages;
	                print render($page['content']);
	            ?>
	            <?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php } ?>
<?php require_once(drupal_get_path('theme','towns').'/tpl/footer.tpl.php'); ?>