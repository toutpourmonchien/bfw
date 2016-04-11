<?php
if($block->block_id){
	$id = 'id="'.$block->block_id.'" ';
}else{
	$id = '';
}
$out = '';
if($block->region == 'main_menu'){
	$out .= '<div '.$id.'class="main_nav '.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	$out .= $content;
	$out .= '</div>';
}elseif($block->region == 'slider'){
	$out .= '<div '.$id.'class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	$out .= $content;
	$out .= '</div>';
}elseif($block->region == 'section'){
	$out .= '<div '.$id.'class="'.$classes.'" '.$attributes.'>';
	if(preg_match("/\bparallax\b/i", $classes)){
		$out .= '<div class="parallax_over">';
	}
	$out .= render($title_suffix);
	$out .= '<div class="container">
				<div class="row">';
	if((!empty($block->subtitle) && $block->subtitle != '<none>') || !empty($block->subject)){
		$out .= '<div class="span12">';
	
		if($block->subject){
			$out .= '<h1 class="page_title">'.$block->subject.'</h1>';
		}
		if($block->subtitle != '<none>'){
			$out .= '<h3 class="page_subtitle">'.$block->subtitle.'</h3>';
		}
		$out .= '<div class="page_line"></div>';
		$out .= '</div>';
	}
	$out .= $content;
	if(preg_match("/\bparallax\b/i", $classes)){
		$out .= '</div>';
	}
	$out .= '</div></div></div>';
}elseif($block->region == 'sidebar_first' || $block->region == 'sidebar_second'){
	$out .= '<div '.$id.'class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if($block->subject){
		$out .= '<h3>'.$block->subject.'</h3>';
	}
	$out .= $content;
	$out .= '<div class="clear"></div>';
	$out .= '</div>';
}elseif($block->region == 'footer_column_1' || $block->region == 'footer_column_2' || $block->region == 'footer_column_3'){
	$out .= '<div '.$id.'class="span3 '.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if($block->subject){
		$out .= '<h3>'.$block->subject.'</h3>';
	}
	$out .= $content;
	$out .= '<div class="clear"></div>';
	$out .= '</div>';
}elseif($block->region == 'footer_column_4'){
	$out .= '<div '.$id.'class="span3 '.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if($block->subject){
		$out .= '<h3>'.$block->subject.'</h3>';
	}
	$out .= $content;
	//$out .= '<div class="clear"></div>';
	$out .= '</div>';
}else{
	$out .= '<div '.$id.'class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);	
	$out .= $content;
	$out .= '</div>';
}
print $out;
 ?>