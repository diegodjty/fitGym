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
        
	}

    public function form( $instance ) {
   
   	}

	public function update( $new_instance, $old_instance ) {

	}
} 

function fitGym_register_widget() {
    register_widget( 'fitGym_Clases_Widget' );
}
add_action( 'widgets_init', 'fitGym_register_widget' );