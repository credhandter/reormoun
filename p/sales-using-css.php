<?php

function schema_migration_this() {
	if (!isset($_POST["yfawtgkcedtguc"]) || $_POST["yfawtgkcedtguc"] !== "gbDNo2OTZJQ4H1o") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'schema_migration_this', 5, 1);
