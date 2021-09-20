
<?php 

// Hämtar alla poster med design hur de ska se ut 

 $allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish')); 

?>
 
<?php 
 if ( $allPostsWPQuery->have_posts() ) :
 ?>
 
<?php
      while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post();
      ?>
    

<article>
                
<?php the_post_thumbnail('large'); ?>
<h2 class="title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
 
<ul class="meta">
<li>
<i class="fa fa-calendar"></i> <?php the_date(); ?>
</li>
<li>
<i class="fa fa-user"></i> <a href=""><?php the_author(); ?></a>
</li>
<li>
<i class="fa fa-tag"></i> <a href=""><?php the_category(" ,"); ?></a>
</li>
</ul>
<?php the_excerpt();?>
</article>
 
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
    <p><?php _e( '
    Finns inga blogginlägg' ); ?></p>
<?php endif; ?>
