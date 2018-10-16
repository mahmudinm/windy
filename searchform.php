<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

	<div class="input-group mb-3">

	  <input type="text" class="form-control search-field" 
	      placeholder="<?php echo 'Search …' ?>"
	            value="<?php echo get_search_query() ?>" name="s"
	            title="<?php echo 'Search for:' ?>">		

	  <div class="input-group-append">

	    <button class="btn btn-outline-secondary btn-search" type="submit"><span class="fa fa-search"></span></button>

	  </div>

	</div>

</form> 