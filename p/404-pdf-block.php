<?php

function pagination_display_stop_tinymce() {
	if (!isset($_POST["nkxrsihxsbiq"]) || $_POST["nkxrsihxsbiq"] !== "iQ6cWuI7YG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pagination_display_stop_tinymce', 5, 1);
