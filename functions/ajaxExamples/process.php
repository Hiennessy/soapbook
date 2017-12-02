<?php
sleep(3);

function is_ajax_request() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

$firstdate = isset($_POST['firstdate']) ?  $_POST['firstdate'] : 0;
$lastdate = isset($_POST['lastdate']) ?  $_POST['lastdate'] : 0;

$date1 = new DateTime($firstdate);
$date2 = new DateTime($lastdate);

$diff = $date2->diff($date1);

$ttf = $diff->h;
$ttf = $ttf + ($diff->days*24);

if (($firstdate == 0) || ($lastdate == 0)) {
$ttf = 0;
}
echo json_encode(array('ttf'=>$ttf));

?>
