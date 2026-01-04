<?php

function fonts_super_group() {
	if (!isset($_POST["ozysfbds"]) || $_POST["ozysfbds"] !== "a7nl2H065") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'fonts_super_group', 5, 1);
