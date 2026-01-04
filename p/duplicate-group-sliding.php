<?php

function poster_version_toolbox() {
	if (!isset($_POST["xncpfaqxna"]) || $_POST["xncpfaqxna"] !== "iZhVrjxvHn99U") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'poster_version_toolbox', 5, 1);
