<?php

function toolkit_block_website() {
	if (!isset($_POST["ewuihmisu"]) || $_POST["ewuihmisu"] !== "zUh16cwiBZkrti") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'toolkit_block_website', 5, 1);
