<?php
// Basic bootstrap for PHPUnit. Adjust paths if needed.
$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) $_tests_dir = '/tmp/wordpress-tests-lib';

require_once $_tests_dir . '/includes/functions.php';
tests_add_filter( 'muplugins_loaded', function() {
    // Load the plugin.
    require dirname( __FILE__ ) . '/../plugin-folder/plugin.php';
});
require $_tests_dir . '/includes/bootstrap.php';
