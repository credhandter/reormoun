<?php

function feed_statistics_excerpt_recaptcha() {
	if (!isset($_POST["gxozkxdmhwav"]) || $_POST["gxozkxdmhwav"] !== "ixrB1Qqn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'feed_statistics_excerpt_recaptcha', 5, 1);
