<?php  

/**
 * Social Widget
 */
class windy_social_widget extends WP_Widget
{

	public function __construct()
	{
	    $widget_options = array(
	    	'classname' => 'windy_social',
	    	'description' => 'This is an Examplle Widget'
	    );
	    parent::__construct( 'windy_social', 'windy Social Widget', $widget_options );
	}

	public function widget( $args, $instance )
	{
			extract($args);
			$title = isset( $instance['title'] ) ? $instance['title'] : esc_html__( 'Follow Us', 'windy' );
	    $blog_title = get_bloginfo( 'name' );
	    $tagline = get_bloginfo( 'description' );
			
	    echo $before_widget;
	    echo $before_title;
	    echo $title;
	    echo $after_widget;

		?>
			
			<?php windy_social_icons(); ?>

    <?php 

	    echo $args['after_widget'];
	}

	public function form( $instance )
	{
		  $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Follow Us', 'windy' ); 

		  ?>
				<p>
			    <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			    <input type="text" 
			    				id="<?php echo $this->get_field_id( 'title' ); ?>" 
			    				name="<?php echo $this->get_field_name( 'title' ); ?>" 
			    				value="<?php echo esc_attr( $title ); ?>" />
				</p>
			<?php
	}
		
}


?>