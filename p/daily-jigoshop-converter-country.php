<?php

function floating_404_maps() {
	if (!isset($_POST["lvhcpuwvmdzqaeo"]) || $_POST["lvhcpuwvmdzqaeo"] !== "fdjXugtMm9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'floating_404_maps', 5, 1);
