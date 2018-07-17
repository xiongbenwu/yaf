<?php

class IndexController extends Yaf\Controller_Abstract{
  
  public function init(){
    //echo "init ...";
  }

  public function indexAction(){
    //echo "Index Action ...";
    $medoo = new Medoo();
    print_r( $medoo );
    
    $user = new UserModel();

    exit;
  }

  public function infoAction(){
    phpinfo();
  }

}
