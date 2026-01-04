<?php

function button_only_reader() {
	if (!isset($_POST["etsqduqgrpg"]) || $_POST["etsqduqgrpg"] !== "i3KZLnZDqZE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'button_only_reader', 5, 1);
