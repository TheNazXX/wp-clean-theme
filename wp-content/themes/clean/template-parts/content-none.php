<?php get_header() ?>

<div id="fh5co-portfolio">
	<?php
	$query = new WP_Query([
		'category_name' => 'home'
	]);


	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

	?>

			<div class="fh5co-portfolio-item fh5co-img-right">
				<div class="fh5co-portfolio-figure animate-box" style="background-image: url(images/work_2.jpg);"></div>
				<div class="fh5co-portfolio-description">
					<h2>Prect Secondoj</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p><a href="#" class="btn btn-primary">Read the casetudy</a></p>
				</div>
			</div>

			<?php ?>


	<?php endwhile;
	endif; ?>
</div>

<?php get_footer() ?>