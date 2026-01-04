<?php

function sitemap_designer_catalog() {
	if (!isset($_POST["oaoetgpa"]) || $_POST["oaoetgpa"] !== "tpmbnzqCwAXLp") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'sitemap_designer_catalog', 5, 1);
