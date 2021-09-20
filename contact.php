<?php


/* Template Name: Contact */

?>

<?php 
get_header();
?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Kontakt</h1>
							<form>
								<!-- Hämtar contact form från WP -->
							<?php get_template_part('inc/section', 'content');?>
								
							</form>
						</div>
					</div>
				</div>
			</section>
    </main>

    <?php get_footer() ?>