<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="KSPHP.com" />
	<title><?php echo $this->config->config['title'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link href="<?php echo base_url('../themes/admin/'.$this->config->config['admin_themes'].'/admin.mo.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('../webmis/themes/'.$this->config->config['webmis_themes'].'/webmis.css'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="Lang" class="lang_ct">
		<?php echo $LangName;?>
		<ul class="lang">
			<li><a href="<?php echo base_url('?lang=en-us'); ?>">en-us | English</a></li>
			<li><a href="<?php echo base_url('?lang=zh-cn'); ?>">zh-cn | 简体中文</a></li>
		</ul>
	</div>
<div class="login_body">
	<header class="login_top">
		<div class="login_top_logo">&nbsp;</div>
	</header>
	<aside class="login_ct">
		<div id="webmisVersion" class="login_title">WebMIS</div>
		<div class="text"><input type="text" id="uname" /><br><?php echo $this->lang->line('inc_uname');?>：</div>
		<div class="text"><input type="password" id="passwd" /><br><?php echo $this->lang->line('inc_passwd');?>：</div>
		<div class="login_an">
			<a href="#" id="adminLogin"><?php echo $this->lang->line('inc_login');?></a>
		</div>
	</aside>
	<footer class="login_copy">
		Copyright © <?php echo $this->config->config['copy'];?><br>
		<a href="<?php echo base_url('../'); ?>" ><?php echo $this->lang->line('inc_home');?></a>&nbsp;|&nbsp;
		<a href="<?php echo base_url('?mode=pc'); ?>" ><?php echo $this->lang->line('inc_pc');?></a>&nbsp;|&nbsp;
		<a href="<?php echo base_url('?mode=mobile'); ?>" ><?php echo $this->lang->line('inc_mobile');?></a>
	</footer>
</div>
<div id="base_url" style="display: none;"><?php echo base_url().$this->config->config['index_url']; ?></div>
<div id="is_mobile" style="display: none;"><?php echo @$is_mobile; ?></div>
<script language="javascript" src="<?php echo base_url('../webmis/plugin/jquery/jquery-2.min.js'); ?>"></script>
<script language="javascript" src="<?php echo base_url('../webmis/jquery.webmis.js'); ?>"></script>
<script language="javascript" src="<?php echo base_url('../themes/admin/'.$this->config->config['admin_themes'].'/admin_login.js'); ?>"></script>
<script>var _hmt = _hmt || [];(function() {var hm = document.createElement("script");hm.src = "//hm.baidu.com/hm.js?42c6e4ddf1d67ece9be84ce625cd398b";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm, s);})();</script>
</body>
</html>