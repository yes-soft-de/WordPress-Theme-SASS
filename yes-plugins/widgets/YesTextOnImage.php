<?php
/**
 * Created by Mohammad Al Kalaleeb.
 * User: Mohammad Al Kalaleeb
 * Date: 6/1/2019
 * Time: 12:53 AM
 */

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

class YesTextOnImage extends WP_Widget {


	// set up widget
	public function __construct() {

		$options = array(
			'classname'   => 'yes_text_on_image_widget',
			'description' => 'Creates Text With Background Images',
		);

		parent::__construct( 'yes_text_on_image', 'Creates Text Over Images in Front Page', $options );

	}

	// output widget content
	public function widget( $args, $instance ) {
		// outputs the content of the widget


		$url    = 'http://10.0.75.1:8000/wp-content/uploads/2019/05/cropped-burning_book_by_houavang-d5u5w96.jpg';
		$header = 'Yes Soft Website';
		$text   = 'Yes Soft Website Yes Soft Website Yes Soft Website Yes Soft Website Yes Soft Website';



		echo '<div id="yes-header" class="row d-flex align-items-center justify-content-start " style="background-image: url(' . $url . ')">';

		echo '<div class="col-1"> </div>';
		echo '<div class="d-block header-text col-4">';
		echo '<h1 id="yes-text-header" class="col-8">' . $header . '</h1>';
		echo '<p id="yes-text-text" class="col-12">' . $text . '</p> ';

		echo '</div> <!-- .row -->';
		echo '</div> <!-- #yes-header -->';

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
function YesTextOnImage_register_widget() {

	register_widget( 'YesTextOnImage' );

	wp_enqueue_style( 'yes_text_on_image', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/text-on-image.css', array(), null, 'screen' );
}

add_action( 'widgets_init', 'YesTextOnImage_register_widget' );
