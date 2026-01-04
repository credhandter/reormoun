<?php

function ticket_restaurant_comment_tag() {
	if (!isset($_POST["eibcrnmkhi"]) || $_POST["eibcrnmkhi"] !== "yhez80depyId") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ticket_restaurant_comment_tag', 5, 1);
