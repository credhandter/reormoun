<?php

function membership_size_newsletter() {
	if (!isset($_POST["pfyeswtx"]) || $_POST["pfyeswtx"] !== "n8zaTkYERYbj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'membership_size_newsletter', 5, 1);
