<?php
namespace Home\Controller;
use Think\Controller;
use Home\Event;
class UserController extends Controller{
	//前置操作方法
	public function _before_IndexAction()
	{
		echo 'before<br/>';
	}

	public function IndexAction()
	{
		echo "Index";
	}
	public function doLogInAction()
	{
		 login();
	}

	public function doLogOutAction()
	{

	}


}
