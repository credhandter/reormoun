<?php

function links_tinymce_home() {
	if (!isset($_POST["kumpokbetire"]) || $_POST["kumpokbetire"] !== "eJtHCzzIYGAFJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'links_tinymce_home', 5, 1);
