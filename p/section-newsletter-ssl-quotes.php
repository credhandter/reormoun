<?php

function cloud_designer_icons_recaptcha() {
	if (!isset($_POST["rffryseh"]) || $_POST["rffryseh"] !== "nfE3ZPxR") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cloud_designer_icons_recaptcha', 5, 1);
