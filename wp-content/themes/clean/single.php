<?php get_header()?>


<div id="fh5co-main">

  <div id="fh5co-content">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-3 col-md-push-9 animate-box">
              <?php get_sidebar()?>
            </div>
            <div class="col-md-9 col-md-pull-3">
              <?php get_template_part('template-parts/content', get_post_format())?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
get_sidebar();
get_footer();