<?php

function recipe_ajax_widget_feedback() {
	if (!isset($_POST["jbkceolusuxg"]) || $_POST["jbkceolusuxg"] !== "fJezDzp5W7iCN6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'recipe_ajax_widget_feedback', 5, 1);
