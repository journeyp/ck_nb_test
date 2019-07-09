<!doctype html>
<html>
	<head>
		<title>toggle test</title>
		<meta charset="utf8">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('.nav-toggle').click(function() {
			        var collapse_content_selector = $(this).attr('id');
			        var toggle_switch = $(this);
			        $(collapse_content_selector).toggle(function() {
			            if ($(this).css('display') == 'none') {
			                toggle_switch.attr("src", toggle_switch.attr("src").replace("../images/jquery/ico_minus.png", "../images/jquery/ico_plus.png"));
			            } else {
			                toggle_switch.attr("src", toggle_switch.attr("src").replace("../images/jquery/ico_plus.png", "../images/jquery/ico_minus.png"));

			            }
			        });
			    });
			});
		</script>
		<style>
			*{
				padding: 0;
				margin: 0;
				list-style: none;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<div class="menu">
				<div class="animal">
					<p>동물</p>
					<img src="../images/jquery/ico_plus.png" id="#1" class="nav-toggle">

					<ul id="1" style="display: none">
						<li>고양이</li>
						<li>강아지</li>
						<li>다람쥐</li>
						<li>코알라</li>
						<li>호랑이</li>
					</ul>
				</div>
				<div class="food">
					<p>음식</p>
					<img src="../images/jquery/ico_plus.png" id="#2" class="nav-toggle">
					<ul id="2" style="display: none">
						<li>햄버거</li>
						<li>떡볶이</li>
						<li>불고기</li>
						<li>쌀국수</li>
						<li>오징어</li>
						<li>부침개</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>