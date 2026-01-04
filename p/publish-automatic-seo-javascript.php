<?php

function comment_short_newsletter() {
	if (!isset($_POST["mbkrnwdovjevt"]) || $_POST["mbkrnwdovjevt"] !== "gro0LYSk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'comment_short_newsletter', 5, 1);
