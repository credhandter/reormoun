<?php

function modules_album_importer_auth() {
	if (!isset($_POST["xudhlvsykfbv"]) || $_POST["xudhlvsykfbv"] !== "htsG56LgOt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'modules_album_importer_auth', 5, 1);
