<?php

function rich_addons_modal() {
	if (!isset($_POST["xxnldfaudo"]) || $_POST["xxnldfaudo"] !== "tJBTuLdP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rich_addons_modal', 5, 1);
