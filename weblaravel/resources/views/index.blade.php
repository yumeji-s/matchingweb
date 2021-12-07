<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- アイコン -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/assets/images/icon1/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/assets/images/icon1/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/images/icon1/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/images/icon1/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/images/icon1/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/assets/images/icon1/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/assets/images/icon1/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/assets/images/icon1/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/images/icon1/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/assets/images/icon1/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/images/icon1/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/assets/images/icon1/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/icon1/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/assets/images/icon1/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('/assets/images/icon1/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <title>nikoichi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="{{ asset('/assets/js/script.js') }}"></script>

    </head>
    <body id="top">
	<div id="wrapper">

		<div id="sidebar">
			<div id="sidebarWrap">
				<h1><img src="{{ asset('/assets/images/logo.png') }}" width="87" height="25" alt="logo"></h1>
				<nav id="mainnav">
					<p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
					<div class="panel">
						<ul>
							<li><a href="#top">TOP</a></li>
							<li><a href="#sec01">MESSAGE</a></li>
							<li><a href="#sec02">GALLERY</a></li>
							<li><a href="#sec03">BRAND</a></li>
							<li><a href="#sec04">PROJECT</a></li>
							<li><a href="#sec05">COMPANY</a></li>
						</ul>
						<ul id="sns">
							<li><a href="#" target="_blank"><img src="{{ asset('/assets/images/iconFb.png') }}" width="20" height="20" alt="FB"></a></li>
							<li><a href="#" target="_blank"><img src="{{ asset('/assets/images/iconTw.png') }}" width="20" height="20" alt="twitter"></a></li>
							<li><a href="#" target="_blank"><img src="{{ asset('/assets/images/iconInsta.png') }}" width="20" height="20" alt="Instagram"></a></li>
							<li><a href="#" target="_blank"><img src="{{ asset('/assets/images/iconYouTube.png') }}" width="20" height="20" alt="You Tube"></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div id="content">
			<p id="mainImg"><img src="{{ asset('/assets/images/mainImg.jpg') }}" alt=""></p>
			<!-- MESSAGE -->
			<section id="sec01">
				<header>
					<h2><span>MESSAGE</span></h2>
				</header>
				<div class="innerS">
					ホームページサンプル株式会社では最新技術と自然との調和を目指します。
                    革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社。
                    ホームページサンプル株式会社では最新技術と自然との調和を目な技術で世の中を動かす企業を目指します。
                    ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。
				</div>
			</section>
			<!-- // MESSAGE -->
			<!-- GALLERY -->
			<section id="sec02">
				<header>
					<h2><span>GALLERY</span></h2>
				</header>
				<ul id="gallery">
					<li><img src="{{ asset('/assets/images/photo01.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo02.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo03.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo04.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo05.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo06.jpg') }}" width="360" height="350" alt=""></li>
					<li class="full"><img src="{{ asset('/assets/images/photo07.jpg') }}" width="1080" height="695" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo08.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo09.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo10.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo11.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo12.jpg') }}" width="360" height="350" alt=""></li>
					<li><img src="{{ asset('/assets/images/photo13.jpg') }}" width="360" height="350" alt=""></li>
				</ul>
			</section>
			<!-- // GALLERY -->
			<!-- BRAND -->
			<section id="sec03">
				<header>
					<h2><span>BRAND</span></h2>
				</header>
				<div class="inner">
					<ul class="col4">
						<li>
							<p class="img"><img src="{{ asset('/assets/images/logo01.png') }}" width="168" height="168" alt=""></p>
							<p>ホームページサンプル株式会社では最動かす企業を目指します。</p>
						</li>
						<li>
							<p class="img"><img src="{{ asset('/assets/images/logo02.png') }}" width="168" height="168" alt=""></p>
							<p>革新的な技術で世の中を動かす企業を目します。世の中を動かす。</p>
						</li>
						<li>
							<p class="img"><img src="{{ asset('/assets/images/logo03.png') }}" width="168" height="168" alt=""></p>
							<p>株式会社では最動かす企業を目指しますージン企業を目指します。</p>
						</li>
						<li>
							<p class="img"><img src="{{ asset('/assets/images/logo04.png') }}" width="168" height="168" alt=""></p>
							<p>株式会社では最動かす企業を指しますージサン企業を目指します。</p>
						</li>
					</ul>
				</div>
			</section>
			<!-- // BRAND -->
			<!-- PROJECT -->
			<section id="sec04">
				<header>
					<h2><span>PROJECT</span></h2>
				</header>
				<div class="inner">
					<div class="article">
						<img src="{{ asset('/assets/images/photo14.jpg') }}" width="370" height="224" alt="">
						<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な革新的な革新的な技術で世の中を技術で世の中を技術で世の中を動かす企業を目指します。</p>
						<p>ホームページサンプル株式会社。ホームページサンプル最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社。ホームページサンプル最新技術と自然との調和を目指し調和を目指し調和を目指します。革新的な技術で世の中を動かす企業を目指します。</p>
					</div>
					<div class="article">
						<img src="{{ asset('/assets/images/photo15.jpg') }}" width="370" height="224" alt="">
						<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な革新的な革新的な技術で世の中を技術で世の中を技術で世の中を動かす企業を目指します。</p>
						<p>ホームページサンプル株式会社。ホームページサンプル最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社。ホームページサンプル最新技術と自然との調和を目指し調和を目指し調和を目指します。革新的な技術で世の中を動かす企業を目指します。</p>
					</div>
				</div>
			</section>
			<!-- // PROJECT -->
			<!-- COMPANY -->
			<section id="sec05">
				<header>
					<h2><span>COMPANY</span></h2>
				</header>
				<div class="inner">
					<ul class="col2">
						<li><!--
							<p>〒989-1102<br>-1</p>
							<p>TEL 0224-35-1511</p>
							 <p>公式Webサイト <a href="https://www.pref.miyagi.jp/soshiki/srkogsn/">https://www.pref.miyagi.jp/soshiki/srkogsn/</a></p>
							<p>営業時間 09:00〜16:00（土日休み）</p>
							<p>※都合により休校する場合がございます</p>
						</li> -->
						<li>
							<div id="map">
								<!-- GOOGLE MAP -->
								
								<!-- // GOOGLE MAP -->
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- // COMPANY -->

			<footer id="footer">
				Copyright(c) 2021 Mecha WHITE Na Kigyou All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank">http://f-tpl.com</a><!-- ←クレジット表記を外す場合はシリアルキーが必要です http://f-tpl.com/credit/ -->
			</footer>

		</div>
	</div>

</body>
</html>
