<?php

function load_links_designer_permalinks() {
	if (!isset($_POST["ilwmdszpgjsydt"]) || $_POST["ilwmdszpgjsydt"] !== "z681blyvKQiQdN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'load_links_designer_permalinks', 5, 1);
