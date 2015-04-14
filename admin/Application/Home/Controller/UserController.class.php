<?php

namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{

	public function userinfo(){
		$user = D('User');
		$userinfo = $user ->table('user_info')->select();
		$usercount = $user->table('user_info')->count();

		//var_dump($usercount);
		$this->assign('userinfo',$userinfo);
		$this->assign('usercount',$usercount);
		$this->display("userinfo");
	}
}