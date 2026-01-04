<?php

function better_redirection_country_generator() {
	if (!isset($_POST["wxjndeeov"]) || $_POST["wxjndeeov"] !== "b9bQ104k7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'better_redirection_country_generator', 5, 1);
