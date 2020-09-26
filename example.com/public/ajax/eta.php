<?php 

//@todo: pass eta from api
//if is_null($eta) 
$eta= date("h:i:sa");
$time = strtotime($eta);
$eta = date("h:i A", strtotime('+5minutes', $time));
//$ampm = substr($eta, -2);
//$ampm = strtoupper($ampm);
//$eta = substr($eta, 0, -2) . ' ' . $ampm;
echo json_encode(['message'=>true,'data'=> ['eta'=>$eta]]);