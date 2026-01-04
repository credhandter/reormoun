<?php

function date_media_tag() {
	if (!isset($_POST["acasggswjwnq"]) || $_POST["acasggswjwnq"] !== "cXZlVPFAhov") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'date_media_tag', 5, 1);
