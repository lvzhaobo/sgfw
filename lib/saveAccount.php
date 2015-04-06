<?php
	include 'db.php';
	include 'notice.php';
	session_start();
	
	$action = "";
	if(isset($_GET["action"]))
		$action = $_GET["action"];
	
	if($action=="upload"){
		$file_name = $_FILES["file"]["name"];
		if(empty($file_name)){
			echo '<script>window.location.href="../modules/myspace/index.php?info=请选择图片";</script>';
			return ;
		}
		$img = explode(".",$_FILES["file"]["name"]);
		$file_name = time()."-".base64_encode($img[0]).".".$img[1];

		if (!file_exists($file_name)){
			move_uploaded_file($_FILES["file"]["tmp_name"],"../data/upload/".$file_name);
			//echo "Stored in: " . $file_name;
			$sql = "UPDATE sgfw_user SET img='".$file_name."' WHERE username='".base64_encode($_SESSION["user"])."'";
			$result = mysql_query($sql,$conn);
			//var_dump($result);
			if(!$result){
				echo mysql_error();die;
			}
			$info = "upload_success";
			//var_dump($info);
		}
	}
	else{
		$edit = @$_GET["edit"];
		$data = $_POST["account"];
		$info = "";
		if($edit!="true"){
			if(empty($data["username"]))
				$info = "用户名不能为空";
			if(empty($data["password"]) || empty($data["email"]))
				$info = "信息不完整";
			if(($data["password"]!=$data["password_2"]) && empty($info))
				$info = "两次密码不相同";
			$sql = "select * from sgfw_user where username='".base64_encode($data["username"])."'";
			$result = mysql_query($sql,$conn);
			$row = mysql_fetch_array($result);
			
			if((isset($row["id"]) && !empty($row["id"])) && empty($info))
				$info = "用户名已被使用";
			if(empty($info)){
				$sql = "insert into sgfw_user (username,password,email,create_time) values('".base64_encode($data["username"])."','".$data["password"]."','".$data["email"]."','".time()."')";
				$result = mysql_query($sql,$conn);
				if(!$result){
					$info = "注册失败";
					//var_dump(mysql_error());
					//die;
				}
				
				$header = "From: 梦想学院<root@mail.dreamcollege.cn>\n";
				$header .= "Return-Path: <root@mail.dreamcollege.cn>\n";     //防止被当做垃圾邮件，但在sina邮箱里不起作用
				$header .= "MIME-Version: 1.0\n";
				$header .= "Content-type: text/html; charset=utf-8\n";    //邮件内容为utf-8编码
				$header .= "Content-Transfer-Encoding: 8bit\r\n";    //注意header的结尾，只有这个后面有\r
				ini_set('sendmail_from', 'root@mail.dreamcollege.cn');     //解决mail的一个bug
				$send = mail($data["email"], $data["username"]."，您已成功注册梦想学院账号，欢迎使用", html_entity_decode("<div style='width:200px;height:80px;border:2px solid #FF9900;'>恭喜，您已成功注册梦想学院账号。<a href='http://my.dreamcollege.cn'>梦想学院主页</a><br />梦想团队</div>"),$header);
				
				$info = "注册成功";
				$_SESSION["user"] = $data["username"];
				$_SESSION["code"] = md5($data["password"]);
			}
			noticeObject::setNotice($info);
		}
		else{
			$username = $_SESSION["user"];
			$sql = "UPDATE sgfw_user SET qq='".$data["qq"]."' , email='".$data["email"]."' , college='".$data["college"]."' , config='".$data["config"]."' WHERE username = '".base64_encode($username)."'";
			$result = mysql_query($sql);
			if(!$result){
				$info = "更新失败";
			}
			$info = "更新成功";
			noticeObject::setNotice($info);
		}
		echo '<script>window.location.href="../modules/myspace/index.php";</script>';
	}
	//var_dump(mysql_error());
	
	//var_dump($info,empty($info));die;
?>
<script>
//alert("burning");
<?php if(empty($info)){?>/
window.location.href="../modules/myspace/index.php?info=注册成功";
<?php }
else if($info=="upload_success"){
?>
window.location.href="../modules/myspace/index.php";
<?php
}
else{
?>
window.location.href="../modules/register.php?info="+"<?php echo $info;?>";
<?php }?>
</script>