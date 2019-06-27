<!-- Header Area start -->
<?php get_header();?>
<!-- Header Area Ends -->

	<?php get_template_part('slider');?>

	<!-- Content Area Starts -->
	<div class="pn-content">
		<div class="container">
			<div class="row">
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
								<p class="pn-tag">
								    <?php echo get_the_tag_list(); ?>
								</p>
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
			<?php get_sidebar();?>
			</div>
		</div>
	</div>

	<!-- footer widget Area Starts -->
	<?php get_template_part('footer_widget'); ?>

	<!-- footer Area Starts -->
	<?php get_footer();?>