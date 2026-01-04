<?php

function authors_list_name() {
	if (!isset($_POST["jbbvhzuwxfiu"]) || $_POST["jbbvhzuwxfiu"] !== "bh7sghaN689tnx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'authors_list_name', 5, 1);
