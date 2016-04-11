<?php print render($title_prefix); ?>
<div class="span12">
	<div class="parallax_container">
		<?php if($header) print $header; ?>
		<div class="row">
			
			<?php if($rows): ?>
			<!--SLIDE CAROUSEL START -->
			<div class="slidewrap3">
				<div class="slider">
					<?php print $rows; ?>
				</div><!--slider-->
			</div><!--slidewrap-->
			<!--SLIDE CAROUSEL END -->
			<?php endif; ?>
		</div>
	</div>
</div>



