<?php
namespace Home\Model;
use Think\Model;
class ParkinglotModel extends Model{
	protected $_validate = array(
		array('name','require','请输入停车场名'),
		// array('com_address','require','请输入公司地址'),
	); 
	// 定义自动完成
	protected $_auto = array(
		array('create_time','time',1,'function'),
	);

}