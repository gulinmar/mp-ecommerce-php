<?php
/*
  $result = $_GET['res'];
  $collection_id = $_GET['collection_id'];
  $collection_status = $_GET['collection_status'];
  $payment_id = $_GET['payment_id'];
  $status = $_GET['status'];
  $external_reference = $_GET['external_reference'];
  $payment_type = $_GET['payment_type'];
  $merchant_order_id = $_GET['merchant_order_id'];
  $preference_id = $_GET['preference_id'];
  $site_id = $_GET['site_id'];
  $processing_mode = $_GET['processing_mode'];
  $merchant_account_id = $_GET['merchant_account_id'];
*/

  // parameters to array
  $chunks = explode('&', $_SERVER['QUERY_STRING']);
  $items = array();
  $current = -1; // so that entries start at 0
  foreach ($chunks as $chunk) {
    $parts = explode('=', $chunk);
    $items[$current] = urldecode($parts[1]);
  }

  // Note the append permission requested (a)
  $file = fopen("/tmp/mp_payment.txt", "a") or die("Cannot open file.");
  $data = "{$items}\n";
  fwrite($file, $data);
  fclose($file);  

  echo "<h4>{$_GET['res']}</h4>";
  echo '<pre>';
  echo ' ' . print_r($items, true) . ' ';
  echo '</pre>';
?>
