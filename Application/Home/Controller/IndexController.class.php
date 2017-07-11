<?php
namespace Home\Controller;
use Think\Controller;
// 本类由系统自动生成，仅供测试用途
class IndexController extends Controller {
    public function index(){
    	$Model = M('Parkinglot');
		$this->display();
    }


    public function _empty(){
        $this->display();
    }
}