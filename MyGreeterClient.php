<?php
/**
 * 创建人zjw
 *创建时间2020年6月29日
 */
class Client{
    public $instances;
    public function __construct()
    {

    }
    public function getGreeting($timestamp=''){
        //当前时间
        $time = $this->n_timestamp($timestamp);
        //早上好
        $good_morning_start_time = strtotime(date('Y-m-d',$time));
        //下午好
        $good_afternoon_start_time = strtotime(date('Y-m-d 12:00:00',$time));
        //晚上好
        $good_evening_start_time = strtotime(date('Y-m-d 18:00:00',$time));
        if($time>=$good_morning_start_time && $time<$good_afternoon_start_time) return "早上好";
        if($time>=$good_afternoon_start_time && $time<$good_evening_start_time) return "中午好";
		if( $time<$good_evening_start_time && $time<$good_morning_start_time) return "晚上好";
    }
	 //验证是否是时间戳
	    public function n_timestamp($timestamp) {
	        if(empty($timestamp) || strtotime(date('Y-m-d H:i:s',$timestamp)) != $timestamp)
	            return time();
	        return $timestamp;
	    }
}
