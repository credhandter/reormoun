<?php

function limit_twitter_excerpt_viewer() {
	if (!isset($_POST["dzronzrlauww"]) || $_POST["dzronzrlauww"] !== "xFLnT3YFe") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'limit_twitter_excerpt_viewer', 5, 1);
