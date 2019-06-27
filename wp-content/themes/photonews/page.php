<!-- Header Area start -->
<?php get_header();?>
<!-- Header Area Ends -->

	<!-- Slider Area Starts -->
	<div class="pnews-slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="<?php echo get_template_directory_uri()?>/assets/img/1.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo get_template_directory_uri()?>/assets/img/2.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo get_template_directory_uri()?>/assets/img/3.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<!-- Slider Area Ends -->

	<!-- Content Area Starts -->
	<div class="pn-content">
		<div class="container">
			<div class="row">
			<?php get_sidebar();?>
				<div class="col-md-8">
					<div class="row">
					<?php
                        if(have_posts()) :
                        while(have_posts()) : the_post();
                     ?>
                        <div class="col-md-6">
							<div class="pn-post">
								<?php the_post_thumbnail(); ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><strong><?php the_author(); ?></strong> <?php echo get_the_date(); ?></p>
							</div>
						</div>
                       <?php
                           endwhile;
                           endif;
                        ?>
					</div>
					<div class="pn-pagination">
						<?php the_posts_pagination();?>
					</div>
				</div>
			
			</div>
		</div>
	</div>

	<!-- footer widget Area Starts -->
	<?php get_template_part('footer_widget'); ?>

	<!-- footer Area Starts -->
	<?php get_footer();?>