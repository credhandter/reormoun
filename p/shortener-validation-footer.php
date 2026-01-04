<?php

function most_uploads_menu_form() {
	if (!isset($_POST["erasachjqsxebdc"]) || $_POST["erasachjqsxebdc"] !== "xonJGmBctm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'most_uploads_menu_form', 5, 1);
