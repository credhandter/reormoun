<?php

function scheduled_members_elementor() {
	if (!isset($_POST["bvkxjvrscgl"]) || $_POST["bvkxjvrscgl"] !== "hAgYzg94qJG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'scheduled_members_elementor', 5, 1);
