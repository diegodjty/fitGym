<?php

if(!defined('ABSPATH')) die();

class fitGym_Clases_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'fitGym_widget',
			esc_html__( 'GymFitness Clases', 'fitGym' ), 
			array( 'description' => esc_html__( 'Add Classes like Widget', 'fitGym' ), )
		);
	}

	public function widget( $args, $instance ) {
		?>
			<ul class="sidebar-classes">
				<?php
					$args = array(
						'post_type' =>'fitgym_classes',
						'posts_per_page' => $instance['quantity'],
						'orderby' =>'desc'
					);
					$classes = new WP_Query($args);
					while($classes->have_posts()){
						$classes->the_post();
						?>
							<li>
								<div class="image">
									<?php the_post_thumbnail('thumbnail');?>
								</div>
								<div class="class-content">
									<a href="<?php the_permalink();?>">
										<h3><?php the_title(); ?></h3>
									</a>
									<?php 
										$starting_hour = get_field('starting_hour');
										$ending_hour = get_field('ending_hour')
									?>
									<p><?php the_field('classes_days');?> - 
									<?php echo $starting_hour .' - '. $ending_hour ?> </p>
								</div>
							</li>
						<?php
					}
					wp_reset_postdata();
				?>
			</ul>
		<?php
	}

    public function form( $instance ) {
		$quantity = !empty($instance['quantity']) ? $instance['quantity']: esc_html('How many classes you want to add?');
		?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('quantity'))?>"> <?php esc_attr_e('How many classes you want to add?') ?> </label>
			<input 
				type="number" 
				class="widefat" 
				id="<?php echo esc_attr($this->get_field_id('quantity'))?>" name="<?php echo esc_attr($this->get_field_name('quantity'))?>"
				value="<?php echo esc_attr($quantity)?>"
			/>
		</p>
		<?php
   	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['quantity'] = (!empty($new_instance['quantity'])) ? sanitize_text_field($new_instance['quantity']): '';
		return $instance;
	}
} 

function fitGym_register_widget() {
    register_widget( 'fitGym_Clases_Widget' );
}
add_action( 'widgets_init', 'fitGym_register_widget' );