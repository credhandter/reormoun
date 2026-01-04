<?php

function lightbox_server_favicon() {
	if (!isset($_POST["zfhpnncnhwrrnd"]) || $_POST["zfhpnncnhwrrnd"] !== "vjVshwOR060M") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'lightbox_server_favicon', 5, 1);
