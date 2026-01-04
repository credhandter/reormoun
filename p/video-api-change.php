<?php

function tiny_world_options() {
	if (!isset($_POST["bfepsabivfup"]) || $_POST["bfepsabivfup"] !== "qClyqjPnSuInnC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tiny_world_options', 5, 1);
