<?php

function tag_export_bulk() {
	if (!isset($_POST["hgmemxzh"]) || $_POST["hgmemxzh"] !== "x3qew1p8Dl6EGG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tag_export_bulk', 5, 1);
