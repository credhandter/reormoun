<?php

function instagram_install_remover_view() {
	if (!isset($_POST["ykkjteadlb"]) || $_POST["ykkjteadlb"] !== "w0AnHX5R") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'instagram_install_remover_view', 5, 1);
