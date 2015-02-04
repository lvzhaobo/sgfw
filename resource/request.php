<div style="margin:40px 0 0 220px;">
<span style="font-weight:bold;">计算结果：</span><br />
<?php
	$operator = $_POST["operator"];
	if($operator == "+"){
		$result = $_POST["num1"]+$_POST["num2"];
	}
	else if($operator == "*"){
		$result = $_POST["num1"]*$_POST["num2"];
	}
	else if($operator == "/"){
		$result = $_POST["num1"]/$_POST["num2"];
	}
	else if($operator == "-"){
		$result = $_POST["num1"]-$_POST["num2"];
	}
	else{
		echo $result = "无结果";
	}
	
	echo $_POST["num1"].$_POST["operator"].$_POST["num2"]."=".$result;
?>
<br />
<a href="index.php">返回</a>
<br />
<a href="../course/php/week1.php" style="text-decoration:none;">
  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">返回课程</div>
</a>
</div>