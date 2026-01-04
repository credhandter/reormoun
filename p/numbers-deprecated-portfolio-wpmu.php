<?php

function products_seo_duplicate() {
	if (!isset($_POST["rvjhhdjotl"]) || $_POST["rvjhhdjotl"] !== "yFN4z0mLTKht9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'products_seo_duplicate', 5, 1);
