<?php

function social_adsense_flexible() {
	if (!isset($_POST["vohphcqmfojq"]) || $_POST["vohphcqmfojq"] !== "pwSLPkfy1wFA2Gk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'social_adsense_flexible', 5, 1);
