<?php global $pnews?>
<footer class="footer-area">
		<div class="container">
			<div class="footer-text">
			    <p>&copy; <?php echo $pnews['ctext'];?><a href="<?php echo $pnews['curl'];?>"><a href="<?php echo $pnews['curl'];?>"> <?php echo $pnews['cdev'];?></a></a> </p>
			</div>
			<div class="footer-icon">
			    <ul>
                    <?php if(!empty($pnews['sicon']['Facebook'])):?>
			        <li><a href="<?php echo $pnews['sicon']['Facebook'];?>"><i class="fab fa-facebook-square"></i></a></li>
			        <?php endif; ?>
			         <?php if(!empty($pnews['sicon']['Twitter'])):?>
			        <li><a href="<?php echo $pnews['sicon']['Twitter'];?>"><i class="fab fa-twitter-square"></i></a></li>
			        <?php endif; ?>
			        <?php if(!empty($pnews['sicon']['Linkdin'])):?>
			        <li><a href="<?php echo $pnews['sicon']['Linkdin'];?>"><i class="fab fa-linkedin"></i></a></li>
			        <?php endif; ?>
			    </ul>
			</div>
		</div>
	</footer>

	
	
	<?php
    wp_footer();
    ?>
	
</body>
</html>