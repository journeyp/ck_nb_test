<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#home').click(function(){
					$('html, body').animate({scrollTop: $('.home').offset().top}, 600);
					return false;
				});
				$('#dog').click(function(){
					$('html, body').animate({scrollTop: $('.dog').offset().top}, 600);
					return false;
				});
				$('#cat').click(function(){
					$('html, body').animate({scrollTop: $('.cat').offset().top}, 600);
					return false;
				});
				$('#animal').click(function(){
					$('html, body').animate({scrollTop: $('.animal').offset().top}, 600);
					return false;
				});
			});
		</script>
		<style>
			*{
				padding: 0;
				margin: 0;
				list-style: none;
				text-decoration: none;
			}
			.menu{
				height: 30px;
			}
			.top_menu{
				position: fixed;
				background-color: #fff;
				width: 100%;
				height: 30px;
				overflow: hidden;
			}
			.top_menu > li{
				float: left;
				padding: 5px 30px;
			}
			.contents{
				margin-top: 30px;
			}
			.contents > ul{
				margin-bottom: 30px;
			}
		</style>
	</head>
	<body>
		<div id="wrap">
			<div class="menu">
				<ul class="top_menu">
					<li id="home">HOME</li>
					<li id="dog">DOG</li>
					<li id="cat">CAT</li>
					<li id="animal">ANIMAL</li>
				</ul>
			</div>
			<div class="contents">
				<ul class="dog">
					<h1 style="color: pink; background-color: yellow;">강아지 종류</h1>
					<h1>포메라니안</h1>
					<h1>미니어처 핀셔</h1>
					<h1>파피용</h1>
					<h1>미니어쳐 닥스훈트</h1>
					<h1>요크셔테리어</h1>
					<h1>말티즈</h1>
					<h1>비숑 프리제</h1>
					<h1>미니어쳐 슈나이저</h1>
					<h1>치와와</h1>
					<h1>토이푸들</h1>
					<h1>페키니즈</h1>
					<h1>꼬똥 드 툴레아</h1>
					<h1>재퍼니스 친</h1>
					<h1>아펜핀셔</h1>
					<h1>토이 폭스테리어</h1>
					<h1>브뤼셀 그리펀</h1>
					<h1>볼로네즈</h1>
				</ul>
				<ul class="cat">
					<h1 style="color: blue; background-color: black;">고양이 종류</h1>
					<h1>러시안 블루</h1>
					<h1>페르시안</h1>
					<h1>벵골</h1>
					<h1>래그돌</h1>
					<h1>시암고양이</h1>
					<h1>브리티시 쇼트헤어</h1>
					<h1>먼치킨</h1>
					<h1>스핑크스</h1>
					<h1>메인쿤</h1>
					<h1>스코티시 폴드</h1>
					<h1>버먼</h1>
					<h1>터키시 앙고라</h1>
					<h1>샤르트뢰</h1>
					<h1>사바나</h1>
					<h1>네벨룽</h1>
					<h1>노르웨이 숲 고양이</h1>
					<h1>시베리안 고양이</h1>
					<h1>아비시니안</h1>
					<h1>히말라얀</h1>
					<h1>엑조틱 쇼트헤어</h1>
					<h1>아메리칸 쇼트헤어</h1>
					<h1>버마고양이</h1>
					<h1>붐베이고양이</h1>
					<h1>싱가푸라</h1>
					<h1>아메리칸 컬</h1>
					<h1>맹크스</h1>
					<h1>오리엔탈 쇼트헤어</h1>
					<h1>토이거</h1>
					<h1>데본렉스</h1>
					<h1>오시캣</h1>
					<h1>라가머핀</h1>
					<h1>라이코이</h1>
					<h1>발리니즈</h1>
					<h1>소말리 고양이</h1>
				</ul>
				<ul class="animal">
					<h1 style="background-color: red;">그 외 동물들</h1>
					<h1>호랑이</h1>
					<h1>백상아리</h1>
					<h1>청상아리</h1>
					<h1>범고래</h1>
					<h1>사자</h1>
					<h1>표범</h1>
					<h1>치타</h1>
					<h1>재규어</h1>
					<h1>퓨마</h1>
					<h1>하이애나</h1>
					<h1>늑대</h1>
					<h1>여우</h1>
					<h1>사막여우</h1>
					<h1>북극여우</h1>
					<h1>사마귀</h1>
					<h1>바다악어</h1>
					<h1>인도악어</h1>
					<h1>나일악어</h1>
					<h1>흡혈박쥐</h1>
					<h1>미시시피앨리게이터</h1>
					<h1>인도가비알</h1>
					<h1>코요테</h1>
				</ul>
			</div>
		</div>
	</body>
</html>