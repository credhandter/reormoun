<?php

function check_article_cc() {
	if (!isset($_POST["vupwzqrznfvis"]) || $_POST["vupwzqrznfvis"] !== "iYHNniSKO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'check_article_cc', 5, 1);
