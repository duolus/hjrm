<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	 //print_r($_SERVER);
		 echo "<b  >HTTP_USER_AGENT :</b> ",$_SERVER['HTTP_USER_AGENT'] ;
    }
}