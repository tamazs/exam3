<?php
get_header(); ?>
<div class="container mt-5">
        <main class="row text-center" id="home" >
            <section class="col-12" id="formbody">
                <?php while(have_posts()): the_post() ?>
                    <p><?php the_content() ?></p>
                <?php endwhile ?>
            </section>
        </main>
    </div>
<?php get_footer(); ?>