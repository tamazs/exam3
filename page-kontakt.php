<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
 ?>

<section class="main">
       <div class="col-sm-12 col-md-12 text-center">
                    <h1 class='font'>
                        <?php the_title() ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div id="contactbody">
        <div id="container">
            <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2323.337318815177!2d18.358518715877917!3d54.38635668021012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd9ecd5f7af14d%3A0x75b3f381b8910a3!2sGdy%C5%84ska%2085%2C%2080-297%20Miszewo%2C%20Poland!5e0!3m2!1sen!2sdk!4v1638368614639!5m2!1sen!2sdk" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div id="contactinfo">
                <div class="contactrows">
                    <img src="<?php echo get_template_directory_uri() ?>/images/phone.png" id="phone" alt="Card image cap">
                    <h5><?php the_field('phone')?></h5>
                </div>
                <div class="contactrows">
                <img src="<?php echo get_template_directory_uri() ?>/images/mail.png" id="mail" alt="Card image cap">
                    <h5><?php the_field('mail')?></h5>
                </div>
                <div class="contactrows">
                <img src="<?php echo get_template_directory_uri() ?>/images/location.png" id="location" alt="Card image cap">
                    <h5><?php the_field('location')?></h5>
                </div>
            </div>
        </div>
    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    <?php
    endif;
    ?>

</div>


  

<?php get_footer(); ?>