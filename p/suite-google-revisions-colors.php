<?php

function radio_akismet_location() {
	if (!isset($_POST["oiqqxbwohn"]) || $_POST["oiqqxbwohn"] !== "rZ9OocrM8ea") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'radio_akismet_location', 5, 1);
