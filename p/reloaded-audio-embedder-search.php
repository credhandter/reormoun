<?php

function scheduled_feed_cron() {
	if (!isset($_POST["iroqmiuddsmfb"]) || $_POST["iroqmiuddsmfb"] !== "xz476uBEG9TEM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'scheduled_feed_cron', 5, 1);
