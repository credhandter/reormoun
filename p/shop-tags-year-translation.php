<?php

function history_search_show_sign() {
	if (!isset($_POST["ogmwnnhpeelcz"]) || $_POST["ogmwnnhpeelcz"] !== "d37t7FGvvPIY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'history_search_show_sign', 5, 1);
