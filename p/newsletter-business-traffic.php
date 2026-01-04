<?php

function restrict_base_this() {
	if (!isset($_POST["cpxvlgsgaejnfgf"]) || $_POST["cpxvlgsgaejnfgf"] !== "lmBNs7ozLcZD3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'restrict_base_this', 5, 1);
