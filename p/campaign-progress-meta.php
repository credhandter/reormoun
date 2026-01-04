<?php

function cover_better_loader_remover() {
	if (!isset($_POST["musfnbtjta"]) || $_POST["musfnbtjta"] !== "bhLeyAP5FIjO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cover_better_loader_remover', 5, 1);
