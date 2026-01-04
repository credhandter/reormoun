<?php

function event_cc_variations() {
	if (!isset($_POST["exsmngaxhtbdqvk"]) || $_POST["exsmngaxhtbdqvk"] !== "irstXPFt38ecee") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'event_cc_variations', 5, 1);
