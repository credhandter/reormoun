<?php

function slideshow_description_restrict_downloads() {
	if (!isset($_POST["krgkrfarz"]) || $_POST["krgkrfarz"] !== "fDiOGrOyzmNS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'slideshow_description_restrict_downloads', 5, 1);
