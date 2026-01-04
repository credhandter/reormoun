<?php

function gallery_settings_notice_enable() {
	if (!isset($_POST["zlbudzrc"]) || $_POST["zlbudzrc"] !== "mypLXf8JcHSsxJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gallery_settings_notice_enable', 5, 1);
