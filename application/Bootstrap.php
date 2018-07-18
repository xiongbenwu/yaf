<?php

class Bootstrap extends Yaf\Bootstrap_Abstract{

	public function _initLoader( Yaf\Dispatcher $dispatcher ){
		if( is_file( ROOT.'vendor/autoload.php' ) ){
		  require ROOT.'vendor/autoload.php';
		}
	}

}

