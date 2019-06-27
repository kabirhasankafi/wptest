<?php global $pnews?>
<!-- Slider Area Starts -->
	<div class="pnews-slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <?php if($pnews['indicator'] == 1) :?>
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <?php endif;?>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="<?php echo $pnews['slide-1']['url'];?>" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo $pnews['slide-2']['url'];?>" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo $pnews['slide-3']['url'];?>" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <?php if($pnews['PNbuttuns'] == 1) :?>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		  <?php endif;?>
		</div>
	</div>
	<!-- Slider Area Ends -->