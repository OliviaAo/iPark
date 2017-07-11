<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class ParkinglotController extends Controller {


     public function _empty(){
        $this->display();
    }


    public function search(){
        $map['name'] = I('post.name');
        if($map['name']==''||$map['name']==null) {
            $this->redirect("Home/Index/index");
            return;
        }
    	$Model = M('Parkinglot');
    	$results = $Model->where($map)->select();
    	$this->assign('parks',$results);

        $PL_ID  =  $results[0]['id'];
        $Spaces =  M('Spaces');
        $sp     =  $Spaces->where("plid=$PL_ID")->select();

        $sp_info['spaces']  =   $Spaces->where("plid=$PL_ID")->count();
        $sp_info['rest']    =   $Spaces->where("plid=$PL_ID and spstatus=0")->count();

        $this->assign("sp", $sp);
        $this->assign("sp_info",$sp_info);
    	if($results!==false){
    		 $this->display();
    	}
    	else{
    		$this->error('not found');
    	}
    }


// 获取车位状态
// Parameter:
//      $PL_ID:车场ID
//      $SP_ID:车位ID
// 返回值:
//      车位id,status-车位状态
// Author   : ylh/la
// Date     : 2015-9-2
    public function getStatus($PL_ID, $SP_ID){
        $map['plid'] =  $PL_ID;
        $map['spid'] =  $SP_ID;
        $Spaces      =  M("Spaces")->where($map)->select();
        $sp          =  $Spaces[0];
        echo $sp['spid'].",status-".$sp['spstatus'].";";
    }

// 设置车位状态
// Parameter:
//      $PL_ID      :   车场ID
//      $SP_ID      :   车位ID
//      $Status     :   车位状态
// 返回值:
//      无
// Author   : ylh
// Date     : 2015-05-24
    public function setStatus($PL_ID,$Status){
        $Spaces             =   M("Spaces");
        $data['plid']       =   $PL_ID;
        $arr = explode(";", $Status);
        for ($i=0; $arr[$i]!=NULL ; $i++) { 
            $row                = explode(",", $arr[$i]);
            $SP_ID              = intval($row[0]);
            $data['spid']       = $SP_ID;
            $SP_Status          = intval($row[1]);
            $data['spstatus']   = $SP_Status;
            $Spaces->data($data)->save();
        }      
        echo "succeed,PL:$PL_ID,SP:$SP_ID,Status:$Status";
    }
}