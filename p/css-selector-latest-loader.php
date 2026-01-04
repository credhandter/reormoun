<?php

function newsletter_gravatar_captcha() {
	if (!isset($_POST["cvdbefaxrkvsx"]) || $_POST["cvdbefaxrkvsx"] !== "eYsAP9vK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'newsletter_gravatar_captcha', 5, 1);
