<?PHP
/*##########################################################################################
##### Activate Theme preprocess Hooks
##########################################################################################
#### Created by:  http://www.cloudred.com
##########################################################################################*/



function omega_activate_alpha_preprocess_html(&$variables) {
     drupal_add_css('http://fonts.googleapis.com/css?family=Ubuntu:700|Bree+Serif', 
     array('type' => 'external'));
}


?>