<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>

<?php


get_header();

?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							
                            
								<div class="text">
									<h1>Sökresultat:</h1>
                            <?php 
                            // Hämtar alla poster med design hur de ska se ut 
$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $allPostsWPQuery->have_posts() ) : ?>
 
<?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
<article>
                

<h2 class="title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>

<?php the_excerpt();?></p>
</article>
 
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
    <p><?php _e( 'There no posts to display.' ); ?></p>
<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer() ?>