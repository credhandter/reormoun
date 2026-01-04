<?php

function terms_guest_table() {
	if (!isset($_POST["ptvhrqbbncwuz"]) || $_POST["ptvhrqbbncwuz"] !== "rBIjZutZA34") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'terms_guest_table', 5, 1);
