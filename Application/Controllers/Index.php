<?php

class IndexController extends Yaf\Controller_Abstract{
  
  public function init(){
    echo "init ...";
  }

  public function indexAction(){
    echo "Index Action ...";
  }

  public function infoAction(){
    phpinfo();
  }

}
