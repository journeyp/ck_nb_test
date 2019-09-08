<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script>
			$(document).ready(function(){
				// more 부분 클릭하면 sub_menu이 보여지고, 전체 스크롤 없앰
				$('.more').click(function(){
					$('.sub_menu').show();
					$('html, body').css({'overflow': 'hidden', 'height': '100%'});
				});

				// home 부분 클릭하면 sub_menu 사라지고, 전체 스크롤 생김
				$('.home').click(function(){
					$('.sub_menu').hide();
					$('html, body').css({'overflow': 'visible'});
				});
			});
		</script>
		<style>
			*{
				padding: 0;
				margin: 0;
				list-style: none;
			}
			.wrap{
				
			}
			#footer{
				height: 50px;
				position: fixed;
				bottom: 0;
				width: 100%;
			}
			#footer > ul{
				height: 100%;
				width: 100%;
			}
			#footer > ul > li{
				border: 1px solid #000;
				width: 33.333%;
				float: left;
				box-sizing: border-box;
				height: 100%;
				background: #fff;
				position: relative;
			}
			#footer > ul > li > p{
				text-align: center;
				line-height: 50px;
			}
			.scan > img{
				width: 50%;
				position: absolute;
				top: -70%;
				left: 50%;
				margin-left: -25%;
			}
			.sub_menu_inner{
				padding: 5% 5%;
				overflow: hidden;
			}
			.sub_menu_inner > ul{
				overflow: hidden;
				margin-bottom: 7%;
			}
			.sub_menu_inner > ul > p{
				font-weight: bold;
				padding-bottom: 3%;
			}
			.sub_menu_inner > ul > li{
				width: 50%;
				float: left;
				text-align: center;
				padding: 2% 0;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<div>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>FFF</h1>
				<h1>GGG</h1>
				<h1 style="margin-bottom: 50px;">TTT</h1>
			</div>
			<div class="sub_menu" style="width: 100%; height: 100vh; background-color: #fff; display: none; position: fixed; top: 0;">
				<div class="sub_menu_inner">
					<ul>
						<p>My HiddenTag</p>
						<li>마이페이지</li>
						<li>설정</li>
						<li>내 단말 언어</li>
						<li>앱 평가하기</li>
					</ul>
					<ul>
						<p>Plus Contents</p>
						<li>브랜드 인기 랭킹</li>
						<li>랭킹</li>
						<li>정품스토어</li>
						<li>이벤트</li>
						<li>히든태그 후기</li>
						<li>히든태그 뉴스</li>
						<li>SNS</li>
						<li>로직스틱스</li>
					</ul>
					<ul>
						<p>이용 안내</p>
						<li>공지사항</li>
						<li>약관 및 정책</li>
					</ul>
					<ul>
						<p>고객센터</p>
						<li>제휴문의</li>
						<li>한번 더 체크하기</li>
					</ul>
				</div>
			</div>
			<div id="footer">
				<ul>
					<li class="home">
						<p>HOME</p>
					</li>
					<li class="scan">
						<img src="./images/scan-white.png">
						<p>SCAN</p>
					</li>
					<li class="more">
						<p>MORE</p>
					</li>
				</ul>
			</div>
		</div>
	</body>
</html>