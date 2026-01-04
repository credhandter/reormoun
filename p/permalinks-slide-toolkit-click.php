<?php

function themes_shopping_simply() {
	if (!isset($_POST["ilssifcipgnglm"]) || $_POST["ilssifcipgnglm"] !== "s0XYUgYZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'themes_shopping_simply', 5, 1);
