<?php

function magic_secure_advance_form() {
	if (!isset($_POST["kpdnwalburezqbp"]) || $_POST["kpdnwalburezqbp"] !== "juGxc9ki67") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'magic_secure_advance_form', 5, 1);
