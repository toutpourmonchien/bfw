<?php if(isset($page['footer_column_1']) || isset($page['footer_column_2']) || isset($page['footer_column_3']) || isset($page['footer_column_4'])): ?>
<div id="footer">
	<div class="container">
		<div class="row">
			<?php if($page['footer_column_1']) print render($page['footer_column_1']); ?>
			<?php if($page['footer_column_2']) print render($page['footer_column_2']); ?>
			<?php if($page['footer_column_4']) print render($page['footer_column_3']); ?>
			<?php if($page['footer_column_4']) print render($page['footer_column_4']); ?>
		</div>
	</div>
</div>
<?php endif; ?>