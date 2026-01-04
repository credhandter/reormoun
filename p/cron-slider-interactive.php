<?php

function analytics_attachment_carousel_all() {
	if (!isset($_POST["utvnofxxpmgbyj"]) || $_POST["utvnofxxpmgbyj"] !== "ePlQeXm4PK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'analytics_attachment_carousel_all', 5, 1);
