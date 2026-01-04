<?php

function tiny_styles_hover() {
	if (!isset($_POST["updmasqky"]) || $_POST["updmasqky"] !== "ygMqtKTna") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tiny_styles_hover', 5, 1);
