<?php
$nav_basic = array(
			array('href'=>'c.php','label'=>'C语言基础','links'=>array('c.php')),
			array('href'=>'database.php','label'=>'数据库基础','links'=>array('database.php'))
		);
$nav_project = array(
			array('href'=>'website.php','label'=>'网站开发','links'=>array('website.php')),
			array('href'=>'php.php','label'=>'PHP+MySQL','links'=>array('php.php')),
			array('href'=>'jsp.php','label'=>'JSP+MySQL','links'=>array('jsp.php'))
		);

$current_page = $_SERVER["REQUEST_URI"];
$current_page = preg_replace("/\?.*/","",$current_page);
$current_page = preg_replace("/\/sgfw\//","",$current_page);
$current_page = trim($current_page,"\/");
$nav_str = "<style type='text/css'>
	  p {text-indent:2em;line-height:1.6em;}
	  a {text-decoration:none;color:#5D5D5D;font-weight:bold;}
	  .course_nav_item {margin:0 14px;color:#000000;}
	  .couse_selected,.course_nav_item:hover{color:#FF9900;}
	</style>";
$nav_str .= '
	<div style="margin:-20px 0 10px 14px;padding:5px 0px;font-weight:normal;line-height:28px;font-size:14px;color:#CCCCCC;width:140px;height:28px;border-left:0px solid #00A2C9;">基础课程</div>
';
foreach($nav_basic as $key=>$nav_item){
	$links = $nav_basic[$key]["links"];
	$nav_str .='
	  <a href="'.$nav_item["href"].'">
		<div style="width:100%;height:40px;" class="course_nav_item'.(in_array($current_page,$links)?" couse_selected":"").'">
		  '.$nav_item["label"].'
		</div>
	  </a>
	';
}
$nav_str .= '
	<div style="margin:-20px 0 10px 14px;padding:5px 0px;font-weight:normal;line-height:28px;font-size:14px;color:#CCCCCC;width:140px;height:28px;border-left:0px solid #00A2C9;">综合项目</div>
';
foreach($nav_project as $key=>$nav_item){
	$links = $nav_project[$key]["links"];
	$nav_str .='
	  <a href="'.$nav_item["href"].'">
		<div style="width:100%;height:40px;" class="course_nav_item'.(in_array($current_page,$links)?" couse_selected":"").'">
		  '.$nav_item["label"].'
		</div>
	  </a>
	';
}
echo $nav_str;