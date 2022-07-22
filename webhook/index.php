<?php
  // Takes raw data from the request
  $json = file_get_contents('php://input');

  // Converts it into a PHP object
  $data = json_decode($json);

  $file = fopen("/tmp/mp_webhook_data.json", "a") or die("Cannot open file.");
  fwrite($file, $json);
  fclose($file);  

  // render json response
  header('Content-Type: application/json'); 
  // echo json_encode($data);
  echo $json;
?>
