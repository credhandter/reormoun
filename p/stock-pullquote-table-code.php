<?php

function tag_classic_gamipress() {
	if (!isset($_POST["dswmeqcwnolukr"]) || $_POST["dswmeqcwnolukr"] !== "dlqvMqXR2guDv5v") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tag_classic_gamipress', 5, 1);
