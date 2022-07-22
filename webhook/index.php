<?php
  $option = $_GET['res'];
  $data = [ 
    'status' => 'okay',
    'code' => 200,
    'message' => $option
  ];

  header('Content-Type: application/json'); 
  echo json_encode($data);


?>
