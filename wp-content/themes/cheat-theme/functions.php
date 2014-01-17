<?php 


//Custom Admin CSS
add_action('admin_head', 'my_custom_css');

function my_custom_css() {
  echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri() . '/css/admin.css'.'">';
  //get_template_directory_uri() . '/css/responsive.css'
}


//No Closing PHP Tag