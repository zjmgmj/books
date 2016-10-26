<?php
include ("/view/header.php");
?>

<section class="main" >
	<!--<div class="swiper-container swiper-container-h">
		<div class="swiper-wrapper content">
			<?php include ("/view/books.php");?>
			<div class="swiper-slide">
				Horizontal Slide 3
			</div>
			<div class="swiper-slide">
				Horizontal Slide 4
			</div>
		</div>
	</div>-->
<div id="wrapper">
	<div id="scroller">
		<ul id="thelist">
			<li class="scroller-list"><?php include ("/view/books.php");?></li>
			<li class="scroller-list"><strong>2.</strong> <em>A robot must obey any orders given to it by human beings, except where such orders would conflict with the First Law.</em></li>
			<li class="scroller-list"><strong>3.</strong> <em>A robot must protect its own existence as long as such protection does not conflict with the First or Second Law.</em></li>
		</ul>
	</div>
</div>

</section>
<script src="data/books.js"></script>
