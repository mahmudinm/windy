<?php  

/**
 * Social Widget
 */
class laern_social_widget extends WP_Widget
{

	public function __construct()
	{
	    $widget_options = array(
	    	'classname' => 'learn_social',
	    	'description' => 'This is an Examplle Widget'
	    );
	    parent::__construct( 'learn_social', 'Learn Social Widget', $widget_options );
	}

	public function widget( $args, $instance )
	{
			extract($args);
			$title = isset( $instance['title'] ) ? $instance['title'] : esc_html__( 'Follow Us', 'learn' );
	    $blog_title = get_bloginfo( 'name' );
	    $tagline = get_bloginfo( 'description' );
			
	    echo $before_widget;
	    echo $before_title;
	    echo $title;
	    echo $after_widget;

		?>
			
			<?php learn_social_icons(); ?>

    <?php 

	    echo $args['after_widget'];
	}

	public function form( $instance )
	{
		  $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Follow Us', 'learn' ); 

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