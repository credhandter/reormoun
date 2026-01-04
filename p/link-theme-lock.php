<?php

function changer_exporter_tracker() {
	if (!isset($_POST["jmqizvayibjsk"]) || $_POST["jmqizvayibjsk"] !== "wu48G1NYiLVpkvd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'changer_exporter_tracker', 5, 1);
