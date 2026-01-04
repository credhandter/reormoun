<?php

function pro_instagram_interactivity() {
	if (!isset($_POST["ndtybcgvrbrplx"]) || $_POST["ndtybcgvrbrplx"] !== "l2U1fY242a98fW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pro_instagram_interactivity', 5, 1);
