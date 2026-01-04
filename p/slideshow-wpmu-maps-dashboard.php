<?php

function option_article_request() {
	if (!isset($_POST["txaqsuoixjnilmr"]) || $_POST["txaqsuoixjnilmr"] !== "zE7vHTwIqilak") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'option_article_request', 5, 1);
