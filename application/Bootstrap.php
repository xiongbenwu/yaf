<?php

class Bootstrap extends Yaf\Bootstrap_Abstract{

	public function _initLoader( Yaf\Dispatcher $dispatcher ){
		require ROOT.'vendor/autoload.php';
	}

}

