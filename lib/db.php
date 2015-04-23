<?php
	//$conn = mysql_connect("rdsbezbquaqzfyn.mysql.rds.aliyuncs.com","lvzb","111111");
	/*$conn = mysql_connect("localhost","root");
	if(!$conn){
		die("connect mysql error.");
	}
	//var_dump(mysql_error());
	mysql_select_db("sgfw");*/
	
class dream_mysql
{
	private $db_host = "localhost";
	private $db_user = "root";
	private $db_password = "";
	
	private $conn;
	
	public function __construct(){
		$this->connect();
	}
	
	public function connect(){
		$conn = mysql_connect($this->db_host,$this->db_user,$this->db_password);
		if(!$conn){
			die("connect mysql error.");
		}
		$this->conn = $conn;
		//var_dump(mysql_error());
		mysql_select_db("sgfw");
	}
	
	public function getDiscuss($perpage = 20,$page = 1){
		$sql = "SELECT * FROM sgfw_discuss "." ORDER BY create_time DESC limit ".$perpage." offset ".($page-1)*$perpage.";";
		$result = mysql_query($sql,$this->conn);
		$data = array();
		while($item = @mysql_fetch_array($result)){
			$data[] = $item;
		}
		return $data;
	}
	
	public function getConn(){
		return $this->conn;
	}
}

$mysql = new dream_mysql();
$conn = $mysql->getConn();