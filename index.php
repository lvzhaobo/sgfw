<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;font-size:14px;color:#000000;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .item_content {line-height:36px;margin:20px;float:left;width:520px;color:#333333;letter-spacing:2px;font-size:16px;}
	</style>
	<script src="src/js/account.js" type="text/javascript"></script>
	<link rel="stylesheet" href="src/css/main.css" type="text/css" media="screen" />
	<script type="text/javascript" src="src/js/jquery.min.js"></script>
	<script type="text/javascript" src="src/js/main.js"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
  <?php $rand = rand(1,5);$img = "bg".$rand.".jpg";?>
    <?php include 'src/header.php'?>
	<div id="header">
  <div class="wrap">
   <div id="slide-holder">
		<div id="slide-runner">
			<a target="_blank"><img id="slide-img-1" src="src/images/bg.jpg" class="slide" alt="" style="width:100%;overflow:hidden;"/></a>
			<a target="_blank"><img id="slide-img-2" src="src/images/bg4.jpg" class="slide" alt="" style="width:100%;overflow:hidden;margin:-100px 0 0 0;"/></a>
			<a target="_blank"><img id="slide-img-3" src="src/images/1st.jpg" class="slide" alt="" style="width:100%;overflow:hidden;margin:-20px 0 0 0;"/></a>
			<div id="slide-controls">
			 <p id="slide-client" class="text"><strong></strong><span></span></p>
			 <p id="slide-desc" class="text"></p>
			 <p id="slide-nav"></p>
			</div>
		</div>
   </div>
   <script type="text/javascript">
    if(!window.slider) {
		var slider={};
	}

	slider.data= [
    {
        "id":"slide-img-1", // 与slide-runner中的img标签id对应
        "client":"基础课程",
        "desc":"我是大一学生，我在学习梦想学院的“C语言基础”，她能很好的弥补老师讲解理论的不足，让我快速掌握C语言。" //这里修改描述
    },
    {
        "id":"slide-img-2",
        "client":"项目实践",
        "desc":"在迷茫的大学生活中，我想获得更多的能力和舞台，我在梦想学院中和同学们使用PHP+MySQL一起开发学校的论坛。"
    },
	{
        "id":"slide-img-3",
        "client":"开放注册",
        "desc":"我们在各高校校区招募负责人，有兴趣请联系我们。"
    }
	];
   </script>
  </div>
</div>
<!--<div style="width:100%;height:420px;background-image:url('bg-.jpg');background-repeat:no-repeat;background-color:#FFFFFF;">
<img src="image/dream.jpg" style="margin:40px 100px 0 220px;width:420px;float:left;">
<div style="margin:40px 0 0 100px;">
  <div style="font-size:22px;font-weight:bold;padding:40px 0 40px 0;">首批接受注册学校</div>
  <div style="font-size:18px;font-weight:bold;line-height:32px;">
    <div><span style="color:#333333;">郑州大学</span> <span style="color:#FF9900;">2015年3月13日</span></div>
	<div><span style="color:#333333;">黄河科技学院</span> <span style="color:#FF9900;">2015年3月13日</span></div>
	<div><span style="color:#333333;">郑州轻工业学院</span> <span style="color:#FF9900;">2015年3月13日</span></div>
	<div><span style="color:#333333;">中原工学院</span> <span style="color:#FF9900;">2015年3月17日</span></div>
	<div><span style="color:#333333;">郑州航空工业管理学院</span> <span style="color:#FF9900;">2015年3月18日</span></div>
	<div><span style="color:#333333;">河南工业大学</span> <span style="color:#FF9900;">2015年3月19日</span></div>
  </div>
</div>
</div>-->
<!--<div style="width:100%;height:420px;background-image:url('bg-.jpg');background-repeat:no-repeat;background-color:#FF9900;">
<div style="margin:40px 0 0 0px;">
  <div style="font-size:22px;font-weight:bold;padding:80px 0 40px 0;color:#FFFFFF;text-align:center;">Be What You Wanna Be</div>
  <div style="font-size:18px;font-weight:bold;line-height:32px;">
  </div>
</div>
</div>-->
<!--<div style="width:100%;height:420px;background-color:#333333;">
  <div style="color:#FF9900;font-size:22px;font-weight:bold;">
    我是大一学生，我在学习梦想学院的C语言基础课程。
  </div>
