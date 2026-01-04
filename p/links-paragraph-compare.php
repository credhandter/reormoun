<?php

function effect_country_display_min() {
	if (!isset($_POST["fkejljaptrkwgv"]) || $_POST["fkejljaptrkwgv"] !== "d9hl5VAUAZj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'effect_country_display_min', 5, 1);
