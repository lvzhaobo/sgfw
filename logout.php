<?php
	session_start();
	if(isset($_SESSION["user"])){
		$user = $_SESSION["user"];
		unset($_SESSION["user"]);
		$info = $user." 已成功退出，请重新登录。";
		file_put_contents("info.txt",$info);
	}
?>
<script>
window.location.href="login.php";
</script>