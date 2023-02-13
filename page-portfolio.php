<?php get_header(); ?>

<section id="page-main" class="bg-dark text-light shadow">
  <div class="container">
    <h1 class="pt-3">Our Portfolio</h1>

    <p class="mb-5">These are a few of the sites designed and programmed by us.  Contact us to find out what we can do for you!</p>

    <?php $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC' ) ); ?>
    <div class="row g-5">
      <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

        <div class="col-md-6">
          <div class="portfolio__grid">
            <?php the_post_thumbnail('home-slider-img',['class'=>'img-fluid']); ?>
            <div class="text-center">
              <h2><?php the_title(); ?></h2>
              <p><a href="https://www.<?php echo get_post_meta($post->ID, 'Url', true); ?>"><?php echo get_post_meta($post->ID, 'Url', true); ?></a></p>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
    </div> <!-- .row -->
  </div> <!-- .container -->
</section> <!-- #page-main -->

<?php get_footer(); ?>