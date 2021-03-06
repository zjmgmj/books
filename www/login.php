<!DOCTYPE html>
<html>

	<head>
		<title>
			<%= title %>
		</title>
		<meta charset="UTF-8">
		<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="black" name="apple-mobile-web-app-status-bar-style">
		<meta content="telephone=no" name="format-detection">
		<meta content="email=no" name="format-detection">
		<link rel="stylesheet" type="text/css" href="css/grid.css" />
		<link rel="stylesheet" type="text/css" href="css/basic.css" />
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	</head>

	<body>
		<form method="post">
			<div class="login">
				<ul>
					<li class="name"><span>用户名：</span><input type="text" name="name" /></li>
					<li class="pw"><span>密&nbsp;&nbsp;&nbsp;码：</span><input type="password" name="password" /></li>
					 <button type="submit" class="button-1">登录</button>
				</ul>
			</div>
			<article class="prompt">
				<% if (success) { %>
				<div>
					<%= success %>
				</div>
				<% } %>
				<% if (error) { %>
				<div>
					<%= error %> </div>
				<% } %>
			</article>
		</form>
		
	</body>

</html>