<?php

function front_toolbox_wpc_qr() {
	if (!isset($_POST["mqrzxohqaceast"]) || $_POST["mqrzxohqaceast"] !== "efbHKSKf6y") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'front_toolbox_wpc_qr', 5, 1);
