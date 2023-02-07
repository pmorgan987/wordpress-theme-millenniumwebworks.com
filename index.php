<?php get_header(); ?>

  <section id="showcase" class="d-flex align-items-center text-center">
    <div class="container">
      <section id="call-to-action">
        <h1 class="m-5">Your One Stop Development Partner</h1>
        <p>Welcome to Millennium Web Works, a full service website development company.  We have been in business for over 10 years and can help bring your ideas to light!</p>
        <p>Contact Us today to learn more!</p>
        <a href="#" class="btn btn-success btn-lg m-5">Free Consultation</a>
      </section>
    </div>
  </section>

  <section id="why-us">
    <div class="container">
      <h1 class="text-center mt-3">Why Choose Us?</h1>
      <div class="row text-center mt-3 mb-5">
        <div class="col-md-4 g-5">
          <div class="shadow card h-100">
            <div class="card-body">
              <i class="far fa-check-circle text-success mb-4"></i>
              <h2>Experience</h2>
              <p>Our developers have experience working with customers just like you to help make their visions a reality!</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 g-5">
          <div class="shadow card h-100">
            <div class="card-body">
              <i class="far fa-check-circle text-success mb-4"></i>
              <h2>Quality</h2>
              <p>We work to the highest quality and don't stop until we've acheived your goals!</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 g-5">
          <div class="shadow card h-100">
            <div class="card-body">
              <i class="far fa-check-circle text-success mb-4"></i>
              <h2>Dedication</h2>
              <p>We are always here for you and are dedicated to helping you succeed!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="recent-work" class="p-5">
    <div class="container">
      <h1 class="text-center my-3">Our Recent Work</h1>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" class="mx-auto">
          <div class="carousel-item active">
            <img src="<?php bloginfo('template_url'); ?>/images/recent1.png" class="img img-fluid d-block mx-auto" alt="Richmond Hill Martial Arts">
          </div>
          <div class="carousel-item">
            <img src="<?php bloginfo('template_url'); ?>/images/recent2.png" class="img img-fluid d-block mx-auto" alt="Reflexology Inc.">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

<?php get_footer(); ?>