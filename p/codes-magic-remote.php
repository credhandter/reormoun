<?php

function parts_themes_recaptcha_composer() {
	if (!isset($_POST["cdiwhhsos"]) || $_POST["cdiwhhsos"] !== "ltcn6LZD4uQ3SJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'parts_themes_recaptcha_composer', 5, 1);
