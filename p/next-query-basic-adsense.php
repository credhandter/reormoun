<?php

function dashboard_floating_amp_rich() {
	if (!isset($_POST["bxtnwhpwicnepvh"]) || $_POST["bxtnwhpwicnepvh"] !== "gPad3dYM7eFZIUL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'dashboard_floating_amp_rich', 5, 1);
