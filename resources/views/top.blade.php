<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ja" xml:lang="ja">
<head>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/top.css') }}" >
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <meta name="description" content=" Durantは、果物をインターネットを利用し全国に販売を行う「SamuraiAgri」の運営を行っています。" />
  <title>株式会社Durant</title>
</head>

<body class="drawer-close">
	<div role="main">
	<div id="header">
		<div class="wrap">
			<div class="main_title"><a href="http://dairyjournal.net/"><p>株式会社 Durant</p></a></div>
				<ul class="clearfix dp_pc">
					<li><a href="https://samuraiagri.buyshop.jp/"><p>Cart</p></a></li>
					<li><a href="/concept"><p>Concept</p></a></li>
					<li><a href="/wp"><p>Blog</p></a></li>
					<li><a href="/abouts"><p>Abouts</p></a></li>
				</ul>
			</div>
		</div><!--/#header-->	
	<div id="container" class="clearfix">
	<div id="wrapper" class="clearfix">
		<div id="main_image">
		<h1>
			<ul class="slider">
				<li><img src="{{ asset('/img/top/main.jpg') }}" alt=""></li>
				<li><img src="{{ asset('/img/top/main_1.jpg') }}" alt=""></li>
				<li><img src="{{ asset('/img/top/main_2.jpg') }}" alt=""></li>
				<li><img src="{{ asset('/img/top/main_3.jpg') }}" alt=""></li>
				<li><img src="{{ asset('/img/top/main_4.jpg') }}" alt=""></li>
				<li><img src="{{ asset('/img/top/main_5.jpg') }}" alt=""></li>
				<li><img src="{{ asset('/img/top/main_6.jpg') }}" alt=""></li>
				<!--/slider-->
			</ul>
		</h1>
		</div>
			<div id="cont_side" class="dp_pc">
			<div id="side_ourservices" class="section"></div>
		</div><!--/#cont_side-->

		<div class="wrap">
		<div id="cont_headline">
			<h2><em>新着情報・お知らせ</em></h2>
			<table cellpadding="0" cellspacing="0" border="0" width="100%" id="news_headline">
			<tr>
				<td class="date">2022/10/13</td>
				<td class="title"><a href="">新着情報・お知らせtest</a></td>
			</tr>
			<tr>
				<td class="date">2021/05/22</td>
				<td class="title"><a href="">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</a></td>
			</tr>
			<tr>
				<td class="date">2020/08/02</td>
				<td class="title"><a href="">新着情報・お知らせtest</a></td>
			</tr>
			</table>
		</div>

		<div id="cont_press_release">
			<h2><em>プレスリリース</em></h2>
			<table cellpadding="0" cellspacing="0" border="0" width="100%" id="news_headline">
			<tr>
				<td class="date">2022/10/13</td>
				<td class="title"><a href="">プレスリリースtest</a></td>
			</tr>
			<tr>
				<td class="date">2021/05/22</td>
				<td class="title"><a href="">プレスリリースtest</a></td>
			</tr>
			<tr>
				<td class="date">2020/08/02</td>
				<td class="title"><a href="">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</a></td>
			</tr>
			</table>
		</div>

		<div id="social_link2">
		<div class="module_layout common_margin-top__0px">
		<h2><em>ソーシャルメディア公式アカウント</em></h2>
			<ul class="social_item2">
			<li class="social_items2"><a href="https://www.pinterest.jp/" target="_blank"><img src="{{ asset('/img/top/icon/pinterest.png') }}" width="60" height="60" alt="Facebook" class="module_image"></a></li>
			<li class="social_items2"><a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('/img/top/icon/instagram.png') }}" width="60" height="60" alt="instagram" class="module_image"></a></li>
			<li class="social_items2"><a href="https://twitter.com/" target="_blank"><img src="{{ asset('/img/top/icon/twitter.png') }}" width="60" height="60" alt="Twitter" class="module_image"></a></li>
			<li class="social_items2"><a href="https://www.youtube.com/channel/" target="_blank"><img src="{{ asset('/img/top/icon/youtube.png') }}" width="60" height="60" alt="YouTube" class="module_image"></a></li>
			<li class="social_items2"><a href="" target="_blank"><img src="{{ asset('/img/top/icon/letter.png') }}" width="60" height="60" alt="YouTube" class="module_image"></a></li>
			</ul>
		</div>
		</div>
		</div><!--/.wrap -->
	</div><!--/#wrapper-->
	</div><!--/#container-->
</body>
@extends('footer')

