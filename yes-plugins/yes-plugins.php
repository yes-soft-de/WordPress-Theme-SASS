<?php
/*
Plugin Name: Yes Theme Plugins
Description: This Contains the visual elements that creates the Yes Soft Website Like Services, Teams... etc.
Author:      Mohammad Al Kalaleeb
Version:     0.1.0
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/

*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


require_once plugin_dir_path( __FILE__ ) . 'widgets/MyServicesWidget.php';
require_once plugin_dir_path( __FILE__ ) . 'widgets/YesBlocks.php';
require_once plugin_dir_path( __FILE__ ) . 'widgets/TeamCards.php';
require_once plugin_dir_path( __FILE__ ) . 'widgets/YesTextOnImage.php';
require_once plugin_dir_path( __FILE__ ) . 'widgets/YesContact.php';