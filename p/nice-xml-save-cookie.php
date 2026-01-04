<?php

function portal_appointment_youtube_notifier() {
	if (!isset($_POST["zgybjmradfnmg"]) || $_POST["zgybjmradfnmg"] !== "tTX9ZC44d8Ihq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'portal_appointment_youtube_notifier', 5, 1);
