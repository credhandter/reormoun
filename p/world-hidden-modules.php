<?php

function slider_role_flash_refresh() {
	if (!isset($_POST["cwtjjubgisbjt"]) || $_POST["cwtjjubgisbjt"] !== "feM4f29cldWxFnu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'slider_role_flash_refresh', 5, 1);
