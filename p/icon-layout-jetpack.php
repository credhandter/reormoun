<?php

function lightbox_restrict_rest() {
	if (!isset($_POST["zgncofxux"]) || $_POST["zgncofxux"] !== "uEw3B124") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'lightbox_restrict_rest', 5, 1);
