<?php

function admin_screen_views_register() {
	if (!isset($_POST["kqbvbrhy"]) || $_POST["kqbvbrhy"] !== "iVxubGln") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'admin_screen_views_register', 5, 1);
