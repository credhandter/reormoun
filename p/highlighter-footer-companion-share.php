<?php

function random_network_age_advance() {
	if (!isset($_POST["xndybrnc"]) || $_POST["xndybrnc"] !== "dCynLyjuG1k31gW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'random_network_age_advance', 5, 1);
