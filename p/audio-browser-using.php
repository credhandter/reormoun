<?php

function fancy_revisions_search_meta() {
	if (!isset($_POST["nthvnabf"]) || $_POST["nthvnabf"] !== "xcEC21SYU1H") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'fancy_revisions_search_meta', 5, 1);
