<? include ("layout/head.php") ?>
	<div class="container">

		<? include ("layout/header.php") ?>
	    <? include ("blocks/search.php") ?>

		<div class="row main">
			<div id="news" class="left-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<? include ("content/allnews.php") ?>
			</div>
			<div class="right-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<? include ("blocks/news-tabs.php") ?>
			</div>
		</div>
	</div>
<? include ("layout/footer.php") ?>