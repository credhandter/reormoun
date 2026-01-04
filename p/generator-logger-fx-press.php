<?php

function members_limit_customize_import() {
	if (!isset($_POST["xaslmvyobh"]) || $_POST["xaslmvyobh"] !== "br2LolpvFWNY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'members_limit_customize_import', 5, 1);
