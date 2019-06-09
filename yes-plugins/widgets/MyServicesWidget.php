<?php

/* Widget Info

    This Widget is used to Create the 'My Services' Corousel, 

*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

class MyServicesWidget extends WP_Widget {

	// set up widget
	public function __construct() {

		$options = array(
			'classname'   => 'my_services_widget',
			'description' => 'Creates My Services Section',
		);

		parent::__construct( 'my_services_widget', 'Yes Services Widget', $options );

	}

	// output widget content
	public function widget( $args, $instance ) {
		// outputs the content of the widget

		// region This Contains Test Data For the Service List, To Exported to Server Later...
		$services_json = '[
  {
    "name": "Symfony",
    "description": "Symfony Apps, Custom Made, Just For You!",
    "link": "https://res.cloudinary.com/micksawy3r/image/upload/v1559335005/symfony_black_03.svg"
  },
  {
    "name": "WordPress",
    "description": "Custom Made Themes That Represent The Business",
    "link": "https://res.cloudinary.com/micksawy3r/image/upload/v1559335152/1200px-WordPress_blue_logo.svg.png"
  },
  {
    "name": "UI UX Study",
    "description": "We Provide the Industries With The Designs Of Material Design, Bootstrap, Flat and More!",
    "link": "https://res.cloudinary.com/micksawy3r/image/upload/v1559335326/uiux.png"
  },
  {
    "name": "Service 04",
    "description": "Yes Service Yes Service Yes Service Yes Service ",
    "link": "http://localhost:8080/wp-content/uploads/2019/05/Asset-1-300x300.png"
  }
]';
		// endregion

		$services_list = json_decode( $services_json, true );

		if ( is_array( $services_list ) ) {

			echo '<div id="my-service-widget" class="row container-section d-flex justify-content-center p-5 mt-5">';

			// region Small Left Carousel

			echo '<div id="servicesSliderLeft" class="carousel slide col-2 mr-5" data-ride="carousel" data-pause="false">';

			// region Create Carousel Body
			echo '<div class="carousel-inner">';

			// this is where the magic happens :)
			$start = 0;
			$slide_num = 0;
			foreach ( $services_list as $service ) {

				// Performance is Not Perfect, But You wont have a million service ;p
				if ( $start === $slide_num ) {
					echo '<div class="carousel-item active">';
					$start = - 1;
				} else {
					echo '<div class="carousel-item">';

				}

				echo '<div class="m-0 p-0">';

				// display Image
				echo '<img class="container-fluid d-block img-fluid slider-image-small" src="' . $service['link'] . '" alt="...">';

				//echo '<div class="carousel-caption d-none d-md-block">';
				echo '<h5  class="service-name mt-1">' . $service['name'] . '</h5>';
				echo '<p class="service-more">' . $service['description'] . '</p>';


				//echo '</div>';
				echo '</div>';
				echo '</div> <!-- .carousel-item -->';
				$slide_num += 1;
			}
			echo '</div> <!-- .carousel-inner  -->';
			// endregion

			echo '</div> <!-- .carousel -->';

			// endregion

			// region Big Center Carousel

			echo '<div id="servicesSliderLeft" class="carousel slide col-4 m-0 p-0" data-ride="carousel"  data-pause="false">';

			// region Create Carousel Body
			echo '<div class="carousel-inner">';

			// this is where the magic happens :)
			$start = 1;
			$slide_num = 0;
			foreach ( $services_list as $service ) {

				// Performance is Not Perfect, But You wont have a million service ;p
				if ( $start === $slide_num ) {
					echo '<div class="carousel-item active">';
					$start = - 1;
				} else {
					echo '<div class="carousel-item">';

				}

				echo '<div class="m-0 p-0">';

				// display Image
				echo '<img class="container-fluid d-block img-fluid slider-image-large" src="' . $service['link'] . '" alt="...">';
				echo '<h5  class="service-name mt-1">' . $service['name'] . '</h5>';
				echo '<p class="service-more">' . $service['description'] . '</p>';
				echo '</div>';
				echo '</div> <!-- .carousel-item -->';
				$slide_num += 1;
			}
			echo '</div> <!-- .carousel-inner  -->';
			// endregion

			echo '</div> <!-- .carousel -->';

			// endregion

			// region Small Right Carousel

			echo '<div id="servicesSliderLeft" class="carousel slide col-2 ml-5 p-0" data-ride="carousel"  data-pause="false">';

			// region Create Carousel Body
			echo '<div class="carousel-inner">';

			// this is where the magic happens :)
			$start = 2;
			$slide_num = 0;
			foreach ( $services_list as $service ) {

				// Performance is Not Perfect, But You wont have a million service ;p
				if ( $start === $slide_num ) {
					echo '<div class="carousel-item active">';
					$start = - 1;
				} else {
					echo '<div class="carousel-item">';

				}

				echo '<div class="m-0 p-0">';
				// display Image
				echo '<img class="container-fluid d-block img-fluid slider-image-small" src="' . $service['link'] . '" alt="...">';
				echo '<h4 class="service-name mt-1">' . $service['name'] . '</h4>';
				echo '<p class="service-more">' . $service['description'] . '</p>';
				echo '</div>';
				echo '</div> <!-- .carousel-item -->';
				$slide_num += 1;
			}
			echo '</div> <!-- .carousel-inner  -->';
			// endregion

			echo '</div> <!-- .carousel -->';


			// endregion

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
function MyServicesWidget_register_widget() {

	register_widget( 'MyServicesWidget' );
	wp_enqueue_style( 'yes_common_style', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/yes-services.css' , array(), null, 'screen' );

}

add_action( 'widgets_init', 'MyServicesWidget_register_widget' );
