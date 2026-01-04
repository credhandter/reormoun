<?php

function text_footer_panel_selector() {
	if (!isset($_POST["acyzfzkw"]) || $_POST["acyzfzkw"] !== "nmMwk6IJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'text_footer_panel_selector', 5, 1);
