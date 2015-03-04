<?php
	include 'db.php';
	include 'notice.php';
	session_start();
	
	$action = "saveDiscuss";
	if(isset($_GET["action"]))
		$action = $_GET["action"];
	
	if($action=="saveDiscuss"){
		$info = "";
		if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
			$username = $_SESSION["user"];
			
			if(empty($info)){
				$sql = "insert into sgfw_discuss (username,content,create_time) values('".base64_encode($username)."','".$_POST["content"]."','".(time()+3600*8)."')";
				$result = mysql_query($sql,$conn);
				if(!$result){
					$info = "发表失败";
				}
			}
		}
		else{
			$info = "请先登录";
			noticeObject::setNotice($info);
			echo '<script>
window.location.href="login.php";
</script>';
		return ;
		}
		$info = "发表成功";
	}
	noticeObject::setNotice($info);
?>
<script>
window.location.href="discuss.php";
</script>