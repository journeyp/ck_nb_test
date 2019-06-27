<!doctype html>
<html>
	<head>
		<style>
			*{
				margin: 0;
			}
			.wrap{
				position: relative;
				overflow: hidden;
				height: 100vh;
			}
			.video{
				position: fixed;
				width: 100%;
				z-index: 1;
			}
			.sub_video{
				position: absolute;
				top: 50%;
				left: 50%;
				min-height: 100%;
				transform: translate(-50%,-50%);
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<div class="video"></div>
			<video loop autoplay class="sub_video">
				<source src="https://hushanesthetic.com/wp-content/uploads/2018/12/Homepage-1280.mp4" type="video/mp4">
				<source src="https://hushanesthetic.com/wp-content/uploads/2018/12/Homepage-1280.webm" type="video/webm">
			</video>
		</div>
	</body>
</html>