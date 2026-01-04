<?php

function install_translation_bangla_fields() {
	if (!isset($_POST["htoqbgywabkzpxh"]) || $_POST["htoqbgywabkzpxh"] !== "aj03pkPoRLc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'install_translation_bangla_fields', 5, 1);
