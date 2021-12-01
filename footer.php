<div class="pt-5 pb-5 footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                <h2><?php bloginfo("name") ?></h2>
                <p class="pr-5 text-white-50"><?php bloginfo("description") ?></p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                    <ul class="m-0 p-0">
                      <?php wp_nav_menu(array("theme-location" => "bottom-menu")) ?>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                <h4 class="mt-lg-0 mt-sm-4">Lokalizacja</h4>
                <p>Ul.Gdyńska 85, Miszewo</p>
                <p><img src="<?php echo get_template_directory_uri() ?>/images/phone.png')" id="ficon">+48 504 814 776</p>
                <p><img src="<?php echo get_template_directory_uri() ?>/images/mail.png')" id="ficon">streetverse@gmail.com</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col copyright">
                <p class=""><small class="text-white-50">© 2021. Wszystkie Prawa Zastrzeżone.</small></p>
                </div>
            </div>
        </div>
    </div>
 <?php wp_footer();?>
 
</body>
</html>