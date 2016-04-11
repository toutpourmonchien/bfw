<?php print render($title_prefix); ?>
<?php if($header): ?>
<div class="span12">
	<?php print $header; ?>
</div>
<?php endif; ?>
<?php if($rows): ?>
<div id="response">
	<?php print $rows; ?>
</div>
<!--response-->
<?php endif; ?>