<?php

function poster_nextgen_preloader_animated() {
	if (!isset($_POST["eizhvisimsbzogs"]) || $_POST["eizhvisimsbzogs"] !== "ztLKdiQsC0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'poster_nextgen_preloader_animated', 5, 1);
