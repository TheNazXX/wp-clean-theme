<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="fh5co-portfolio-item">
    <img class="animate-box" src="<?php echo get_the_post_thumbnail_url() ?>" alt="post-img">

    <div class="fh5co-portfolio-description" style="text-align: center">
      <h2><?php the_title(); ?></h2>
      IMAGE
      <p><?php the_content() ?></p>
    </div>
  </div>
</article>