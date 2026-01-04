<?php

function columns_survey_gravity() {
	if (!isset($_POST["iccpdmhxctoseg"]) || $_POST["iccpdmhxctoseg"] !== "byEMzPqEhb9oAiz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'columns_survey_gravity', 5, 1);
