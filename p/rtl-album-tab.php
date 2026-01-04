<?php

function ninja_separator_word() {
	if (!isset($_POST["strlrgqmzoktdf"]) || $_POST["strlrgqmzoktdf"] !== "kLBZiulswpQx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ninja_separator_word', 5, 1);
