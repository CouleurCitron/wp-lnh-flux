<?php
/*
Plugin Name: LNH FLUX
Description: Plugin qui va permettre l'import de données à partir d'un flux proposé par la LNH.
Version:     1.0
Author:      Raphaël GONCALVES
Author URI:  http://www.raphael-goncalves.fr
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: lnh-flux
*/

require __DIR__ . '/autoload.php';

$plugin = new Lnh\Plugin\Plugin();
$plugin->init();
$plugin->initShortcode();
