<div id="header">
	<div class="responsive_nav white_lines">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="mobileAreaMenu">
						<?php if($page['main_menu']) print strip_tags(render($page['main_menu']),'<ul>,<li>,<a>'); ?>
				</div><!--mobileAreaMenu-->
				</div><!--span12-->
			</div><!--row-->
		</div>			
	</div><!--responsive_nav-->


	<div class="row-fluid">
		<div class="logo_container">
			<a href="#top"><?php print $site_name; ?></a>
		</div>
		<a href="#responsive_nav" class="menu_trigger"><i class="fa_icon icon-reorder icon-2x"></i></a>
		<?php if($page['main_menu']) print render($page['main_menu']); ?>
		<div class="clear"></div>
	</div><!--row-fluid-->
</div>