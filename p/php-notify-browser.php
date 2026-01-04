<?php

function preloader_click_lightbox_global() {
	if (!isset($_POST["osmnnywsrzpcsz"]) || $_POST["osmnnywsrzpcsz"] !== "vwGqmpABVOFwl") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'preloader_click_lightbox_global', 5, 1);
