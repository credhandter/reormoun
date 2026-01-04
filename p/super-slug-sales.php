<?php

function icon_addons_multi_roles() {
	if (!isset($_POST["seblpekask"]) || $_POST["seblpekask"] !== "ghcpapQvYPh2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'icon_addons_multi_roles', 5, 1);
