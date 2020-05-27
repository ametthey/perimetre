<?php

/**
 * Remove elements from the left menu on the dashboard
 * https://developer.wordpress.org/reference/functions/remove_menu_page/
 */
function _themename_remove_options_menu(){

  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'index.php' );                  //Dashboard
	remove_menu_page( 'jetpack' );                    //Jetpack*
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', '_themename_remove_options_menu' );
?>
