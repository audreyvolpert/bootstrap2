<? include ('layout/head.php') ?>
	<div class="container">
		<?php include"layout/header.php";?>

		<div class="row main">
		  	<div class="left-side col-md-8"><!--start left side-->
				<?php include "content/home-carousel.php";?>
				<?php include "content/next-matches.php";?>
				<?php include "content/carousel-news.php";?>
				<?php include "content/carousel-video.php";?>
				<?php include "content/commets-block.php";?>
			</div><!--end left side-->

		 	<div class="right-side col-md-4"><!--start right side-->
				<?php include "blocks/tabs.php";?>
			    <?php include "content/calendar-block.php";?>
			    <?php include "content/table-league-block.php";?>
				<img alt="some image" src="css/images/foot_fr/body/ads_4.jpg">
			</div><!--end right side-->
		</div>
	</div>
	<div style="height:60px;">
	</div>
<? include ('layout/footer.php') ?>