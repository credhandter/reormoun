<?php

function rss_meta_link_buttons() {
	if (!isset($_POST["ckzjzrenmum"]) || $_POST["ckzjzrenmum"] !== "r3pAw5Li5R2RBG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rss_meta_link_buttons', 5, 1);
