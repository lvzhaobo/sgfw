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
			
			if(empty($info) && strlen(base64_encode($_POST["content"]))<=2048){
				$sql = "insert into sgfw_discuss (username,content,create_time) values('".base64_encode($username)."','".base64_encode($_POST["content"])."','".(time()+3600*8)."')";
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
window.location.href="../modules/login.php";
</script>';
		return ;
		}
		$info = "发表成功";
	}
	noticeObject::setNotice($info);
?>
<?php
	if(isset($_GET["referer"]) && ($_GET["referer"]=="mystudy")){
?>
<script>
window.location.href="../modules/myspace/myStudy.php";
</script>
<?php
	}
	else{
?>
<script>
window.location.href="../modules/discuss.php";
</script>
<?php }?>
