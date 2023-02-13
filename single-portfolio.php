<?php get_header(); ?>

<section id="page-main" class="bg-dark text-light shadow">
  <div class="container">

    <h1 class="tagline"><?php the_title(); ?></h1>

    <?php
      $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
    ?>

    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

    <div class="row mt-5">
      <div class="col-md-3">
        <?php the_post_thumbnail('home-slider-img',['class'=>'img-fluid']); ?>
      </div>
      <div class="col-md-9">
        <h2><?php the_title(); ?></h2>
        <div class="d-inline"><a href="https://www.<?php echo get_post_meta($post->ID, 'Url', true); ?>"><?php echo get_post_meta($post->ID, 'Url', true); ?></a></div>
        <div class=""><?php the_content(); ?></div>
      </div>
    </div>

    <?php endwhile; ?>

  </div> <!-- .container -->
</section> <!-- #page-main -->

<?php get_footer(); ?>