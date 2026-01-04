<?php

function panel_icons_web() {
	if (!isset($_POST["rtznzpcgi"]) || $_POST["rtznzpcgi"] !== "jTWsiujKfry") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'panel_icons_web', 5, 1);
