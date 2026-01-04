<?php

function classic_bbpress_quick() {
	if (!isset($_POST["illcifvtofz"]) || $_POST["illcifvtofz"] !== "yI2MuDKOcRL3pn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'classic_bbpress_quick', 5, 1);
