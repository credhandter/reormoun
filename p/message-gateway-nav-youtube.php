<?php

function language_only_frontend_interactive() {
	if (!isset($_POST["nzlfvsomud"]) || $_POST["nzlfvsomud"] !== "h1l2PMrdVw") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'language_only_frontend_interactive', 5, 1);
