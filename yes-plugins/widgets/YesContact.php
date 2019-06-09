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

class YesContact extends WP_Widget {


	// set up widget
	public function __construct() {

		$options = array(
			'classname'   => 'yes_contact',
			'description' => 'Contact Yes Soft',
		);

		parent::__construct( 'yes_contact', 'Contact us, the yes way :)', $options );

	}

	// output widget content
	public function widget( $args, $instance ) {
		// outputs the content of the widget

		

		// region Main Contact Form
		echo '<div id="yes-contact-left" class="container">';

		echo '<div id="yes-contact-form-container">';


    echo '<br> </br>';
    echo '<h4 class="col-12">Talk to Me At: </h4>';
    echo '<br> </br>';


echo '<div class="container-fluid">';
		echo '
        <form class="col-10">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Your Name</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Name">
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="inputCity">Phone</label>
                  <input type="phone" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputCity">Country</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputCity">City/State</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                
              </div>
              <button type="submit" class="btn btn-primary">Contact Me ASAP</button>
            </form>
        ';

        echo '</div>';
		

		echo '</div> <!-- #yes-contact-left -->';
		// endregion


		echo '</div> <!-- .row -->';

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
function YesContact_register_widget() {

	register_widget( 'YesContact' );

	wp_enqueue_style( 'yes-contact', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/yes-contact.css', array(), null, 'screen' );
}

add_action( 'widgets_init', 'YesContact_register_widget' );