</div>-->
    <?php /*?><div id="logo" style="margin:0px;padding:0px;height:420px;overflow:hidden;background:url('<?php echo $img?>') no-repeat scroll 0 0 / 1400px auto rgba(0, 0, 0, 0);">
	  <div style="margin:100px 0 0 280px;">
	    <span style="font-size:56px;font-weight:bold;color:#FFFFFF;">梦&nbsp;&nbsp;想&nbsp;&nbsp;之&nbsp;&nbsp;星</span><br />
		<span style="color:#FFFFFF;font-size:24px;">让&nbsp;&nbsp;梦&nbsp;&nbsp;想&nbsp;&nbsp;在&nbsp;&nbsp;时&nbsp;&nbsp;光&nbsp;&nbsp;中&nbsp;&nbsp;飞&nbsp;&nbsp;舞</span><br />
		<span style="color:#FF6600;font-size:24px;">梦想科技 | I Dream, I Do, I Succeed!</span>
	  </div>
	  <?php ?><div style="margin:0px 0 0 720px;font-size:16px;font-weight:bold;width:400px;color:#FFFFFF;">
	    <?php if($rand%3==0){?><span>我是大一学生，在学习梦想学院的C语言基础，能很好的弥补老师讲课的不足</span><br /><?php }?>
		<?php if($rand%3==1){?><span>在迷茫的大学生活中，我想获得更多的能力和舞台，我在使用PHP开发学校的论坛</span><br /><?php }?>
		<?php if($rand%3==2){?><span>寻找有梦想、有兴趣、有想法的同学，通过我们的扶持，让你的想法、项目顺利发芽、成长</span><br /><?php }?>
	  </div><?php /*?>
	  <div id="project" name="project" style="width:960px;margin:140px auto;font-size:32px;">
	    <a href="index.php">
		<div style="width:192px;background-color:rgba(1515,00,00,0.25);height:60px;text-align:center;float:left;">
		  首页
		</div>
		</a>
		<a href="study.php">
		<div style="width:192px;background-color:rgba(00,1211,1014,0.25);height:60px;text-align:center;float:left;">
		  种子课程
		</div>
		</a>
		<a href="project.php">
		<div style="width:192px;background-color:rgba(00,99,1515,0.25);height:60px;text-align:center;float:left;">
		  萌芽项目
		</div>
		</a>
		<a href="team.php">
		<div style="width:192px;background-color:rgba(150,00,99,0.25);height:60px;text-align:center;float:left;">
		  梦想团队
		</div>
		</a>
		<a href="about.php">
	    <div style="width:192px;background-color:rgba(1515,99,00,0.25);height:60px;text-align:center;float:left;">
		  关于
		</div>
		</a>
	  </div>
	  <?php */?>
	<?php /*?></div>
	<div><?php */?>
	  <div class="main index">
		  <div class="content" style="width:960px;margin:0 auto;font-size:14px;">
		    
			<!--
			<div style="">
			  <div style="width:160px;height:168px;float:left;border:2px solid #E2E2E2;padding:5px;background-color:#F5F5F5;margin:0 0 0 10px;">
			    <div style="height:40px;border-bottom:2px solid #FF9900;font-size:24px;font-weight:bold;color:#FF9900;padding:0 20px;">
				  1
				</div>
				<div style="">
				
				</div>
			  </div>
			  <div style="width:160px;height:168px;float:left;border:2px solid #E2E2E2;padding:5px;background-color:#F5F5F5;margin:0 0 0 10px;">
			    <div style="height:40px;border-bottom:2px solid #FF9900;font-size:24px;font-weight:bold;color:#FF9900;padding:0 20px;">
				  1
				</div>
				<div style="">
				
				</div>
			  </div>
			  <div style="width:160px;height:168px;float:left;border:2px solid #E2E2E2;padding:5px;background-color:#F5F5F5;margin:0 0 0 10px;">
			    <div style="height:40px;border-bottom:2px solid #FF9900;font-size:24px;font-weight:bold;color:#FF9900;padding:0 20px;">
				  1
				</div>
				<div style="">
				
				</div>
			  </div>
			  <div style="width:160px;height:168px;float:left;border:2px solid #E2E2E2;padding:5px;background-color:#F5F5F5;margin:0 0 0 10px;">
			    <div style="height:40px;border-bottom:2px solid #FF9900;font-size:24px;font-weight:bold;color:#FF9900;padding:0 20px;">
				  1
				</div>
				<div style="">
				
				</div>
			  </div>
			  <div style="width:160px;height:168px;float:left;border:2px solid #E2E2E2;padding:5px;background-color:#F5F5F5;margin:0 0 0 10px;">
			    <div style="height:40px;border-bottom:2px solid #FF9900;font-size:24px;font-weight:bold;color:#FF9900;padding:0 20px;">
				  1
				</div>
				<div style="">
				
				</div>
			  </div>
			</div>
			
			 <div id="intro" name="intro" style="width:960px;font-size:32px;">
			   <a href="index.php">
				<div style="width:192px;background-color:rgba(1515,00,00,0.25);height:60px;text-align:center;float:left;">
				  首页
				</div>
				</a>
				<a href="index.php#project">
				<div style="width:192px;background-color:rgba(00,99,1515,0.25);height:60px;text-align:center;float:left;">
				  项目
				</div>
				</a>
				<a href="website.php">
				<div style="width:192px;background-color:rgba(00,1211,1014,0.25);height:60px;text-align:center;float:left;">
				  课程
				</div>
				<a href="team.php">
				<div style="width:192px;background-color:rgba(150,00,99,0.25);height:60px;text-align:center;float:left;">
				  团队
				</div>
				<a href="about.php">
				<div style="width:192px;background-color:rgba(1515,99,00,0.25);height:60px;text-align:center;float:left;">
				  关于
				</div>
				</a>
			</div>
			<div style="clear:float;clear:both;"></div>
			
			<div style="">
			  <div style="width:280px;height:60px;background-color:#C2DB7D;margin:0 0 0 400px;">
			    1
			  </div>
			  <div style="width:280px;height:60px;background-color:#F7B882;margin:0 0 0 320px;">
			    1
			  </div>
			  <div style="width:280px;height:60px;background-color:#CAB065;margin:0 0 0 240px;">
			    1
			  </div>
			  <div style="width:280px;height:60px;background-color:#906C54;margin:0 0 0 160px;">
			    1
			  </div>
			  <div style="width:280px;height:60px;background-color:#847B1C;margin:0 0 0 80px;">
			    1
			  </div>
			</div>
			-->
		  </div>
		  <div>
			<div style="min-height:465px;padding:0 0 0 280px;background-color:#F3F3F3;">
			  <div style="padding:10px 0;">
			    <div class="item_content" style="min-width:800px;line-height:26px;font-size:14px;">
				int main(){
				<div style="margin:0 0 0 20px;">
				if(<span style="color:#0099FF;">我在学习学校的课程</span>){<br />
				&nbsp;&nbsp;&nbsp;&nbsp;我应该选择【基础辅助课程】，相辅相成，以动手实践来弥补课堂讲解理论知识的不足;<br />
				}<br />
				else if(<span style="color:#FF9900;">我想在大学生活中更有意义</span>){<br />
				&nbsp;&nbsp;&nbsp;&nbsp;我应该选择【项目实践课程】，我可以选择自己感兴趣的项目参与，梦想不再遥远;<br />
				}<br />
				else if(<span style="color:#9900FF;">他们叫我学霸</span>){<br />
				&nbsp;&nbsp;&nbsp;&nbsp;我应该选择【梦想实验室】，学习、研究互联网时代正在使用的最新技术和产品;<br />
				}<br />
				else{<br />
				&nbsp;&nbsp;&nbsp;&nbsp;我至少已经学会了C语言的if/else选择语句，不是么？关注我们两个月一次的项目/团队大赛吧;<br />
				}<br />
				<br />
				return "通过在梦想学院的学习，我顺利提升了自己的能力!";<br />
				</div>
				}
			    </div>
				
			    <!--<div style="float:left;margin:0 0 0 20px;">
			      <img src="p3.jpg" />
			    </div>-->
			  </div>
			</div>
		  <div>
			<div style="min-height:465px;padding:0 0 0 280px;background-color:#44B8EA;">
			  <div style="padding:100px 0;">
			    <div style="font-weight:bold;font-size:22px;color:#FFFFFF;">
			      基础辅助课程
			    </div>
			    <div class="item_content" style="">
				  1.精心准备的多门课程，按难易度和技术体系分类<br />
				  2.入门首选，适合“零”基础或想快速掌握一门课程的同学<br />
				  3.专人负责指导，以完成项目为指导，需求和兴趣驱动式学习<br />
				  4.只要认真参与，让你给自己或那个他/她做个网站“很随意”
			    </div>
			    <!--<div style="float:left;margin:0 0 0 20px;">
			      <img src="p3.jpg" />
			    </div>-->
			  </div>
			</div>
			
			<div style="min-height:465px;padding:0 0 0 280px;background-color:#9FD772;">
			  <div style="padding:100px 0;">
			    <div style="font-weight:bold;font-size:22px;color:#FFFFFF;">
			      兴趣项目扶持
			    </div>
			    <div class="item_content" style="">
				  1.面向有想法、有技术基础的同学，寻找的就是那个任性的你<br />
				  2.免费提供服务器、项目分析及实现、项目宣传、资金资助等<br />
				  3.只要你有想法，你负责叫上你的小伙伴，我负责其他<br />
				  4.示例项目：校园论坛、学校周边团购、情侣空间等
			    </div>
			    <!--<div style="float:left;margin:0 0 0 20px;">
			      <img src="p5.jpg" />
			    </div>-->
			  </div>
			</div>
			
			<div style="min-height:465px;padding:0 0 0 280px;background-color:#FFBB53;">
			  <div style="padding:80px 0;">
			    <div style="font-weight:bold;font-size:22px;color:#FFFFFF;">
			      学习方法
			    </div>
			    <div class="item_content" style="">
				  1.叫上你的小伙伴，3-6人组成一个小组，小组成员需明确分工<br />
				  2.按照计划，小组成员每周完成一点任务，每周见面交流一次<br />
				  3.在QQ群中讨论问题，我们的指导员负责指导和解答问题<br />
				  4.经过6-8周时间完成小项目，总结学到的知识
			    </div>
			    <!--<div style="float:left;margin:0 0 0 20px;">
			      <img src="p3.jpg" />
			    </div>-->
			  </div>
			</div>
			
			<div style="min-height:465px;padding:0 0 0 280px;background-color:#F98B66;">
			  <div style="padding:80px 0;">
			    <div style="font-weight:bold;font-size:22px;color:#FFFFFF;">
			      新手流程
			    </div>
			    <div class="item_content" style="">
				  1.先注册账号，寻找3-6人组成小组，讨论小组口号、目标、分工<br />
				  2.领取每周任务并完成，每周交流一次，在QQ群中可寻求帮助<br />
				  3.6-8周后完成项目，进行DEMO，并领取课程学习证书<br />
				  4.项目和小组成员在网站上展示，接受合作企业的青睐<br />
				  5.如有兴趣继续开发项目，或选择新的课程继续学习
			    </div>
			    <!--<div style="float:left;margin:0 0 0 20px;">
			      <img src="p3.jpg" />
			    </div>-->
			  </div>
			</div>
		  </div>
		  <!--<div style="height:320px;">
		    <div style="">我在上课</div>
		  </div>-->
		  <div style="height:320px;padding:0 200px;background-color:#F3F3F3;">
		    <div style="padding:60px 0 20px 0;font-weight:bold;">学生评价</div>
			<div>
			  <div style="width:240px;margin:0 20px 0 0;float:left;background-color:#F3F3F3;padding:10px;">
			    <div style="font-size:20px;">
				  <span>&nbsp;&nbsp;&nbsp;&nbsp;“要是在学校能学到（需要的）东西，还找你们干什么”</span>
				</div>
				<div style="margin:10px 0 0 0;text-align:right;">
				  <span>--大二学生</span>
				</div>
			  </div>
			  <div style="width:240px;margin:0 20px 0 20px;float:left;background-color:#F3F3F3;padding:10px;">
			    <div style="font-size:20px;">
				  <span>&nbsp;&nbsp;&nbsp;&nbsp;“我什么都不会，可是我想做网站”</span>
				</div>
				<div style="margin:10px 0 0 0;text-align:right;">
				  <span>--大二学生</span>
				</div>
			  </div>
			  <div style="width:240px;margin:0 0px 0 20px;float:left;background-color:#F3F3F3;padding:10px;">
			    <div style="margin:10px 0 0 0;font-size:20px;">
				  <span>&nbsp;&nbsp;&nbsp;&nbsp;就是学到的东西太少了，动手实践（学东西）比较快</span>
				</div>
				<div style="text-align:right;">
				  <span>--大二学生</span>
				</div>
			  </div>
			</div>
		  </div>
		  <!--<div style="width:960px;margin:0 auto;">
			<div class="index_feature_box al_left" style="margin:40px 60px;min-height:280px;">
			  <div class="index_feature_intro index_feature_safe" style="width:480px;float:left;">
				<div class="index_feature_intro_title" style="color:#108ac6;line-height:10px;">
				  <div style="float:left;">
				  <img src="p2.jpg" />
				  </div>
				  <div style="float:left;">
				  <h1>从大学开始</h1>
				  <h2>追逐梦想开始的地方</h2>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				</div>
				<p>也许你了解过Facebook的发展历程，也许你了解Linux系统的产生源于大学作业</p>
				<p>我们大学生从不缺乏创造力和想象力，我们有激情和热情去做自己喜欢的事，我们也能像他们那样的站在浪潮之巅。通过我们的计划，你将学习并掌握软件开发的基础知识，无论是为实现自己的想法还是找工作，都是有很大帮助的。</p>
			  </div>
			  <div style="float:left;margin:20px 0 0 128px;">
				<img src="p3.jpg" />
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<hr />
			<div class="index_feature_box al_left" style="margin:40px 60px;min-height:280px;">
			  <div class="index_feature_intro index_feature_safe" style="width:480px;float:left;">
				<div class="index_feature_intro_title" style="color:#108ac6;line-height:10px;">
				  <div style="float:left;">
				  <img src="p2.jpg" />
				  </div>
				  <div style="float:left;">
				  <h1>为什么加入我们</h1>
				  <h2>只要你有兴趣</h2>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				</div>
				<p>每个学校都有一些实验室，国内外也有一些技术性比赛，但是并不是每位同学都能参与，在这里你可以平等的参与自己感兴趣的项目、平等的学习自己需要的知识。</p>
				<p>我们不仅欢迎各种技术大牛，而且还非常欢迎零基础的有梦想的同学，只要你有明确的梦想、对学习计算机、 软件、编程有兴趣，那么请不要犹豫，加入我们!</p>
				<p>通过6-8周左右时间，让你掌握一项基础知识。与其平淡的过这6-8周时间，不如利用这些时间掌握一些对你有用的知识。</p>
			  </div>
			  <div style="float:left;">
				<img src="p6.jpg" style="width:280px;margin:40px 0 0 60px;"/>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<hr />
			<div class="index_feature_box al_left" style="margin:40px 60px;min-height:280px;">
			  <div class="index_feature_intro index_feature_safe" style="width:480px;float:left;">
				<div class="index_feature_intro_title" style="color:#108ac6;line-height:10px;">
				  <div style="float:left;">
				  <img src="p2.jpg" />
				  </div>
				  <div style="float:left;">
				  <h1>梦想平台</h1>
				  <h2>做自己喜欢做的事</h2>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				</div>
				<p>每个人都有自己的梦想、有自己的想法，如果你想做个人网站，或者和同学一起做团购网，又或者是和同学一起参加计算机编程比赛，那么请你加入我们。</p>
				<p>如果你只想多学点计算机、软件知识，那么也请加入我们。</p>
				<p>我们面向零基础的大学生，提供各种学习资源，组织大家一起实践各种项目、学习多种基础知识。</p>
			  </div>
			  <div style="float:left;">
				<img src="p7.jpg" style="width:260px;margin:20px 0 0 60px;"/>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<hr />
			<div class="index_feature_box al_left" style="margin:40px 60px;min-height:280px;">
			  <div class="index_feature_intro index_feature_safe" style="width:480px;float:left;">
				<div class="index_feature_intro_title" style="color:#108ac6;line-height:10px;">
				  <div style="float:left;">
				  <img src="p2.jpg" />
				  </div>
				  <div style="float:left;">
				  <h1>加入小组学习</h1>
				  <h2>个人学习效率不高、难以坚持</h2>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				</div>
				<p>多少次，自己下定决心来做一件事、学一样东西，即使信心充足，很多人在长时间的学习过程中更改了自己的想法，最初的梦想只能成为回忆。</p>
				<p>3-6人组成小组，在小组中每位成员是平等的，不必担心自己水平不如其他成员，在这里没有指责、没有抱怨，有的只是以达到学习目标的交流和鼓励。</p>
				<p>每个小组都会有指定负责的指导人员，负责跟进（不是监督）任务的进行，保证小组成员学习的效果和小组内融洽的团队氛围。</p>
			  </div>
			  <div style="float:left;">
			    <img src="p5.jpg" style="margin:40px 0 0 40px;"/>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<hr />
			<div class="index_feature_box al_left" style="margin:40px 60px;min-height:280px;">
			  <div class="index_feature_intro index_feature_safe" style="width:480px;float:left;">
				<div class="index_feature_intro_title" style="color:#108ac6;line-height:10px;">
				  <div style="float:left;">
				  <img src="p2.jpg" />
				  </div>
				  <div style="float:left;">
				  <h1>小组定制</h1>
				  <h2>定制合适的项目，按照详细计划执行</h2>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				</div>
				<p>在6-8周的时间内，小组成员完成一个具体的计划，计划由小组跟进的指导人员指定。每周都有详细的学习、实践计划，小组成员需要在每周内抽取一点时间来完成计划，每周一次小组讨论会，来讨论遇到的问题和学习进度。</p>
			  </div>
			  <div style="float:left;margin:40px 0 0 40px;">
				<img src="p4.jpg" style="width:268px;"/>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>-->
			
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include 'src/footer.php';?>
  </body>
</html>