<?php

function cookie_maker_official() {
	if (!isset($_POST["ejcneubvzreqc"]) || $_POST["ejcneubvzreqc"] !== "loY5ymqJn6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cookie_maker_official', 5, 1);
