<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<!--bxslider-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  		<script>
  			$(document).ready(function(){
  				$('#idk01').bxSlider({
					auto: false,
					pager: false,
					controls: false,
					slideWidth: 200,
					maxSlides: 3,
					moveSlides: 1, 
				});
				$('#idk02').bxSlider({
					auto: false,
					pager: false,
					controls: false,
					slideWidth: 200,
					maxSlides: 3,
					moveSlides: 1, 
				});
				$('#idk03').bxSlider({
					auto: false,
					pager: false,
					controls: false,
					slideWidth: 200,
					maxSlides: 3,
					moveSlides: 1, 
				});
				$('.ticket_gnb_p').click(function(){
    				$('.ticket_gnb_p').removeClass("active");
    				$(this).addClass("active");
				});
  			});
  		</script>
  		<style>
  			*{
  				padding: 0;
  				margin: 0;
  				text-decoration: none;
  				list-style: none;
  			}
  			.slider > ul{
  				height: 50px;
  			}
  			.slider > ul > li{
  				float: left;
  				margin-right: 10px;
  			}
  			.active{
  				text-decoration: underline;
  			}
  			.gallery{
  			}

  			/*tab-input*/
			.tab-input {
				display: none;
			}
			.tab-item {
				position: absolute; 
				visibility: hidden; 
				opacity: 0;
				border: 3px solid red;
			}
			.tab-input:checked + .tab-item {
				position: static; 
				visibility: visible; 
				opacity: 1; 
			}
			.bx-wrapper {
				box-shadow: 0 0 0px #ccc;
				border: 0px solid #fff;
				background: transparent;
			}
  		</style>
	</head>
	<body>
		<div class="wrap">
			<div class="slider">
				<ul>
					<li>
						<label for="tab-1" class="ticket_gnb1">
							<p class="ticket_gnb_p active">
								<a>NEW</a>
							</p>
						</label>
					</li>
					<li>
						<label for="tab-2" class="ticket_gnb2">
							<p class="ticket_gnb_p">
								<a>BEST</a>
							</p>
						</label>
					</li>
					<li>
						<label for="tab-3" class="ticket_gnb3">
							<p class="ticket_gnb_p">
								<a>MD's CHOICE</a>
							</p>
						</label>
					</li>
				</ul>
			</div>

			<div class="ticket_gallery">
				<div class="gallery">

					<!--tab1-->
					<input id="tab-1" class="tab-input" name="tab" type="radio" checked>
					<div class="tab-item">
						<ul class="idk" id="idk01">
							<li>
								<a href="#">
									<img src="../images/jquery/c5a5833c50a329d96159b2e6c543c5f5.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/72da37574f1f67a7b7e826cd15ad8a70.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/779bad0eb639e57e3c402d2a172a75dd.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/72da37574f1f67a7b7e826cd15ad8a70.jpg">
								</a>
							</li>
						</ul>
					</div>

					<!--tab2-->
					<input id="tab-2" class="tab-input" name="tab" type="radio">
					<div class="tab-item">
						<ul class="idk" id="idk02">
							<li>
								<a href="#">
									<img src="../images/jquery/f2955032ee075af9fff69a74eab5fd18.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/e7010ae87b09268ac6c4d48315fe216f.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/0fa614d14cf865e3c1d32cd9d42bd89e.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/b06106d5d284f7b9ce5e626eb66391ff.jpg">
								</a>
							</li>
						</ul>
					</div>

					<!--tab3-->
					<input id="tab-3" class="tab-input" name="tab" type="radio">
					<div class="tab-item">
						<ul class="idk" id="idk03">
							<li>
								<a href="#">
									<img src="../images/jquery/0a62badabb49c82e2713d823298779d1.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/db618b22f64b22efa45ae31cb92abd24.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/a36546203b5f80dfd224bf6f1374862e.jpg">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../images/jquery/2a05437ec4e8ebb332708bc74c45fcd6.jpg">
								</a>
							</li>
						</ul>	
					</div>

				</div>
			</div>
		</div>
	</body>
</html>