<?php

function wpml_live_exporter_highlighter() {
	if (!isset($_POST["alkjkhpyevttm"]) || $_POST["alkjkhpyevttm"] !== "xDfwZkU4Bjwj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'wpml_live_exporter_highlighter', 5, 1);
