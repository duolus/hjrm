<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	 //print_r($_SERVER);
		// echo "<b  >HTTP_USER_AGENT :</b> ",$_SERVER['HTTP_USER_AGENT'] ;
		 $start = stripos($_SERVER['HTTP_USER_AGENT'], '(');
		 $end = stripos($_SERVER['HTTP_USER_AGENT'], ')');
		 $str2 = substr($_SERVER['HTTP_USER_AGENT'],$start,$end);
		 $end = stripos($str2, ')');
		 $str2 = substr($_SERVER['HTTP_USER_AGENT'],$start+1,$end-1);
		  //echo  $str2;
		// print_r(explode(';', $str2));
		 if(strpos($str2,"Windows NT") !== false )
		 {
		 	echo "正在使用Windows PC设备";
		 }else if(strpos($str2,"Android") !== false )
		 {
		 	echo "正在使用安卓设备";
		 }else if(strpos($str2,"Windows Phone") !== false )
		 {
		 	echo "正在使用Windows Phone设备";
		 }
    }
}