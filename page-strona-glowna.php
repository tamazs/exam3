<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
 ?>

    <div class="container-fluid" id="landingcontainer">
        <div class="row">
            <div class="col-12">
                <div id="landing">
                    <video src="<?php echo get_template_directory_uri() ?>/images/landingvideo.mp4" id="video" loop muted autoplay playsinline webkit-playsinline></video>
                </div>
                
            </div>
        </div>
    </div>
    <div class="landingbody">
    <div class="row">
        <div class="card mb-3" id="cardbody">
        <div class="row g-3">
            <div class="col-md-4">
            <img src="<?php the_field('card_img')?>" class="img-fluid rounded-start" id="cardimg" alt="mom">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php the_field('card_title')?></h5>
                <p class="card-text" id="cardtext"><?php the_field('card_text')?></p>
                <img class="card-text" id="signature" src="<?php echo get_template_directory_uri() ?>/images/signature.png" alt="signature">
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3" id="cardbody">
        <div class="row g-3">
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php the_field('card_title_2')?></h5>
                <p class="card-text" id="cardtext"><?php the_field('card_text_2')?></p>
                <?php echo '<a href="umow-sie" class="btn btn-primary">FORMULARZ<br>ZGŁOSZENIOWY</a>' ?>
            </div>
            </div>
            <div class="col-md-4">
            <img src="<?php the_field('card_img_2')?>" class="img-fluid rounded-start" id="cardimg" alt="work">
            </div>
        </div>
        </div>
    </div>
    <div id="bound-one" class="scroll-bound">
		<div class="content">
 			<?php the_content() ?>
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