<?php
defined( 'DS' ) || define( 'DS', DIRECTORY_SEPARATOR );
defined( 'ROOT' ) || define( 'ROOT', __DIR__.DS.'..'.DS );
//echo ROOT;
/*
if( is_file( ROOT."conf".DS."application.ini" ) ){
  echo "cunzaide.";
}
*/

$app = new Yaf\Application( ROOT."Conf".DS."Application.ini" );
$app->run();
