<?php get_header(); ?>

<section id="page-main" class="bg-dark text-light shadow">
    <div class="container">

        <?php
        if (have_posts()) :
            while(have_posts()) :
                the_post();
        ?>
        <h1 class="pt-3 pb-3" style="text-shadow: 1px 1px #ccc;"><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>

        <?php 
        endwhile; endif;
        ?>

    </div> <!-- .container -->
</section> <!-- #page-main -->

<?php get_footer(); ?>