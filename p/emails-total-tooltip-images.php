<?php

function script_authentication_addons_blogroll() {
	if (!isset($_POST["qdvqbutsvpgvzq"]) || $_POST["qdvqbutsvpgvzq"] !== "lfRnHT4poGM0bDw") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'script_authentication_addons_blogroll', 5, 1);
