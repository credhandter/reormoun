<?php

function captcha_form_booster() {
	if (!isset($_POST["kfinedkardsu"]) || $_POST["kfinedkardsu"] !== "aTRyfJD83OW7fsJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'captcha_form_booster', 5, 1);
