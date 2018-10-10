<?php  


function learn_cats() {
	$cats = [];
	$cats[0] = 'All';

	foreach ( get_categories() as $categories => $category ) {
		$cats[$category->term_id] = $category->name;
	}

	return $cats;
}

if ( ! function_exists( 'learn_featured_slider' ) ) {

function learn_featured_slider() {
	if ( ( is_home() || is_front_page() ) && get_theme_mod( 'learn_slider_hide' ) == 1 ) {

			echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">';
				
					echo '<ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  </ol>';
					
					echo '<div class="carousel-inner" style="height:400px;">';

					$slidecat = get_theme_mod( 'learn_slider_cat' );

					$query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => -1 ) );
					
						if ( $query->have_posts() ) {

							$i = 0;

							while ( $query->have_posts() ) : $query->the_post();
								
								$i++;

								$isActive = ($i == 1) ? 'active' : null;

								if ( (function_exists( 'has_post_thumbnail' )) && ( has_post_thumbnail() ) ) {
									
								  echo  '<div class="carousel-item '. $isActive .'">
										      <img class="d-block w-100" style="height:400px;" src="' . get_the_post_thumbnail_url() . '" alt="'. get_the_title() .'">
										    </div>';
								}

							endwhile;
							
						}

					echo '</div>';
			
			  echo '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  		    <span class="sr-only">Previous</span>
			  		  </a>';

			  echo '<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  		    <span class="sr-only">Next</span>
			  		  </a>';

			echo '</div>';
			
		
	}
}
	
}


?>