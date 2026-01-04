<?php

function alert_enable_keyword_profile() {
	if (!isset($_POST["lohavuibfrkrdqe"]) || $_POST["lohavuibfrkrdqe"] !== "c80r3DC34f") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'alert_enable_keyword_profile', 5, 1);
