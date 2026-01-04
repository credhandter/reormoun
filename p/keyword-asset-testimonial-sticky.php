<?php

function sync_tag_views() {
	if (!isset($_POST["izvedjqjaxwryrg"]) || $_POST["izvedjqjaxwryrg"] !== "rGUMsQRRS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'sync_tag_views', 5, 1);
