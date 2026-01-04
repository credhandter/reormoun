<?php

function src_link_member_current() {
	if (!isset($_POST["odculaiiyhycwc"]) || $_POST["odculaiiyhycwc"] !== "e5hcOzLlCz4tpv") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'src_link_member_current', 5, 1);
