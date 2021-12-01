<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
 ?>

    <div class="container-fluid" id="landingcontainer">
        <div class="col-sm-12 col-md-12 text-center">
                        <h1 class='font' id="aboutustitle">
                            <?php the_title() ?>
                        </h1>
                    </div>
        <div class="row" id="aboutusmain">
            <div class="col-md-5 col-sm-12">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-us.jpg" alt="o-nas" id="aboutuspic">
            </div>
            <div class="col-md-7 col-sm-12">
                <p><?php the_content() ?></p>
            </div>
        </div>
        <div class="container-fluid">
        <div class="col-12">
                        <div id="promovid">
                            <?php the_field('promo_vid')?>
                        </div>
                    </div>
        </div>
    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
    <?php
    endif;
    ?>
<?php get_footer(); ?>