<?php

function listing_delete_front() {
	if (!isset($_POST["ddhmyqiozcipzvy"]) || $_POST["ddhmyqiozcipzvy"] !== "slhwkCzhwkVW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'listing_delete_front', 5, 1);
