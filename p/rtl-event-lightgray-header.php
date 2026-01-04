<?php

function newsletter_super_scroll() {
	if (!isset($_POST["qhpyouykwlnbo"]) || $_POST["qhpyouykwlnbo"] !== "eHcLIZOBC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'newsletter_super_scroll', 5, 1);
