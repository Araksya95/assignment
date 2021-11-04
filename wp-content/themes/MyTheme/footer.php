<footer>
    <div class="wrapper flex justify only-desk">
        <div class="half flex justify only-desk">
            <div class="half-1">
                <a href="<?php echo home_url()?>" class="footer-logo"><img src="<?php echo get_template_directory_uri()?>/assets/img/footer-logo.svg" alt=""></a>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget diam at mi sollicitudin</div>
            </div>
            <div class="half">
                <p class="txt bold">Nos services</p>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => 'nav',
                    'menu_class' => 'footer-menu'
                ]);
                ?>
            </div>
        </div>
        <div class="fifth-2">
            <p class="txt bold">Sign up for Special Offers!</p>
            <form action="#" class="subscribe-form">
                <input type="text" value="" name="" placeholder="Mail">
                <input type="submit" value="Subscribe" name="" class="bg-col-red">
            </form>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>