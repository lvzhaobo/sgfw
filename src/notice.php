<?php 
	include 'notice.php';
	$info = noticeObject::getNotice();
	//$info = @file_get_contents("info.txt");
	//if(empty($info))
		//$info = @file_get_contents(md5($_SESSION["user"]).".txt");
	if(!empty($info)){?>
  <div style="margin:0 200px;margin-top:60px;margin-bottom:-60px;">
	<div style="background-color:#F3F3F3;width:960px;height:28px;border:2px solid #DDDDDD;text-align:center;color:#FF9900;font-size:16px;font-weight:bold;padding:6px 10px;">
	  <?php 
		echo $info;
		file_put_contents("info.txt","");
		file_put_contents(md5(@$_SESSION["user"]).".txt","");
	  ?>
	</div>
  </div>
<?php }?>