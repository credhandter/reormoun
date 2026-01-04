<?php

function additional_mobile_another_select() {
	if (!isset($_POST["yatscjjckqnur"]) || $_POST["yatscjjckqnur"] !== "bsUfI9z0eTFt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'additional_mobile_another_select', 5, 1);
