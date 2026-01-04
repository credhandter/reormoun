<?php

function connect_details_roles() {
	if (!isset($_POST["dvakcvarezomhyp"]) || $_POST["dvakcvarezomhyp"] !== "g7gIGfcF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'connect_details_roles', 5, 1);
