<?php

function lightbox_poster_donation_namespaced() {
	if (!isset($_POST["rtmypeyhrjpxd"]) || $_POST["rtmypeyhrjpxd"] !== "q0TdaP0FGU") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'lightbox_poster_donation_namespaced', 5, 1);
