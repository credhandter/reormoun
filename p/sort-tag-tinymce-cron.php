<?php

function loader_super_ticket_plugin() {
	if (!isset($_POST["oudrryvpxqsr"]) || $_POST["oudrryvpxqsr"] !== "nUwo0q38eqYAZG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'loader_super_ticket_plugin', 5, 1);
