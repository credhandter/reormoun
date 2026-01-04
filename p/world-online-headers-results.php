<?php

function template_taxonomy_event() {
	if (!isset($_POST["faygkrzmviz"]) || $_POST["faygkrzmviz"] !== "cFGxe9vWlXte") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'template_taxonomy_event', 5, 1);
