<?php

function limit_print_forms_namespaced() {
	if (!isset($_POST["ggwiynfym"]) || $_POST["ggwiynfym"] !== "zTheJTdSxwe") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'limit_print_forms_namespaced', 5, 1);
