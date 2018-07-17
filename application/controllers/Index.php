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
		$client = \Elasticsearch\ClientBuilder::create()->build();
		print_r( $client );

    exit;
  }

  public function infoAction(){
    phpinfo();
  }

}
