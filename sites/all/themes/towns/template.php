<?php
	$towns_skin = theme_get_setting('built_in_skins', 'towns');
	if(!empty($towns_skin)){
	  $skin_color = '/css/skins/'.$towns_skin.'.css';
	}else{
	  $skin_color = '/css/skins/blue.css';
	}
	$css_skin = array(
	  '#tag' => 'link', // The #tag is the html tag - <link />
	  '#attributes' => array( // Set up an array of attributes inside the tag
	  'href' => base_path().path_to_theme().$skin_color,
	  'rel' => 'stylesheet',
	  'type' => 'text/css',
	  'id' => 'towns-theme-config-link',
	  ),
	  '#weight' => 2,
	);
	//print $skin_color;
	drupal_add_html_head($css_skin, 'skin');
	function towns_preprocess_node(&$vars) {

		unset($vars['content']['links']['statistics']['#links']['statistics_counter']);

  		// Get a list of all the regions for this theme
	}

	function towns_preprocess_html(&$variables){

  	//-- Google web fonts -->
	  	drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300', array('type' => 'external'));
	  	//drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array('type' => 'external'));
 		drupal_add_css('http://fonts.googleapis.com/css?family=PT+Sans:400,700', array('type' => 'external'));
 		//drupal_add_css('http://fonts.googleapis.com/css?family=Oswald:300', array('type' => 'external'));
 		//drupal_add_css('http://fonts.googleapis.com/css?family=Raleway:600&amp;subset=latin', array('type' => 'external'));
 		if(arg(0) == 'node' && is_numeric(arg(1))){
 			$node = node_load(arg(1));
 			$ntype = node_type_get_type($node)->type;
 			if($ntype == 'homepage'){
 				$variables['bodyId'] = 'id="home"';
 			}
 			//print $ntype;
 		}elseif(drupal_is_front_page()){
 			$variables['bodyId'] = 'id="home"';
 		}
 	}
 	function towns_form_comment_form_alter(&$form, &$form_state) {
  		$form['comment_body']['#after_build'][] = 'towns_customize_comment_form';
	}
	function towns_customize_comment_form(&$form) {
  		$form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  		return $form;
	}
 	function towns_preprocess_page(&$vars){
  		if (isset($vars['node'])){
    		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  		}
  		//Taxonomy page
  		/*if (arg(0) == 'taxonomy'){
      		$vars['theme_hook_suggestions'][] = 'page__taxonomy';
    	}*/
    	//View template
    	/*if(views_get_page_view()){
    		$vars['theme_hook_suggestions'][] = 'page__view';
    	}*/
    	drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' .base_path().path_to_theme() . '" });', 'inline');

    	if(arg(0) == 'taxonomy' && arg(1) == 'term') {
	        $tid = (int)arg(2);
	        $term = taxonomy_term_load($tid);
        	if(is_object($term)) {
           		$vars['theme_hook_suggestions'][] = 'page__taxonomy__'.$term->vocabulary_machine_name;
        	}
  		}
  		if (drupal_is_front_page()) {
    		unset($vars['page']['content']['system_main']['default_message']); //will remove message "no front page content is created"
  		}
  		 if(arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    		unset($vars['page']['content']['system_main']['term_heading']);
  		}
	}
	function towns_node_view_alter(&$build){
    	if ($build['#view_mode'] == 'teaser'){
        // remove "add comment" link from node teaser mode display
        unset($build['links']['comment']['#links']['comment-add']);
        // and if logged out this will cause another list item to appear, so let's get rid of that
        unset($build['links']['comment']['#links']['comment_forbidden']);
    	}
	}
	function towns_links($links) {
    	return theme_links($links);
	}
	function towns_menu_tree__main_menu($variables) {
	    return '<ul>' . $variables['tree'] . '</ul>';
	}
	function towns_menu_tree__menu_top_menu($variables) {
	  	if (preg_match("/\bexpanded\b/i", $variables['tree'])){
	    	return '<ul class="menu">' . $variables['tree'] . '</ul>';
	  	}else{
	    	return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
	  	}
	}
	/*function towns_form_search_block_form_alter(&$form, &$form_state, $form_id) {
	    unset($form['search_block_form']['#title']); // remove label form
	    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
	    $form['search_block_form']['#size'] = 40;  // define size of the textfield
	    $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
	    $form['search_block_form']['#attributes']['onfocus'] = 'if(this.value=="Search")this.value="";';
	    $form['search_block_form']['#attributes']['onblur'] = 'if(this.value=="")this.value="Search";';
	    //$form['search_block_form']['#attributes']['name'] = 's';
	    $form['search_block_form']['#attributes']['id'] = 's';
	    $form['actions']['submit']['#value'] = t(''); // Change the text on the submit button
	    $form['#attributes']['id'] = 'searchform';

	    // Add extra attributes to the text box
	    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
	    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	    // Prevent user from searching the default text
	    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";

	    // Alternative (HTML5) placeholder attribute instead of using the javascript
	    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
	}*/

function towns_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
   	if(arg(0) == 'node' && is_numeric(arg(1))){
 		$node = node_load(arg(1));
 		$ntype = node_type_get_type($node)->type;
 	}else{
 		$ntype = '';
 	}
 	if($ntype == 'homepage' || drupal_is_front_page() == TRUE){
	  	if (strpos(url($element['#href']), 'nolink')) {
	    	$link = substr(url($element['#href']), 13);

	    	$output = '<a href="'.$link.'" class="nolink">' . $element['#title'] . '</a>';
	  	}else{
	    	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	  	}
	}else{
		$link = substr(url($element['#href']), 13);
		$link_cs = base_path().$link;
		$output = '<a href="'.$link_cs.'" class="go-to-homepage">' . $element['#title'] . '</a>';
	}
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
function make_my_path($nid) {
  $pretty_path  = drupal_get_path_alias('node/' . $nid);
  return $pretty_path;
}