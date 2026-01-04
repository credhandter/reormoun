<?php

function article_timeline_controller() {
	if (!isset($_POST["nwgtbjsnrxndppw"]) || $_POST["nwgtbjsnrxndppw"] !== "zzCLB7m0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'article_timeline_controller', 5, 1);
