<?php
$nav = array(
			array('href'=>'website.php','label'=>'网站设计','links'=>array('website.php')),
			array('href'=>'php.php','label'=>'PHP','links'=>array('php.php')),
			array('href'=>'jsp.php','label'=>'JSP','links'=>array('jsp.php')),
			array('href'=>'database.php','label'=>'数据库基础','links'=>array('database.php')),
			array('href'=>'c.php','label'=>'C语言基础','links'=>array('c.php'))
		);
$current_page = $_SERVER["REQUEST_URI"];
$current_page = preg_replace("/\?.*/","",$current_page);
$current_page = preg_replace("/\/sgfw\//","",$current_page);
$current_page = trim($current_page,"\/");
$nav_str = "<style type='text/css'>
	  p {text-indent:2em;line-height:1.6em;}
	  a {text-decoration:none;color:#5D5D5D;font-weight:bold;}
	  .course_nav_item {margin:0 16px;color:#000000;}
	  .couse_selected,.course_nav_item:hover{color:#FF9900;}
	</style>";
foreach($nav as $key=>$nav_item){
	$nav_str .='
	  <a href="'.$nav_item["href"].'">
		<div style="width:100%;height:40px;" class="course_nav_item'.(in_array($current_page,$nav[$key]["links"])?" couse_selected":"").'">
		  '.$nav_item["label"].'
		</div>
	  </a>
	';
}
echo $nav_str;