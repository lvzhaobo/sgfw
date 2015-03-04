<div style="margin:40px 0 0 220px;">
<span style="font-weight:bold;">我的计算器</span>
<?php
	$num1 = 2000;
	$num2 = 15;
	echo "示例：".$num1."+".$num2."=".($num1+$num2);
?>
<form action="request.php" method="post">
  <span>请输入：</span>
  <input name="num1" type="text" style="width:60px;"/>
  <input name="operator" type="text" style="width:40px;"/>
  <input name="num2" type="text" style="width:60px;"/>
  <button type="submit" value="计算">计算</button>
</form>
<a href="../course/php/week1.php" style="text-decoration:none;">
  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">返回课程</div>
</a>
</div>