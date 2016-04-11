<?php print render($title_prefix); ?>
<div class="portfolio-top"></div>
<div class="container">
	<div class="row">
		<div id="portfoliod">			
		<div id="portfolioAjaxwrap"> 
			<div id="portfolioAjax" class="clearfix">
				<div id="portfolioAjaxControlls" class="clearfix">
					<a id="ajax_close" href="#"><span class="outer"></span><span class="inner"></span></a>
				</div><div class="clear"></div>
				<div id="portfolioData"></div>
			</div><!--portfolioAjax-->
		</div>
	</div><!--portfoliod-->
	</div>
</div>

<?php if($header) print $header; ?>
<?php if($rows): ?>
<div id="container_portfolio" class="clickable variable-sizes clearfix">
	<?php print $rows; ?>
</div><!--container-portfolio-->
<?php endif; ?>
