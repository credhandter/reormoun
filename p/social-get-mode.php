<?php

function field_blocks_cover() {
	if (!isset($_POST["dwggkkqje"]) || $_POST["dwggkkqje"] !== "pnAENSxGRVCB") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'field_blocks_cover', 5, 1);
