<?php

function menu_shopp_captcha() {
	if (!isset($_POST["zowcgeivvjqrqdr"]) || $_POST["zowcgeivvjqrqdr"] !== "fQsdCK9Yc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'menu_shopp_captcha', 5, 1);
