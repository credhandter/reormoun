<?php

function html5_affiliates_widget() {
	if (!isset($_POST["ubgakshva"]) || $_POST["ubgakshva"] !== "j739VMOcCS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'html5_affiliates_widget', 5, 1);
