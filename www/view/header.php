<!DOCTYPE html>
<html>

	<head>
		<title>首页</title>
		<meta charset="UTF-8">
		<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="black" name="apple-mobile-web-app-status-bar-style">
		<meta content="telephone=no" name="format-detection">
		<meta content="email=no" name="format-detection">
		<link rel="stylesheet" type="text/css" href="node_modules/swiper/dist/css/swiper.min.css" />
		<link rel="stylesheet" type="text/css" href="css/grid.css" />
		<link rel="stylesheet" type="text/css" href="css/basic.css" />
		<link rel="stylesheet" type="text/css" href="css/header.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<script src="node_modules/vue/dist/vue.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="node_modules/swiper/dist/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="js/iscroll.js"></script>

		<script type="text/javascript">var myScroll;

function loaded() {
	var indicator= document.getElementById("indicator");
	indicator.childNodes[0].className='active col-md-2 col-sm-2 col-xs-2';
	myScroll = new iScroll('wrapper', {
		snap: true,
		momentum: false,
		hScrollbar: false,
		onScrollEnd: function() {
			document.querySelector('#indicator > li.active').className = 'col-md-2 col-sm-2 col-xs-2';
			document.querySelector('#indicator > li:nth-child(' + (this.currPageX + 1) + ')').className = 'active col-md-2 col-sm-2 col-xs-2';
		}
	});
}

document.addEventListener('DOMContentLoaded', loaded, false);</script>
		<style type="text/css" media="all">#wrapper {
	width: 414px;
	height: 160px;
	float: left;
	position: relative;
	/* On older OS versions "position" and "z-index" must be defined, */
	z-index: 1;
	/* it seems that recent webkit is less picky and works anyway. */
	overflow: hidden;
}

#scroller {
	width: 1242px;
	height: 100%;
	float: left;
	padding: 0;
}

#scroller #thelist {
	list-style: none;
	display: block;
	float: left;
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0;
	text-align: left;
}

#scroller .scroller-list {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	display: block;
	float: left;
	width: 414px;
	height: 160px;
	text-align: center;
	font-family: georgia;
	font-size: 18px;
	line-height: 140%;
}
.active a{
	color: #000088;
}
</style>
	</head>

	<body>
		<header class="header"  id="headernav">
			<!--<nav class="nav-bar row">
			<ul>
			<li class="col-md-11 col-sm-11 col-xs-11" >
			<a v-for="nav in headernav" :href="nav.url" :target="nav.target">
			{{ nav.text }}
			</a>
			</li>
			<li class="col-md-1 col-sm-1 col-xs-1">
			<button class="nav">
			<span></span>
			<span></span>
			<span></span>
			</button>

			</li>
			</ul>
			</nav>-->

			<nav class="nav-bar row" id="nav">
				<ul id="indicator" class="col-md-11 col-sm-11 col-xs-11">
					<li class=" col-md-2 col-sm-2 col-xs-2" v-for="nav in headernav">
						<a  :href="nav.url" :target="nav.target">
							{{ nav.text }}
						</a>
					</li>
				</ul>
				<ul class="col-md-1 col-sm-1 col-xs-1">
					<button class="nav">
					<span></span>
					<span></span>
					<span></span>
					</button>
				</ul>
			</nav>
		</header>
		<script src="data/header.js"></script>
