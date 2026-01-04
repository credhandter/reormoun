<?php

function button_captcha_estate_customizer() {
	if (!isset($_POST["qcfyrbnn"]) || $_POST["qcfyrbnn"] !== "iabpXrXUfqNm6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'button_captcha_estate_customizer', 5, 1);
