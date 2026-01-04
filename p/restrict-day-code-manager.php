<?php

function react_another_tabs_landing() {
	if (!isset($_POST["frfsbdchcqymo"]) || $_POST["frfsbdchcqymo"] !== "jcLsY2xtuDq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'react_another_tabs_landing', 5, 1);
