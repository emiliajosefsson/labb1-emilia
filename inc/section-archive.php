

<? if(have_posts()) : while( have_posts() ): the_post();?>

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
                <?php the_excerpt();?></p>
                </article>

<? endwhile; else: endif;?>