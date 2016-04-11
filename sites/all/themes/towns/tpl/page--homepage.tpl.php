<?php require_once(drupal_get_path('theme','towns').'/tpl/header.tpl.php'); ?>
<?php if($page['slider']) print render($page['slider']); ?>
<?php
    if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
        print render($tabs);
    endif;
    print $messages;
    if($page['content']){
    	print render($page['content']);
    }
?>
<?php if($page['section']) print render($page['section']); ?>
<?php require_once(drupal_get_path('theme','towns').'/tpl/footer.tpl.php'); ?>