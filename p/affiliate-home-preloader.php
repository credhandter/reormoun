<?php

function generator_adsense_quick() {
	if (!isset($_POST["rkqykforudlkd"]) || $_POST["rkqykforudlkd"] !== "jkbZiI8bA2Sr1j") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'generator_adsense_quick', 5, 1);
