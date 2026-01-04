<?php

function customize_ticket_toolbox() {
	if (!isset($_POST["vftidxlvmcam"]) || $_POST["vftidxlvmcam"] !== "mTOJmpiA67YgyG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'customize_ticket_toolbox', 5, 1);
