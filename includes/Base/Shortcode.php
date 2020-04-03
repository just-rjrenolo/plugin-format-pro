<?php 

/**
* Trigger this file on Plugin uninstall
*
*
*/

namespace Includes\Base;

use \Includes\Base\BaseController;

class Shortcode extends BaseController{

	function register() {
		add_shortcode( 'Bidi_Recycle', array( $this , 'template' ) );
	}

	function template(){
		// require admin template
		require_once $this->plugin_path . 'templates\page.template.php';	
	}
}