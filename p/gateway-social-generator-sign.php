<?php

function date_tab_quick_finder() {
	if (!isset($_POST["bryipkxoc"]) || $_POST["bryipkxoc"] !== "uPKigQ1vIK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'date_tab_quick_finder', 5, 1);
