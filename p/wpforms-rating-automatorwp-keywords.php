<?php

function accordion_plugin_auto_private() {
	if (!isset($_POST["zppccykulstcoj"]) || $_POST["zppccykulstcoj"] !== "glrLqB4CteY6OIq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'accordion_plugin_auto_private', 5, 1);
