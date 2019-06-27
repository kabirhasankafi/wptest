<?php global $pnews?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo $pnews['favicon']['url'];?>">
	<title>Photo News</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<?php
    wp_head();
    ?>
	
</head>
<body>

	<!-- Header Area Starts -->
	<header class="header-area">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="header-top-left">
							<i class="fas fa-bars"></i>
							<i class="far fa-clock"></i>
							<span id="bz-clock"></span>
						</div>
					</div>
					<div class="col-6">
						<div class="header-top-right">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-2 offset-md-5 col-4 offset-4">
						<img src="<?php echo $pnews['logo']['url'];?>" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="container">
				<nav class="main-menu">
					<div class="close-menu">
						<i class="fas fa-times"></i>
					</div>
				<?php
                  wp_nav_menu(array(
				'theme_location' => 'mainmenu',
				));  
                ?>
				</nav>
			</div>
		</div>
	</header>