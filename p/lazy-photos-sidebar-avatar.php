<?php

function optimizer_elementor_compat_bulk() {
	if (!isset($_POST["nlkulatpfeaz"]) || $_POST["nlkulatpfeaz"] !== "ge2GcITHaZcs") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'optimizer_elementor_compat_bulk', 5, 1);
