<?php

class IndexController extends Yaf\Controller_Abstract{
  
  public function init(){
    //echo "init ...";
  }

  public function indexAction(){
    //echo "Index Action ...";
    //$medoo = new Medoo();
    //print_r( $medoo );
    //$user = new UserModel();

    //$curl = new \Curl\Curl(); 
		//print_r( $curl );

		//$v = new Valitron\Validator( array('name' => 'Chester Tester') );
		$v = new Valitron\Validator( array('name1' => 'Chester Tester') );
		$v->rule( 'required', 'name' );
		if($v->validate()) {
			echo "Yay! We're all good!";
		} else {
			// Errors
			print_r($v->errors());
		}
		exit;

		$collection = (new MongoDB\Client)->test->users;

		$insertOneResult = $collection->insertOne([
			    'username' => 'admin',
					    'email' => 'admin@example.com',
							    'name' => 'Admin User',
								]);

		printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
		print_r($insertOneResult->getInsertedId());
		exit;

		//use Elasticsearch\ClientBuilder;
		//$client = \Elasticsearch\ClientBuilder::create()->build();
		//print_r( $client );

    exit;
  }

  public function infoAction(){
    phpinfo();
  }

}
