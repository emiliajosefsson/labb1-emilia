<?php

/* Template Name: Page Four */

?>

<?php

get_header();
?>



<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							<!-- Hämtar titel samt innehåll -->
							<h1><?php the_title();?></h1>
							<p><?php get_template_part('inc/section', 'content');?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php 
							//hämtar bild
							echo get_template_directory_uri(); ?>/img/photo.jpg" />
						</div>
					</div>
				</div>
			</section>
        </main>

<?php get_footer() ?>
