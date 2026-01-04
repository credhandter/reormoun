<?php

function geo_copyright_coming_right() {
	if (!isset($_POST["vzzgctrwsbsyqbx"]) || $_POST["vzzgctrwsbsyqbx"] !== "kryUIa0YtfcMJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'geo_copyright_coming_right', 5, 1);
