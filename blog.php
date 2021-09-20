<?php

/* Template Name: Blog */

?>

<?php 
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
						
                            <?php 
                            //Hämtar loop från fil i inc mapp
                            get_template_part('inc/section', 'post');?>
							
							<nav class="navigation pagination">
                                
                                 
                            <div class ="navigation pagination">
                            <?php 
                            
                            global $wp_query;
    
                                    $big = 999999999; // need an unlikely integer
                                    
                                        echo paginate_links(array(
                                            'base'          => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                            'format'        => '?paged=%#%',
                                            'current'       => max( 1, get_query_var('paged') ),
                                            'total'         => $wp_query->max_num_pages
                                         ) );
                    
                            ?>
                        </div>





								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
                                <a class="next page-numbers" href="">Nästa</a> 
                                


							</nav>
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