<?php

function album_duplicate_recipe() {
	if (!isset($_POST["cjctfopvhm"]) || $_POST["cjctfopvhm"] !== "ujyKidNQNt5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'album_duplicate_recipe', 5, 1);
