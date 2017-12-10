﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
<title>404 - 页面找不到了</title>

<link type="text/css" rel="stylesheet" href="{{ asset('static/404/css/404.css') }}" />

<!--[if IE 6]>
<script src="js/png.js"></script>
<script>DD_belatedPNG.fix('*')</script>
<![endif]-->

</head>
<body>

<div id="wrap">
	<div>
		<img src="{{ asset('static/404/img/404.png') }}" alt="404" />
	</div>
	<div id="text">
		<strong>
			<span></span>
			<a href="{{ route('home') }}" target="_self">返回首页</a>
			<a href="{{ url()->previous() }}">返回上一页</a>
		</strong>
	</div>
</div>

<div class="animate below"></div>
<div class="animate above"></div>
<div style="text-align:center;">
</div>
</body>
</html>
