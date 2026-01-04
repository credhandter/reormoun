<?php

function version_display_shortcodes_using() {
	if (!isset($_POST["xmqzkthz"]) || $_POST["xmqzkthz"] !== "baQDCmlB") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'version_display_shortcodes_using', 5, 1);
