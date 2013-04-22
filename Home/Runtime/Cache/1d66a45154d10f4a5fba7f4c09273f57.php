<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($pagetitle); ?>_<?php echo C('SITE_NAME') ?></title>
	<link rel="stylesheet" type="text/css" href="/Public/css/home/template.css" />
	<script type="text/javascript" src="/Public/js/jquery_min.js"></script><script type="text/javascript" src="/Public/js/json2.js"></script><script type="text/javascript" src="/Public/js/common.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/artDialog/artDialog.js?skin=chrome"></script>
	<script type="text/javascript" src="__PUBLIC__/js/artDialog/plugins/iframeTools.js"></script>
</head>
<body class="<?php echo ($browser); ?>">
<div class="bshade"></div>
<div class="navigation">
	<div class="navigation-wrapper">
		<div id="logo2">
			<h1>
				<a href="/"> <img width="218" height="55"
					src="__PUBLIC__/images/home/herderlogo2.png" />
				</a>
			</h1>
		</div>
		<div class="nav-body site-nav exampage">
			<div class="nav-main">
				<div class="menu">
					<div class="menu-title">
						<a ui-async="async" href="<?php echo U('User/profile');?>" accesskey="1"><span
							stats="V6Hd_home" class="menu-title-text">会员首页</span></a>
					</div>
				</div>
				<div class="menu">
					<div class="menu-title" id="profileMenuActive">
						<a href="<?php echo U('User/myapp');?>" accesskey="2" id="showProfileMenu"><span
							class="menu-title-text" stats="V6Hd_Profile">我的应用</span></a>
					</div>
				</div>
				<div class="menu">
					<div id="friendMenuActive" class="menu-title">
						<a href="<?php echo U('User/allapp');?>" accesskey="3" id="showFriendMenu"><span
							stats="V6Hd_frd" class="menu-title-text">船员题库</span></a>
					</div>
				</div>
			</div>
			<div class="nav-other">
				<div class="menu">
				<a href="##" stats="homenav_suggest" title="给我们提建议">给我们提建议</a>
				</div>
				<div class="menu more">
				<a class="show-more" id="moreWeb" stats="homenav_more" href="##">更多</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-wrapper clearfix">
	<div class="full-page">
		<div class="login-page clearfix">
			<div class="main-columns">
				<div id="login_area">
					<div id="logo_student"></div>
					<div id="loginCopyRight">
						该系统由 中国船员考试网 提供技术支持
						<br>
						COPYRIGHT 2001-<?php echo date('Y',time()); ?> 中国船员考试网
					</div>
					<form action="__URL__/doexamlogin" method="post">
					<div id="input_area">
						<div id="loginStudent_title"></div>
						<div class="input_title">
							身份证号：
							<input type="text" maxlength="18" class="add_item" id="card_no" name="idCard">  
						</div>
						<div class="input_title">
									座&nbsp;位&nbsp;号：
							<input type="text" maxlength="10" class="add_item" name="seatNo">
						</div>
						<div id="button_area">
							<input type="submit" value="进入考场" name="Submit">
							&nbsp;
							<input type="reset" value="重置" name="Submit">
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div id="footer">
	<div class="site-footer">
		<div id="footer0904">
			<div class="footer_c">购车咨询：4000-168-168（工作日 9:00-17:30） 传真：010-68492726
			<a target="_blank" href="http://e.weibo.com/yiche" class="weibo">易车网</a></div>
			<div class="footer_about">
			<ul class="about">
			    <li class="first"><a href="http://corp.bitauto.com/" target="_blank">关于易车</a></li>
			    <li><a href="http://corp.bitauto.com/business/" target="_blank">业务介绍</a></li>
			    <li><a href="http://corp.bitauto.com/news/" target="_blank">易车动态</a></li>
			    <li><a href="http://corp.bitauto.com/job/" target="_blank">加入易车</a></li>
			    <li><a href="http://corp.bitauto.com/about/contact-us.shtml" target="_blank">联系我们</a></li>
			    <li><a href="http://corp.bitauto.com/about/legal-notices.shtml" target="_blank">法律声明</a></li>
			    <li><a href="http://i.bitauto.com/authenservice/register/Licence.aspx" target="_blank">服务协议</a></li>
			    <li><a href="http://ir.bitauto.com/" target="_blank">Investor Relations</a></li>
			    <li><a href="http://www.bitauto.com/feedback/" target="_blank">我要提意见</a></li>
			    <li><a href="http://ued.bitauto.com/" target="_blank">用户体验中心</a></li>
			   <li class="last"><a href="http://dealer.easypass.cn/" target="_blank">车易通</a></li>
			</ul>
			</div>
			
			<div class="footer_text">
			<p>CopyRight &copy; 2000-2013 BitAuto,All Rights Reserved 版权所有 北京易车信息科技有限公司</p>
			<p>电信业务审批[2006]字第92号；经营许可证编号： <a href="http://www.bitauto.com/license/ICP.shtml" target="_blank">京ICP证060175号</a>；公安备案号码：京公网安备 110108901166号</p>
			<p><a href="http://www.bitauto.com/license/video.shtml" target="_blank">网络视听许可证0110543号</a> <a href="http://www.bitauto.com/license/audio.shtml" target="_blank">广播电视节目制作许可证1238号</a> <a href="http://www.bitauto.com/license/pub.shtml" target="_blank">新出网证(京)字182号</a> <a href="http://www.bitauto.com/license/mapping.shtml" target="_blank">乙测资字11005048</a></p>
			</div>
			<div class="icpbox"><a href="##" target="_blank" class="icp"><img src="__PUBLIC__/images/home/footerbeian.png"></a></div>
			</div>
	</div>
</div>
</body>
</html>