<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>提示信息</title>
<style type="text/css">
*{ padding:0; margin:0; font-size:12px}
.showMsg .guery {}
a:link,a:visited{text-decoration:none;color:#0068a6}
a:hover,a:active{color:#ff6600;text-decoration: underline}
.showMsg{border: 1px solid #1e64c8; zoom:1; width:450px; height:174px;position:absolute;top:50%;left:50%;margin:-87px 0 0 -225px}
.showMsg h5{background-image: url(__PUBLIC__/images/home/msg.png);
background-repeat: no-repeat; color:#fff; padding-left:35px; height:25px; 
line-height:26px;*line-height:28px; overflow:hidden; font-size:14px; text-align:left}
.showMsg .content{ padding:46px 12px 10px 45px; font-size:14px; height:66px;}
.showMsg .bottom{ background:#e4ecf7; margin: 0 1px 1px 1px;line-height:26px; *line-height:30px; height:26px; text-align:center}
.showMsg .ok,.showMsg .guery{background: url(__PUBLIC__/images/home/msg_bg.png) no-repeat 0px -560px;}
.showMsg .guery{background-position: left -460px;}
div.message,div.error{color:red;font-weight: bolder;}
</style>
 <script language="JavaScript">
  function refresh(){
    location.href = "<?php echo ($jumpUrl); ?>";
  }
  setTimeout("refresh()",<?php echo ($waitSecond); ?>000);
  </script>
</head>
<body>
<div class="showMsg" style="text-align:center">
	<h5><?php echo ($msgTitle); ?></h5>
    <div class="content guery" style="display:inline-table;zoom:1;*display:inline; max-width:280px">
			<?php if(isset($message)): ?><div class="message"><?php echo ($message); ?></div><?php endif; ?>
           <?php if(isset($error)): ?><div class="error"><?php echo ($error); ?></div><?php endif; ?>
           <div class="line"></div>
           <?php if(isset($closeWin)): ?><div class="notice">系统将在 <span style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span> 秒后自动关闭，如果不想等待,直接点击 <a class="aclickhrer" href="<?php echo ($jumpUrl); ?>">这里</a> 关闭</div><?php endif; ?>
           <?php if(!isset($closeWin)): ?><div class="notice">系统将在 <span style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span>秒后自动跳转，如果不想等待,直接点击 <a class="aclickhrer" href="<?php echo ($jumpUrl); ?>">这里</a> 关闭</div><?php endif; ?>
	</div>
    <div class="bottom">
    	<a href="javascript:history.back();" >[点这里返回上一页]</a>
	</div>
</div>
</body>
</html>