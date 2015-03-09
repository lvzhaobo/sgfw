<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  input,select {line-height:28px;width:240px;border:2px solid #CCCCCC;font-weight:bold;font-size:14px;padding:4px 10px;margin:2px 4px;border-radius:0.5em;}
	  input:hover,select:hover {color:#0099FF;border:2px solid #FF9900;}
	  th {text-align:right;font-weight:normal;font-size:14px;}
	  button {font-weight: bold; line-height: 32px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 80px; font-size: 16px; border-radius: 0.5em; margin: 0px 0px 0px 204px; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  button:hover {border:2px solid #0099FF;color:#FF9900;}
	  .message {font-size:14px;color:#333333;}
	</style>
	<script src="../src/js/account.js" type="text/javascript"></script>
	<script type="text/javascript" src="../src/js/jquery.min.js"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<?php include '../src/notice.php'?>
	<div class="main index" style="padding-top:60px;width:960px;height:100%;min-height:480px;margin:0 auto;font-size:14px;">
	  <div style="margin:0px 0 0 0;">
	    <div style="float:left;width:400px;margin:60px 0 0 0;">
		  <img src="../src/images/dream.jpg" style="width:400px;">
		</div>
		<div class="content" style="width:560px;float:left;margin:28px 0 0 0px;min-height:320px;">
		  <form action="../lib/saveAccount.php" method="post" id="register">
		    <table>
			  <tr>
			    <th width="60">用户名</th>
				<td><input id="username" name="account[username]"></td>
				<td><span id="msg_user" class="message">4-20位数字和字母组成</span></td>
			  </tr>
			  <tr>
			    <th>密码</th>
				<td><input name="account[password]" type="password" id="password"></td>
				<td><span id="msg_password" class="message">4-20位数字和字母组成</span></td>
			  </tr>
			  <tr>
			    <th>确认密码</th>
				<td><input name="account[password_2]" type="password" id="redo"></td>
				<td><span id="msg_redo" class="message">再次输入密码</span></td>
			  </tr>
			  <!--<tr>
			    <th>QQ</th>
				<td><input name="account[qq]"></td>
			  </tr>-->
			  <tr>
			    <th>Email</th>
				<td><input name="account[email]" id="email"></td>
				<td><span id="msg_email" class="message">输入邮箱地址</span></td>
			  </tr>
			  <!--<tr>
			    <th>推荐人</th>
				<td><input name="account[recommender]" value="<?php echo (isset($_GET["r"])?base64_decode($_GET["r"]):"")?>"></td>
			  </tr>
			  <tr>
			    <th>学校</th>
				<td><input name="account[college]" id="selectcollege"></td>
			  </tr>
			  <tr>
			    <th></th>
				<td style=""><div id="collegedata" style="padding:5px 10px;max-height:104px;overflow:auto;"></div></td>
			  </tr>-->
			  <tr>
			    <th></th>
				<td><button type="submit" style="">确定</button></td>
			  </tr>
			</table>
		  </form>
		</div>
	</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php'?>
  </body>
</html>
<script>
$(document).ready(function(){
  $("#selectcollege").keyup(function(){
  //alert($("#selectcollege").val());
  htmlobj=$.ajax({url:"request.php?action=getCollegeNames&str="+$("#selectcollege").val(),async:false});
  $("#collegedata").html(htmlobj.responseText);
  });
  
  //表单
	var form = $('#register');
    //用户名
	var user 	 = $('#username');
	var msg_user = $('#msg_user');
	var mode_user = /[0-9A-z]{4,20}$/;
	//密码
	var password  = $('#password');
	var redo  = $('#redo');
	var msg_password      = $('#msg_password');
	var msg_redo      = $('#msg_redo');
	var mode_password = /[A-Za-z].*[0-9]|[0-9].*[A-Za-z]$/;
	//邮箱
	var email 	   = $('#email');
	var msg_email  = $('#msg_email');	
	var mode_email = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	
	//触发验证函数
	user.change(function(){
		if( fields( user , mode_user) ){
			msg( msg_user , "<font color='#093'>&radic;</font>");
		}else{
			msg( msg_user , "<font color='red'>&times;用户名格式不对</font>");
		}
	})
	password.bind('change',function(){
		if( fields( password , mode_password)){
			msg( msg_password , "<font color='#093'>&radic;</font>");
			if( password.val() == redo.val()){
				msg( msg_redo , "<font color='#093'>&radic;</font>");
		}
		else{
			msg( msg_redo , "<font color='red'>&times;两次输入的密码不一至</font>");
		}
		}
		else{
			msg( msg_password , "<font color='red'>&times;密码格式不对</font>");
		}
	})
	redo.bind('change',function(){
		if( !fields( redo , mode_password)){
			msg( msg_redo , "<font color='red'>&times;密码格式不对</font>");
			return ;
		}
		if( password.val() == redo.val()){
			msg( msg_redo , "<font color='#093'>&radic;</font>");
		}
		else{
			msg( msg_redo , "<font color='red'>&times;两次输入的密码不一至</font>");
		}
	})
	email.change(function(){
		if( fields( email ,  mode_email) ){
			msg( msg_email , "<font color='#093'>&radic;</font>");
		}else{
			msg( msg_email , "<font color='red'>&times;邮箱格式不对</font>");
		}
	})
	
	//一般字段验证
	function fields( field , mode ){
		console.log(field.val());
		if( mode.test( field.val() ) ){
			return true;
		}
		return false;
	}
	//密码交叉验证
	function cross( passwordA , passwordB , mode){
		if( fields( passwordA , mode) && fields( passwordB , mode)){
			if( passwordA.val() == passwordB.val()){
				return true;
			}
		}
		return false;
	}
	
	//提交验证
	form.submit(function(){
		if( !fields( user , mode_user ) ){
			msg( msg_user , "<font color='red'>&times;</font>");
		}else if( !cross( password , redo , mode_password ) ){
			msg( msg_redo , "<font color='red'>&times;</font>");
		}else if(!fields( email , mode_email )){
			msg( msg_email , "<font color='red'>&times;</font>");
		}else{
			return true;
		}
		return false;
	})
	//信息提示
	function msg( msg_field , str ){
		msg_field.html(str);
	}
});

<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="register.php";
<?php }?>
</script>