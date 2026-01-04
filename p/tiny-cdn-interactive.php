<?php

function name_message_reusable() {
	if (!isset($_POST["szbhkrubljcrv"]) || $_POST["szbhkrubljcrv"] !== "dKbaJ2LGkTV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'name_message_reusable', 5, 1);
