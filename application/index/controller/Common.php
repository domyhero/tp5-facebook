<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Session;
use app\index\model\Users;

class Common extends Controller
{
    public function _initialize(){
        
    	if( !Session::get('uid','think') ){
            return $this->redirect("Login/index"); 
        }

        $this->userInfo();
    } 
    
    public function userInfo(){
        $user = Users::find( Session::get('uid','think') );
        // is_object( $user ) || die('数据不存在');
		$this->assign(['info'=>$user->getInfo]);    

    }

}
