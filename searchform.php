<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

	<div class="input-group mb-3">
	  <input type="text" class="form-control search-field" style="padding: 10px;" 
	      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
	            value="<?php echo get_search_query() ?>" name="s"
	            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">		
	  <div class="input-group-append">
	    <button class="btn btn-outline-secondary" type="button"><span class="fa fa-search"></span></button>
	  </div>
	</div>

</form> 

