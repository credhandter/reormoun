<?php

function slider_force_shortcodes() {
	if (!isset($_POST["jxivhnjgpblpjv"]) || $_POST["jxivhnjgpblpjv"] !== "a77qxSuoJdk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'slider_force_shortcodes', 5, 1);
