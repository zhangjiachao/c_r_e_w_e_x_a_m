<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理页面</title>

<script src="__PUBLIC__/js/admin/prototype.lite.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/admin/moo.fx.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/admin/moo.fx.pack.js" type="text/javascript"></script>
<style>
body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}
#container {
	width: 182px;
}
H1 {
	font-size: 12px;
	margin: 0px;
	width: 182px;
	cursor: pointer;
	height: 30px;
	line-height: 20px;	
}
H1 a {
	display: block;
	width: 182px;
	color: #000;
	height: 30px;
	text-decoration: none;
	moz-outline-style: none;
	background-image: url(__PUBLIC__/images/admin/menu_bgS.gif);
	background-repeat: no-repeat;
	line-height: 30px;
	text-align: center;
	margin: 0px;
	padding: 0px;
}
.content{
	width: 182px;
	height: 26px;
	
}
.MM ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	display: block;
}
.MM li {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	list-style-type: none;
	display: block;
	text-decoration: none;
	height: 26px;
	width: 182px;
	padding-left: 0px;
}
.MM {
	width: 182px;
	margin: 0px;
	padding: 0px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
}
.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(__PUBLIC__/images/admin/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(__PUBLIC__/images/admin/menu_bg1.gif);
	background-repeat: no-repeat;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
.MM a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(__PUBLIC__/images/admin/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #006600;
	background-image: url(__PUBLIC__/images/admin/menu_bg2.gif);
	background-repeat: no-repeat;
	text-align: center;
	display: block;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
</style>
</head>

<body>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top">
    <div id="container">
    
      <h1 class="type"><a href="javascript:void(0)">应用管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="__PUBLIC__/images/admin/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="__APP__/App/listcourse" target="main">科目列表</a></li>
          <li><a href="__APP__/App/addcourse" target="main">添加科目</a></li>
          <li><a href="__APP__/App/listapp" target="main">应用列表</a></li>
          <li><a href="__APP__/App/addapp" target="main">添加应用</a></li>
          <li><a href="__APP__/App/listquestions" target="main">考题列表</a></li>
          <li><a href="__APP__/App/addquestions" target="main">添加考题</a></li>
        </ul>
      </div>
          
      <h1 class="type usermanage" id="typeusermanage"><a href="javascript:void(0)">会员管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="__PUBLIC__/images/admin/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="__APP__/User/index" target="main">会员列表</a></li>
          <!-- <li><a href="__APP__/User/adduser" target="main">添加会员</a></li> -->
          <li><a href="__APP__/User/onlineapplylist" target="main">在线报名</a></li>
          <li><a href="__APP__/User/topup" target="main">手动充值</a></li>
        </ul>
      </div>
      
      <?php if(1==2){ ?>
      <h1 class="type"><a href="javascript:void(0)">用户权限管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="__PUBLIC__/images/admin/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="__APP__/User/index" target="main">用户列表</a></li>
          <li><a href="__APP__/Role/index" target="main">角色管理</a></li>
          <li><a href="__APP__/Node/index" target="main">节点管理</a></li>
          <li><a href="__APP__/Access/index" target="main">权限分配</a></li>
          <li><a href="##" target="main">举报管理</a></li>
          <li><a href="##" target="main">评论管理</a></li>
        </ul>
      </div>
      <?php } ?>
      
      <h1 class="type"><a href="javascript:void(0)">文章管理</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="__PUBLIC__/images/admin/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
          <li><a href="__APP__/Articles/index" target="main">文章列表</a></li>
          <li><a href="__APP__/Articles/add" target="main">添加文章</a></li>
        </ul>
      </div>
      
      <h1 class="type"><a href="javascript:void(0)">常规选项</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="__PUBLIC__/images/admin/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="__APP__/Config" target="main">基本设置</a></li>
        </ul>
      </div>
      
      <div class="programdiv">
      <h1 class="type"><a href="javascript:void(0)">程序版本与技术支持</a></h1>
     		<ul class="devinfo" style="color:#ddd;">
     			<li>船员考试网-[测试版]</li>
     			<li>开发：<a style="color:#ddd;" href="mailto:zhang.jiachao@qq.com">Jochen.zhang</a></li>
     			<li>版权所有©2012-<?php echo date('Y',time()); ?></li>
     		</ul>
      </div>
      
      </div>
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
        </td>
  </tr>
</table>
</body>
</html>