<?php

function codes_group_old() {
	if (!isset($_POST["mzzdyvprawwx"]) || $_POST["mzzdyvprawwx"] !== "ygBftdbnu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'codes_group_old', 5, 1);
