<?php 

function _themename_image_configuration() {
	add_image_size( 'presentation', 1440,  1152 ); // image d'introduction pour les pages projets - 5:4
    // add_image_size( 'square', 636, 999999 );
	// add_image_size( 'alternative-presentation', 1152, 1440 ); // 4:5
	// add_image_size( 'home', 1097, 877.60 ); // image for the projects on the home page - 5:4 
	// add_image_size( 'half', 960, 0 ); // image for composition with two images side by side
	// add_image_size( 'smaller_half', 762, 428.63 ); // image for composition with smaller two images side by side
	// add_image_size( 'instagram', 648, 1152 ); // image for instagram style 9:16
	// add_image_size( 'project_hover', 234, 187 ); // pour la page project, thumbnail en hover

}
add_action( 'after_setup_theme', '_themename_image_configuration' );
