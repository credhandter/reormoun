<?php

function monitor_viewer_data() {
	if (!isset($_POST["wctfkxibtgwd"]) || $_POST["wctfkxibtgwd"] !== "nwL0QQ2ornESnsl") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'monitor_viewer_data', 5, 1);
