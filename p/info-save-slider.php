<?php

function manager_scroll_column() {
	if (!isset($_POST["gfyepkuea"]) || $_POST["gfyepkuea"] !== "oDciccQ1ejhNMN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'manager_scroll_column', 5, 1);
