<?php 

/**
* Trigger this file on Plugin uninstall
*
* 
*/

namespace Includes\Base;

class Activate {

	public static function activate(){
		
		flush_rewrite_rules();

	}

}