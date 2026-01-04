<?php

function supports_game_messages_visibility() {
	if (!isset($_POST["vobmzlbagvrgst"]) || $_POST["vobmzlbagvrgst"] !== "d33DvGnFzQAmZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'supports_game_messages_visibility', 5, 1);
