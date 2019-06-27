 <div class="footer-area">
        <div class="last-menu">
        <nav>
          <?php
                  $BDmenu = array('theme_location'=>'xyz');
                  wp_nav_menu($BDmenu);
          ?>
        </nav>
    </div>
    </div>
    
    <?php
wp_footer();   
?>
</body>

</html>