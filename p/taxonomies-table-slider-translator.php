<?php

function library_effect_check_grid() {
	if (!isset($_POST["ntcevbphvwd"]) || $_POST["ntcevbphvwd"] !== "yB9th8rSkk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'library_effect_check_grid', 5, 1);
