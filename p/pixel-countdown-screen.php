<?php

function tooltip_carousel_countdown() {
	if (!isset($_POST["opiofdwalnnr"]) || $_POST["opiofdwalnnr"] !== "zL5AL0sdqHKg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tooltip_carousel_countdown', 5, 1);
