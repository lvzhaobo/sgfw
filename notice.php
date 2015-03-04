<?php
class noticeObject
{
	public static function setNotice($info){
		$remote_addr = $_SERVER["REMOTE_ADDR"];
		@file_put_contents(md5($remote_addr).".txt",$info);
	}
	
	public static function getNotice(){
		$filename = md5($_SERVER["REMOTE_ADDR"]).".txt";
		$info = @file_get_contents($filename);
		@file_put_contents($filename,"");
		return $info;
	}
}