<?php 
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							
                        <? if(have_posts()) : while( have_posts() ): the_post();?>
                        <article>
                
                <?php the_post_thumbnail('large'); ?>
                <h2 class="title">
                
                <?php the_title(); ?></a>
                </h2>
                 
                <ul class="meta">
                <li>
                <i class="fa fa-calendar"></i> <?php the_date(); ?>
                </li>
                <li>
                <i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
                </li>
                <li>
                <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>
                </li>
                </ul>
                <?php the_excerpt();?></p>
                </article>
                 
                <? endwhile; else: endif;?>
							
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
									<h2>Sidor</h2>
                                        <?php
				//hämtar menu
wp_nav_menu( array( 
    'theme_location' => 'my-sidebar-pages', 
    'container_class' => 'my-sidebar-pages-class' ) ); 
?>
										
									<li>
										
									<?php 
									//Hämtar widget
									dynamic_sidebar( 'sidebar' ); ?>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php get_footer() ?>