<?php

	$conn = mysql_connect("rdsbezbquaqzfyn.mysql.rds.aliyuncs.com","lvzb","111111");
	if(!$conn){
		die("connect mysql error.");
	}
	//var_dump(mysql_error());
	//die;
	/*if (mysql_query("CREATE DATABASE sgfw",$conn)){
		echo "Database created";
	}
	else
		var_dump(mysql_error());
	*/
	mysql_select_db("sgfw");