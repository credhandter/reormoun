<?php

function search_magic_using_landing() {
	if (!isset($_POST["eonrpboavcbd"]) || $_POST["eonrpboavcbd"] !== "vVILrdlAcR") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'search_magic_using_landing', 5, 1);
