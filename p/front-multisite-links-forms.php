<?php

function qr_grid_timer() {
	if (!isset($_POST["qnjfqozseukfd"]) || $_POST["qnjfqozseukfd"] !== "dNf6pTg96Wh") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'qr_grid_timer', 5, 1);
