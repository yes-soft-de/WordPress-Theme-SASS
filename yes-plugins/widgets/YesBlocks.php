<?php

/* Widget Info

    This Widget is used to Create the 'Blocks For Custom Build' Carousel,

*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

class YesBlocks extends WP_Widget {

	// set up widget
	public function __construct() {

		$options = array(
			'classname'   => 'yes_blocks_widget',
			'description' => 'Creates Yes Blocks',
		);

		parent::__construct( 'yes_blocks_widget', 'Creates Yes Blocks', $options );

	}

	// output widget content
	public function widget( $args, $instance ) {
		// outputs the content of the widget

		// region This Contains Test Data For the Service List, To Exported to Server Later...
		$services_json = '[
		{
    "msg": "WHY US!",
    "bg-color": "#EE6825",
    "text-color": "#FFFFFF"
  },
  {
    "msg": "Custom Build",
    "bg-color": "#FFFFFF",
    "text-color": "#394240"
  },
  {
    "msg": "Custom Build",
    "bg-color": "#45A9B7",
    "text-color": "#FFFFFF"
  },
  {
    "msg": "Custom Build",
    "bg-color": "#394240",
    "text-color": "#FFFFFF"
  },
  {
    "msg": "Custom Build",
    "bg-color": "#EE6825",
    "text-color": "#FFFFFF"
  },
  {
    "msg": "Yes Man!",
    "bg-color": "#FFFFFF",
    "text-color": "#394240"
  }
]';
		// endregion

		$services_list = json_decode( $services_json, true );

		if ( is_array( $services_list ) ) {
			echo '<div class="row container-section">';
			foreach ( $services_list as $service ) {

				echo '<div class="yes-blocks col-lg-4 col-sm-6 col-6 d-flex" style="background-color:'. $service["bg-color"] .'">';
				echo '<h2 class="yes-blocks-text" style="background-color:' . $service["bg-color"] . ' ; color: ' . $service["text-color"] . ';">' . $service["msg"] . '</h2>';
				echo '</div>';

			}
			echo '</div>';

		} else {
			echo "Error Reading List :( ";
		}
	}

	// output widget form fields
	public function form( $instance ) {

		// outputs the widget form fields in the Admin Area
		// This is used here to specify the background of the Carousel and the Text Color


		?>
        <label for="bg-selector">Background Color</label>
        <input type="color" id="bg-selector">

		<?php
	}

	// process widget options
	public function update( $new_instance, $old_instance ) {

		// processes the widget options

	}

}

// register widget
function YesBlocksWidget_register_widget() {

	register_widget( 'YesBlocks' );

	wp_enqueue_style( 'yes-blocks', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/yesblocks.css', array(), null, 'screen' );
}

add_action( 'widgets_init', 'YesBlocksWidget_register_widget' );

