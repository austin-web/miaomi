<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8" />
	<meta name="robots" content="all" />
	<meta name="author" content="" />
	<meta name="copyright" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>miaomi</title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/miaomi.css')?>" />
</head>
<body>
<div class="bg-wrapper">
<!--头部 Str-->
	<div class="header">
		<div class="header-inner">
			<div class="header-bar wrapper">
				<a href="<?php echo base_url();?>" class="logo"></a>
				<div class="tab-nav">
					<ul>
						<li class="on">
							<a href="#" class="tab-nav-a">最新</a>
						</li>
						<li>
							<a href="#" class="tab-nav-b">关注</a>
						</li>
						<li>
							<a href="#" class="tab-nav-c">关注</a>
						</li>
					</ul>

				</div>
				<div class="header-info">
					<?php if(isset($uid)): ?>

					<div class="fn_uploadcat">
						<form action="uploadcat/do_upload" target="unvisibleiframe" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="formUpload">

							<span class="btn-upload" id="btnUploadWrap"><b>上传喵图</b><input type="file" class="file-upload" name="userfile" size="3" id="btnUpload" title="支持jpg、jpeg、gif、png格式，文件小于4M"></span>
							<div class="user-desc" id="userDescWrap"><label for="imgText" class="holder-txt J-holder">喵~描述一下呗~</label><input type="text" id="imgText" name="imgtext" >
							<input type="submit" value="upload" class="btn-M btn-toupload" id="btnUpload"></div>
						</form>
						<iframe src="" name="unvisibleiframe" id="iframeUpload" style="visibily:hidden;width:0;height:0;position:absolute;left:-999px;top:-999px"></iframe>
					</div>
					<div class="head-user" id="head-user" uid="<?php echo $uid ?>" uname="<?php echo $uname?>" uavatar="<?php echo $uavatar ;?>"  >
						<a  href="#" class="user-avatar"><img src="<?php echo $uavatar ;?>" ></a>
					</div>
					<?php else: ?>
					<div class="head-user"><a href="#" class="" id="head-login">登了个录</a></div>
					<?php endif;?>


				</div>
			</div>
		</div>
	</div>
<!--头部 End-->
<!--主体 Str-->
	<div class="main wrapper">
