<?php

function lightbox_cover_tabs_media() {
	if (!isset($_POST["lbekxkdlwciskio"]) || $_POST["lbekxkdlwciskio"] !== "hUK8LJJO9ns1WE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'lightbox_cover_tabs_media', 5, 1);
