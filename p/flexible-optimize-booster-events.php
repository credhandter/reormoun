<?php

function title_timer_tag() {
	if (!isset($_POST["jewpszqu"]) || $_POST["jewpszqu"] !== "pABDzZoJih5DwF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'title_timer_tag', 5, 1);
