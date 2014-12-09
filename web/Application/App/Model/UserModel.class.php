<?php

namespace App\Model;
use Think\Model;

/**
 * 分类模型
 */
class UserModel extends Model{
	public function login($username,$password){
		$m_ucenter_member = M("ucenter_member");
		$user_info = $m_ucenter_member->where("username='$username' AND password='$password'")->find();
		return $user_info;
	}

}
