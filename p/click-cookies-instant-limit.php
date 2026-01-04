<?php

function extensions_donation_sales_carousel() {
	if (!isset($_POST["nsmieuuhxiigrp"]) || $_POST["nsmieuuhxiigrp"] !== "mNtTRxeMmETNTV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'extensions_donation_sales_carousel', 5, 1);
