<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<!--aos-->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			/**
			COPY HERE
			*/
			(function($) {
			  /** change value here to adjust parallax level */
			  var parallax = -0.5;

			  var $bg_images = $(".wp-block-cover-image");
			  var offset_tops = [];
			  $bg_images.each(function(i, el) {
			    offset_tops.push($(el).offset().top);
			  });

			  $(window).scroll(function() {
			    var dy = $(this).scrollTop();
			    $bg_images.each(function(i, el) {
			      var ot = offset_tops[i];
			      $(el).css("background-position", "100% " + (dy - ot) * parallax + "px");
			    });
			  });
			})(jQuery);
		</script>
		<style>
			/**
			DO NOT COPY THIS SECTION *SEE AND COPY THE END OF CSS PANEL

			 The css below is added by Gutenberg  Editor in Wordpress 5.0.

			 */
			*{
				background-repeat: no-repeat;
			}
			section{
				height: 400px;
				overflow: scroll;
			}
			.wp-block-cover-image {
			  position: relative;
			  background-size: cover;
			  background-position: 50%;
			  min-height: 400px;
			  width: 400px;
			  margin: 0 0 0;
			  display: flex;
			  justify-content: center;
			  align-items: center;
			}

			.wp-block-cover-image .wp-block-cover-image-text,
			.wp-block-cover-image h2 {
			  color: #fff;
			  font-size: 2em;
			  line-height: 1.25;
			  z-index: 1;
			  margin-bottom: 0;
			  max-width: 610px;
			  padding: 14px;
			  text-align: center;
			}

			.wp-block-cover-image.has-background-dim:before {
			  content: "";
			  position: absolute;
			  top: 0;
			  left: 0;
			  bottom: 0;
			  right: 0;
			  background-color: rgba(0, 0, 0, 0.5);
			}
			/*
			DO NOT COPY SECTION END
			 */

			/**
			 COPY HERE!
			 Add This to make background image parallax.
			*/
			.wp-block-cover-image {
			  background-attachment: fixed;
			  background-position: 0 0;
			  background-size: 400px 400px;
			}
		</style>
	</head>
	<body>
		<section>
		  <!-- widget area for above single content -->
		  <div class="wp-block-cover-image has-background-dim" style="background-image:url('./images/test7/number.png');">
		    <p class="wp-block-cover-image-text"><strong>Parallax 1</strong></p>
		  </div>

		  <div class="wp-block-cover-image has-background-dim" style="background-image:url('./images/test7/number+noise.png')">
		    <p class="wp-block-cover-image-text"><strong>Parallax 2</strong></p>
		  </div>

		  <div class="wp-block-cover-image has-background-dim" style="background-image:url('./images/test7/noise_qr22.png');">
		    <p class="wp-block-cover-image-text"><strong>Parallax 3</strong></p>
		  </div>

		  <div class="wp-block-cover-image has-background-dim" style="background-image:url(https://leap-in.com/wp-content/uploads/2018/07/beach-exotic-holiday-248797.jpg)">
		    <p class="wp-block-cover-image-text"><strong>Parallax 4</strong></p>
		  </div>

		  <div class="wp-block-cover-image has-background-dim" style="background-image:url(https://leap-in.com/wp-content/uploads/2018/07/beach-exotic-holiday-248797.jpg)">
		    <p class="wp-block-cover-image-text"><strong>Parallax 5</strong></p>
		  </div>

		</section>
	</body>
</html>
