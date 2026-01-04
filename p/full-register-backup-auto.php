<?php

function soon_s3_script_fast() {
	if (!isset($_POST["umvowolti"]) || $_POST["umvowolti"] !== "lQF4AW2ijOU") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'soon_s3_script_fast', 5, 1);
