<?php
namespace zouhuigang\package;
class Tool{
   
    /*
    * 获取年龄
    */
	public function get_age($birthday){ 
		if(is_numeric($birthday)){//如果是存全是数字，则当成时间戳
			$age = $birthday; 
		}else{
			$age = strtotime($birthday); 
		}
		if($age === false){ 
		  return false; 
		} 
		list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age)); 
		$now = strtotime("now"); 
		list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now)); 
		$age = $y2 - $y1; 
		if((int)($m2.$d2) < (int)($m1.$d1)) 
		  $age -= 1; 
		return $age; 
	} 


}