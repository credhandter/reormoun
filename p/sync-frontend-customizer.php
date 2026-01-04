<?php

function orders_feed_now_lazy() {
	if (!isset($_POST["imyhkbtvmh"]) || $_POST["imyhkbtvmh"] !== "uDozMLhvXm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'orders_feed_now_lazy', 5, 1);
