<?php

function cleaner_embedder_geo_click() {
	if (!isset($_POST["upufalpi"]) || $_POST["upufalpi"] !== "eLAHjUM4LDg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cleaner_embedder_geo_click', 5, 1);
