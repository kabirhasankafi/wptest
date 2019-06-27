<?php
   get_header();
?>
    <div class="quotes-area">
        <h2>"Blogging isn't about publishing as much as you can. It's about publishing as smart as you can."</h2> </div>
    <div class="BD-post-area">
        <div class="BD-post-section">
           <?php
            if(have_posts()):
                while (have_posts()):the_post();
            ?>
           <article>
    <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2> <img src="image/ishan4.jpeg" class="img-fluid" alt="pic">
    <p>
        <?php the_content(); ?>
    </p>
</article>
            <?php
            endwhile;
            else: echo 'No post found';
            endif;
            ?>
          
        </div>
     <?php
         get_sidebar();
     ?>
    </div>
    <div class="widget-area">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="slider-area"> <img src="image/pic.jpeg" alt="pic" class="img-fluid"> </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-area">
                            <video controls autoplay loop src="image/Dil%20diyan%20galla.mp4"></video>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search-area">
                            <div class="box">
                                <form action="">
                                    <label for="search">Search Here</label>
                                    <input type="text" name="" placeholder="Search...">
                                    <input type="submit" name="" value="Search" id="search"> </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
   get_footer();
   ?>