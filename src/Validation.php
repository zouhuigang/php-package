<?php
namespace zouhuigang\package;
class Validation{
   
    /*
    * 验证邮箱是否正确
    */
    public function is_email($email=''){
        return preg_match("/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i", $email) ? true : false;
    }

    /*判断是否是空*/
    public function is_null($str) {
	    return $str ? strip_tags($str) : '';
	}


}