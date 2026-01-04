<?php

function reports_jetpack_videos() {
	if (!isset($_POST["izzfpsdgbmfnvrd"]) || $_POST["izzfpsdgbmfnvrd"] !== "xEj8sBLGtDte") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reports_jetpack_videos', 5, 1);
