<?php
/**
 * Created by Mohammad Al Kalaleeb.
 * User: Mohammad Al Kalaleeb
 */

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

class TeamCards extends WP_Widget {

	// set up widget
	public function __construct() {

		$options = array(
			'classname'   => 'yes_team_cards',
			'description' => 'Creates Cards For The Team Members',
		);

		parent::__construct( 'yes_team_cards', 'Creates Cards For Team Players', $options );

	}

	// output widget content
	public function widget( $args, $instance ) {
		// outputs the content of the widget

		// region This Contains Test Data For the Service List, To Exported to Server Later...
		$services_json = '[
		{
    "name": "Mohammad Al Kalaleeb",
    "department": "Dev Ops",
    "img": "https://res.cloudinary.com/micksawy3r/image/upload/v1559333448/Me_Square.jpg",
    "quote": "Success is a deep passion, long hours of work, and a lifestyle",
    "in": "https://www.linkedin.com/in/mohammad-al-kalaleeb-6ab521140",
    "github": "https://github.com/mickSawy3r/",
    "facebook": "",
    "twitter": "",
    "behance": "" 
  },{
    "name": "Osama Alhamoud",
    "department": "Managerial",
    "img": "https://res.cloudinary.com/micksawy3r/image/upload/v1559333441/Osama_Square.jpg",
    "quote": "Open your eyes and say Yes",
    "in": "https://www.linkedin.com/in/osama-alhamoud",
    "github": "https://github.com/osama-alhamoud",
    "facebook": "",
    "twitter": "",
    "behance": "" 
  },{
    "name": "Thabet Mohammad El Debuch",
    "department": "Dev Ops",
    "img": "https://res.cloudinary.com/micksawy3r/image/upload/v1559333523/Thabet_Square.jpg",
    "quote": "Give me money, I’ll give you perfect work",
    "in": "https://www.linkedin.com/in/thabet-el-b99701185/ ",
    "github": "https://github.com/Thabet-Do ",
    "facebook": "",
    "twitter": "",
    "behance": "" 
  },{
    "name": "Kenan Hussein",
    "department": "Dev Ops",
    "img": "https://res.cloudinary.com/micksawy3r/image/upload/v1559333856/Kenan_Square.jpg",
    "quote": "Think a lot code a few, Keep it simple keep it stupid.",
    "in": "www.linkedin.com/in/kenan-hussein",
    "github": ": https://github.com/Kenan-Hussein/",
    "facebook": "",
    "twitter": "",
    "behance": "" 
  },{
    "name": "Mujeeba Haj Najeeb",
    "department": "Managerial",
    "img": "https://res.cloudinary.com/micksawy3r/image/upload/v1559333539/Mojeba_Square.jpg",
    "quote": "Dream big and work hard",
    "in": "https://www.linkedin.com/in/mujeeba-haj-najeeb-327228161/ ",
    "github": "https://github.com/Mujeeba-Haj-Najeeb",
    "facebook": "",
    "twitter": "",
    "behance": "" 
  },{
    "name": "Ahmad Berkdar",
    "department": "UI/UX",
    "img": "https://res.cloudinary.com/micksawy3r/image/upload/v1559333497/Talal_Square.jpg",
    "quote": "Lean back to take a larger view",
    "in": "https://www.linkedin.com/in/ahmad-berkdar-621a83186",
    "github": "https://github.com/ahmadberkdar",
    "facebook": "",
    "twitter": "",
    "behance": "" 
  }, {
    "name": "Talal Danoun",
    "department": "Dev Ops",
    "img": "https://res.cloudinary.com/micksawy3r/image/upload/v1559333497/Talal_Square.jpg",
    "quote": "Leave your comfort zone and you’ll reach the impossible",
    "in": "https://www.linkedin.com/in/talal-danoon-38945b154/",
    "github": "https://github.com/tald7344",
    "facebook": "",
    "twitter": "",
    "behance": "" 
  }
]';
		// endregion

		$services_list = json_decode( $services_json, true );

		if ( is_array( $services_list ) ) {
      echo '<div class="container">';
echo "<h2>Our Proud Team: </h2>";
echo '</div>';

			echo '<div class="container-fluid p-5 row container-section d-flex justify-content-center m-5">';

			foreach ( $services_list as $service ) {


				echo '<div class="card w-25 mt-2 m-2">';

				// This Displays the position in our Company
				echo '<div class="card-header">' . $service['department'] . '</div>';

				// The Image of the Damned in Programming ;-)
				echo '<img src="' . $service['img'] . '" class="card-img-top" alt="...">';

				// This Section Displays The Name and The Caption, This is in this
				// Structure due to the long nature of Quotes

				echo '<div class="card-body">';
				echo '<h5 class="card-title">' . $service['name'] . '</h5>';
				echo '<p class="card-text">' . $service['quote'] . '</p>';
				echo '</div> <!-- .card-body -->';


				// This is used to display the links
				if ($service['in'] !== "" || $service['github'] !== "" || $service['facebook'] !== "" || $service['twitter'] !== "" || $service['behance'] !== "" ){
					echo '<div class="card-body">';
					if ($service['in'] !== ""){
						echo '<a href="' . $service['in'] .'" class="card-link">LinkedIn</a>';
					}

					if ($service['github'] !== ""){
						echo '<a href="' . $service['github'] .'" class="card-link">GitHub</a>';
					}
					if ($service['facebook'] !== ""){
						echo '<a href="' . $service['github'] .'" class="card-link">Facebook</a>';
					}
					if ($service['behance'] !== ""){
						echo '<a href="' . $service['github'] .'" class="card-link">Behance</a>';
					}
					if ($service['twitter'] !== ""){
						echo '<a href="' . $service['github'] .'" class="card-link">Twitter</a>';
					}
					echo '</div>';
				}

				echo '</div> <!-- .card  -->';
				

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

	}

	// process widget options
	public function update( $new_instance, $old_instance ) {

		// processes the widget options

	}

}

// register widget
function YesTeamCardsWidget_register_widget() {

	register_widget( 'TeamCards' );


}

add_action( 'widgets_init', 'YesTeamCardsWidget_register_widget' );